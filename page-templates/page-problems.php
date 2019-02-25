<?php 
/*
Template name: Nasze problemy
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
    

  
    <?php
    
    $loop = new WP_Query( array( 'post_type' => 'problems'));
 
    if ( $loop->have_posts() ) :
        while ( $loop->have_posts() ) : $loop->the_post(); ?>
        <div class="row problems__pets-loop">
            <?php
        $image_ids = get_post_meta($post->ID, 'problem_thumbnail');
        foreach ($image_ids as $image)
        {
        $myupload = get_post_meta($image);
        
        $pet_image_main = wp_get_attachment_url($image);
        }

       
      
     
        
        
        ?>
        
    
        
    
      
        
          <div class="col-lg-4 col-md-12 col-sm-12">
            <div class="pindex " style="">
                
                 <figure>
                        <a href="<?php the_permalink(); ?>">
                       

                       
                        <img class="img-fluid pet-gallery__photo--main" src="<?php echo $pet_image_main; ?>" alt="" />
      
        
   
    


                    </a>
                    </figure>
             
            </div>
            </div>

          

            <div class="col-lg-8">
            <div class="problem-info">
            <h3><?php echo get_the_title(); ?></h3>
            <div class="problem-info__excerpt">
            <?php the_excerpt();?>

            <a class="btn btn__primary--right float-right" href="<?php the_permalink(); ?>" role="button">Czytaj więcej<i class="fas fa-angle-right"></i></a>

            </div>
            </div>
            </div>
    
           
            </div>

        
        <?php endwhile; ?>
        
        <?php
    endif;

    wp_reset_postdata();
?>




</div>
</section>


<?php
get_footer();
?>