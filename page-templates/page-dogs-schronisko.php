<?php 
/*
Template name: Psy ze schroniska
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
        <div class="row block-page__pet-loop">
        <?php
        $loop = new WP_Query( array( 
            'post_type' => 'dogs',
            'tax_query' => array(
                array(
                    'taxonomy' => 'type',
                    'field' => 'slug',
                    'terms' => 'psy-schroniska',  
                )
            )
            )
        );
        if ( $loop->have_posts() ) :
            while ( $loop->have_posts() ) : $loop->the_post(); 
            
            $image_ids = get_post_meta($post->ID, 'pet_image');
            foreach ($image_ids as $image)
            {
            $myupload = get_post_meta($image);
            $pet_image_main = wp_get_attachment_url($image);
            }

            $public = get_post_meta($post->ID, 'pet_public', true); 
            $rainbow = get_post_meta($post->ID, 'rainbow_public', true);          
         
            ?>
            <?php  if (($public == false) && ($rainbow == false)): ?>
            <div class="col-lg-4 col-md-3 col-sm-12 animated fadeIn dogo">
                <div class="pindex " style="">
                    <a href="<?php the_permalink(); ?>">
                        <figure>
                            <img class="img-fluid pet-gallery__photo--main" src="<?php echo $pet_image_main; ?>" alt="" />
                            <figcaption>
                                <div>
                                    <h3><?php echo get_the_title(); ?></h3>
                                </div>
                            </figcaption>
                        </figure>
                    </a>
                </div>
            </div>

                <?php endif; 
             endwhile; 
            endif;
        wp_reset_postdata();
    ?>
        </div>
    </div>
</section>


<?php
get_footer();
?>