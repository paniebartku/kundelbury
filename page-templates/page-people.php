<?php 
/*
Template name: Ludzie fundacji
*/

get_header();

?>
<section class="block-page">
    <div class="container-fluid orange-row">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="block-page__title ">
                        <h1><?php echo the_title();?></h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row block-page__pet-loop">
        <?php
        $loop = new WP_Query( array( 'post_type' => 'people','orderby' => 'date',
        'order'   => 'ASC',
        'tax_query' => array(
            array(
                'taxonomy' => 'role',
                'field' => 'slug',
                'terms' => 'zarzad',
            )
        )
    ));
        if ( $loop->have_posts() ) :
            ?>
            <div class="block-page__peopleHeader">
            <h2>Zarząd</h2>
            </div>
             
            <?php
            while ( $loop->have_posts() ) : $loop->the_post(); 
            $meta = get_post_custom($post_id);
            $people_info = unserialize($meta['people_info'][0]);
            $image = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'people-size' );
            ?>
            <div class="col-lg-4 col-md-3 col-sm-12 animated fadeIn dogo">
                <div class="pindex " style="">
                    <h3><?php echo get_the_title(); ?></h3>
                    <?php if(!empty($people_info['job'])){
                     echo '<h4>'.$people_info['job'].'</h4>'; } ?>
                    <a href="<?php the_permalink();?>">
                        <figure>
                            <img class="img-fluid pet-gallery__photo--main" src="<?php echo $image[0]; ?>" alt="" />
                    
                        </figure>
                    </a>        
                </div>
            </div>
            <?php
             endwhile; 
            endif;
        wp_reset_postdata();
    ?>
        </div>


        <div class="row block-page__pet-loop">
        <?php
        $loop = new WP_Query( array( 'post_type' => 'people','orderby' => 'date',
        'order'   => 'ASC',
        'tax_query' => array(
            array(
                'taxonomy' => 'role',
                'field' => 'slug',
                'terms' => 'rada',
            )
        )
    ));
        if ( $loop->have_posts() ) :
            ?>
            <div class="block-page__peopleHeader">
            <h2>Rada</h2>
            </div>
             
            <?php
            while ( $loop->have_posts() ) : $loop->the_post(); 
            $meta = get_post_custom($post_id);
            $people_info = unserialize($meta['people_info'][0]);
            $image = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'people-size' );
            ?>
            <div class="col-lg-4 col-md-3 col-sm-12 animated fadeIn dogo">
                <div class="pindex " style="">
                    <h3><?php echo get_the_title(); ?></h3>
                    <?php if(!empty($people_info['job'])){
                     echo '<h4>'.$people_info['job'].'</h4>'; } ?>
                    <a href="<?php the_permalink();?>">
                        <figure>
                            <img class="img-fluid pet-gallery__photo--main" src="<?php echo $image[0]; ?>" alt="" />
                    
                        </figure>
                    </a>        
                </div>
            </div>
            <?php
             endwhile; 
            endif;
        wp_reset_postdata();
    ?>
        </div>



        <div class="row block-page__pet-loop">
        <?php
        $loop = new WP_Query( array( 'post_type' => 'people','orderby' => 'date',
        'order'   => 'ASC',
        'tax_query' => array(
            array(
                'taxonomy' => 'role',
                'field' => 'slug',
                'terms' => 'inni',
            )
        )
    ));
        if ( $loop->have_posts() ) :
            ?>
            <div class="block-page__peopleHeader">
            <h2>Pozostali</h2>
            </div>
             
            <?php
            while ( $loop->have_posts() ) : $loop->the_post(); 
            $meta = get_post_custom($post_id);
            $people_info = unserialize($meta['people_info'][0]);
            $image = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'people-size' );
            ?>
            <div class="col-lg-4 col-md-3 col-sm-12 animated fadeIn dogo">
                <div class="pindex " style="">
                    <h3><?php echo get_the_title(); ?></h3>
                    <?php if(!empty($people_info['job'])){
                     echo '<h4>'.$people_info['job'].'</h4>'; } ?>
                    <a href="<?php the_permalink();?>">
                        <figure>
                            <img class="img-fluid pet-gallery__photo--main" src="<?php echo $image[0]; ?>" alt="" />
                    
                        </figure>
                    </a>        
                </div>
            </div>
            <?php
             endwhile; 
            endif;
        wp_reset_postdata();
    ?>
        </div>


        <div class="row">
            <div class="col-lg-12">
                <div class="block-page__content">
            <?php
                if (have_posts()) :
                while (have_posts()) :
                    the_post();
                        the_content();
                endwhile;
                endif;
                ?>
                </div>
            </div>
        </div>
    </div>
</section>


<?php
get_footer();
?>