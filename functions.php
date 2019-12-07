<?php

require get_template_directory() . '/inc/walker.php';

class Functions {
    public function __construct() {

	    $this->theme_setup();
        $this->add_actions();
        $this->add_filters();
    }

    public function theme_setup() {
        add_action( 'after_setup_theme', array( $this, 'theme_setup_core' ) );
    }
    public function theme_setup_core() {
        add_theme_support('menus');
        register_nav_menu('primary', 'Główne menu');
        add_theme_support( 'custom-logo');
        add_theme_support( 'post-thumbnails' );
        add_image_size( 'medor-size', 600, 400, array( 'left', 'top' ) );
    }

    public function add_actions() {
        //add_action( 'wp_enqueue_scripts', array($this, 'include_custom_jquery'));
        add_action( 'wp_enqueue_scripts', array($this, 'load_scripts_and_styles') );
        add_action( 'init', array($this, 'removes'));
        add_action( 'init', array($this,'dogs_post_type') );
        add_action( 'init', array($this,'cats_post_type') );
        add_action( 'init', array($this,'problems_post_type') );
        add_action( 'init', array($this,'gallery_post_type') );
        add_action( 'widgets_init', array($this,'footer_sidebars')  );
        add_action( 'pre_get_posts', array($this, 'parse_request') );
        add_action( 'manage_gallery_posts_custom_column', array($this, 'gallery_column_content'), 10, 2);
        add_action( 'init', array($this, 'create_dogs_tax' ) );
        add_action('restrict_manage_posts', array($this, 'filter_post_type_by_taxonomy') );

    }

    public function add_filters(){
        add_filter( 'piklist_admin_pages', array($this,'medor_settings'));
        add_filter( 'post_type_link', array($this, 'remove_slug' ),10, 3 );
        add_filter( 'enter_title_here', array($this,'wpb_change_title_text' ));
        add_filter( 'manage_gallery_posts_columns', array($this, 'gallery_column'), 10);
        add_filter('parse_query', array($this, 'convert_id_to_term_in_query') );
    }

    // public function include_custom_jquery() {
    //     wp_deregister_script('jquery');
    // }

    public function load_scripts_and_styles() {
        wp_enqueue_style('kundelcss', get_template_directory_uri() . '/dist/dist.min.css', array(), '1.0.2', 'all');
       // wp_enqueue_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js', array(), '3.1.1', true);
        //wp_enqueue_script('bootstrapjs', get_template_directory_uri() . '/js/bootstrap.min.js', array(), '4.1.1', true);
        wp_enqueue_script('kundeljs', get_template_directory_uri() . '/dist/dist.min.js', array('jquery'), '1.0.1', true);
    }

    public function removes(){
        remove_post_type_support( 'post', 'excerpt');
        remove_post_type_support( 'page', 'comments');
        remove_post_type_support( 'page', 'thumbnail');
    }

    public function dogs_post_type() {
        register_post_type('dogs',
          array(
            'labels' => array(
              'name' => __( 'Psy' ),
              'singular_name' => __( 'Pies' ),
              'add_new' => 'Dodaj Psa',
              'all_items' => 'Wszystkie Psy',
              'add_new_item' => 'Dodaj Psa',
              'edit_item' => 'Edytuj Psa',
              'new_item' => 'Nowy Pies',
              'view_item' => 'Zobacz Psa',
              'search_item' => 'Szukaj Psa',
              'not_found' => 'Psa nie znaleziono',
              'not_found_in_trash' => 'Nie ma psa w koszu',
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => "dogs", 'with_front' => false ),
            'menu_icon'   => 'dashicons-image-filter',
          )
        );
      }

      public function cats_post_type() {
        register_post_type('cats',
          array(
            'labels' => array(
              'name' => __( 'Inne Zwierzęta' ),
              'singular_name' => __( 'Zwierzę' ),
              'add_new' => 'Dodaj Zwierzę',
              'all_items' => 'Wszystkie Zwierzęta',
              'add_new_item' => 'Dodaj Zwierzę',
              'edit_item' => 'Edytuj Zwierzę',
              'new_item' => 'Nowe Zwierzę',
              'view_item' => 'Zobacz Zwierzę',
              'search_item' => 'Szukaj Zwierzęcia',
              'not_found' => 'Zwierzęcia nie znaleziono',
              'not_found_in_trash' => 'Nie ma Zwierzęcia w koszu',
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => "cats", 'with_front' => false ),
            'menu_icon'   => 'dashicons-image-filter',
          )
        );
      }

      public function problems_post_type() {
        register_post_type('problems',
          array(
            'labels' => array(
              'name' => __( 'Szczęśliwe zakończenia' ),
              'singular_name' => __( 'Zakończenie' ),
              'add_new' => 'Dodaj Zakończenie',
              'all_items' => 'Wszystkie Zakończenia',
              'add_new_item' => 'Dodaj Zakończenie',
              'edit_item' => 'Edytuj Zakończenie',
              'new_item' => 'Nowy Zakończenie',
              'view_item' => 'Zobacz Zakończenie',
              'search_item' => 'Szukaj Zakończenia',
              'not_found' => 'Zakończenia nie znaleziono',
              'not_found_in_trash' => 'Nie ma Zakończenia w koszu',
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => "problems", 'with_front' => false ),
            'menu_icon'   => 'dashicons-image-filter',
            'supports' => array('title','editor','excerpt'),
          )
        );
      }

      public function gallery_post_type() {
        register_post_type('gallery',
          array(
            'labels' => array(
              'name' => __( 'Galeria' ),
              'singular_name' => __( 'Zdjęcie' ),
              'add_new' => 'Dodaj Zdjęcie',
              'all_items' => 'Wszystkie Zdjęcia',
              'add_new_item' => 'Dodaj Zdjęcie',
              'edit_item' => 'Edytuj Zdjęcie',
              'new_item' => 'Nowe Zdjęcie',
              'view_item' => 'Zobacz Zdjęcie',
              'search_item' => 'Szukaj Zdjęcia',
              'not_found' => 'Zdjęcia nie znaleziono',
              'not_found_in_trash' => 'Nie ma Zdjęcia w koszu',
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => "gallery", 'with_front' => false ),
            'menu_icon'   => 'dashicons-image-filter',
            'supports' => array('title','excerpt', 'thumbnail'),
          )
        );
      }

    public function footer_sidebars() {
        register_sidebar( array(
            'name' => __( 'Footer sidebar 1'),
            'id' => 'footer-sidebar-1',
            'description' => __( 'Pierwszy sidebar'),
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h3 class="widgettitle">',
            'after_title'   => '</h3>',
            ) );
        register_sidebar( array(
            'name' => __( 'Footer sidebar 2'),
            'id' => 'footer-sidebar-2',
            'description' => __( 'Drugi sidebar'),
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h3 class="widgettitle">',
            'after_title'   => '</h3>',
            ) );
        register_sidebar( array(
            'name' => __( 'Trzeci sidebar 3'),
            'id' => 'footer-sidebar-3',
            'description' => __( 'Pierwszy sidebar'),
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h3 class="widgettitle">',
            'after_title'   => '</h3>',
            ) );
        register_sidebar( array(
            'name' => __( 'Footer sidebar 4'),
            'id' => 'footer-sidebar-4',
            'description' => __( 'Czwarty sidebar'),
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h3 class="widgettitle">',
            'after_title'   => '</h3>',
            ) );       
    }   

    
    public function medor_settings ($pages) {
        $pages[] = array(
         'page_title' => __('Ustawienia motywu')
         ,'menu_title' => __('Settings', 'piklist')
         ,'capability' => 'manage_options'
         ,'menu_slug' => 'custom_settings'
         ,'setting' => 'my_theme_settings'
         ,'single_line' => true
         ,'default_tab' => 'Basic'
         ,'save_text' => 'Zapisz ustawienia'
       );
     
       return $pages;
     }
    
 
    public function remove_slug( $post_link, $post ) {
        
        if ( 'dogs' != $post->post_type || 'publish' != $post->post_status ) {
        return $post_link;
        }
         
        $post_link = str_replace( '/' . $post->post_type . '/', '/', $post_link );
        return $post_link;
    }

    public function parse_request( $query ) {
            
        if ( ! $query->is_main_query() || 2 != count( $query->query ) || ! isset( $query->query['page'] ) ) {
            return;
        }
    
        if ( ! empty( $query->query['name'] ) ) {
            $query->set( 'post_type', array( 'post', 'dogs', 'cats', 'problems', 'page' ) );
        }
    }        

    public function wpb_change_title_text( $title ){
        $screen = get_current_screen();
     
        if  ( 'cats' == $screen->post_type ) {
             $title = 'Wpisz imię kota';
        }
        if  ( 'dogs' == $screen->post_type ) {
            $title = 'Wpisz imię psa';
       }
     
        return $title;
    }        

    public function gallery_column($defaults){
        $defaults['riv_post_thumbs'] = __('Zdjęcie');
        return $defaults;
    }        
            
             
    public function gallery_column_content($column_name, $id){
        if($column_name === 'riv_post_thumbs'){
            echo   the_post_thumbnail( 'thumbnail', array( 'class' => 'img-fluid' ) );
    
        }
    }  

    function create_dogs_tax() {
      register_taxonomy(
        'type',
        'dogs',
        array(
          'label' => __( 'Type' ),
          'rewrite' => array( 'slug' => 'type' ),
          'hierarchical' => true,
          'show_ui'           => true,
          'show_admin_column' => true,
          'query_var'         => true,
        )
      );
    }

    function filter_post_type_by_taxonomy() {
      global $typenow;
      $post_type = 'dogs'; // change to your post type
      $taxonomy  = 'type'; // change to your taxonomy
      if ($typenow == $post_type) {
        $selected      = isset($_GET[$taxonomy]) ? $_GET[$taxonomy] : '';
        $info_taxonomy = get_taxonomy($taxonomy);
        wp_dropdown_categories(array(
          'show_option_all' => sprintf( __( 'Wszystkie (typy)', 'textdomain' ), $info_taxonomy->label ),
          'taxonomy'        => $taxonomy,
          'name'            => $taxonomy,
          'orderby'         => 'name',
          'selected'        => $selected,
          'show_count'      => true,
          'hide_empty'      => true,
        ));
      };
    }

    function convert_id_to_term_in_query($query) {
      global $pagenow;
      $post_type = 'dogs'; // change to your post type
      $taxonomy  = 'type'; // change to your taxonomy
      $q_vars    = &$query->query_vars;
      if ( $pagenow == 'edit.php' && isset($q_vars['post_type']) && $q_vars['post_type'] == $post_type && isset($q_vars[$taxonomy]) && is_numeric($q_vars[$taxonomy]) && $q_vars[$taxonomy] != 0 ) {
        $term = get_term_by('id', $q_vars[$taxonomy], $taxonomy);
        $q_vars[$taxonomy] = $term->slug;
      }
    }
    

}

$functions = new Functions;



 

