<?php 

get_header();
?>
<section class="block-page">
<div class="container-fluid orange-row">
<div class="container">
    <div class="row">

    <div class="col-sm-12">
        <div class="block-page__title ">
    <h1>Aktualności</h1>
    </div>
    </div>
    </div>
    </div>
    </div>
<div class="container block-page__content">


  <div class="row">


   <?php
   $loop = new WP_Query( array( 'post_type' => 'post', 'posts_per_page' => '-1' ) );
   if ( $loop->have_posts() ) :
   while ( $loop->have_posts() ) : $loop->the_post(); ?>

  <div class="col-lg-4 col-md-6 news-col--index animated fadeIn dogo">
 <?php require get_template_directory() . '/variables/posts.php';?>
 <div class="news-elem">
 <div class="news-elem__image">
 <a href=" <?php echo get_permalink(); ?>">
  <figure>
    <img class="img-fluid" src="<?php echo $post_thumb; ?>"/>
    
        
      
  </figure>
  </a>
  </div>
  <div class="news-elem__title">
  <a href=" <?php echo get_permalink(); ?>"><h3><?php echo get_the_title(); ?></h3></a>
   </div>
   </div>





    </div>
               <?php endwhile;

           endif;
           wp_reset_postdata();
        ?>


      </div>
    </div>
    </section>

<?php
get_footer();
?>