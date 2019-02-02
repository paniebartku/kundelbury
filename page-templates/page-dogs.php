<?php 
/*
Template name: Strona z psami
*/

get_header();

?>
<div class="for-adoption">
<div class="container-fluid for-adoption__orange-row">
<div class="container">
    <div class="row">

    <div class="col-sm-12">
        <div class="for-adoption__title ">
    <h1><?php echo the_title();?></h1>
    </div>
    </div>
    </div>
    </div>
    </div>
    <div class="container">
    <div class="row">
        <div class="col-lg-12">
            <div class="for-adoption__content">
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
    
<div class="row for-adoption__dogs-loop">
  
    <?php
    
    $loop = new WP_Query( array( 'post_type' => 'dogs'));
 
    if ( $loop->have_posts() ) :
        while ( $loop->have_posts() ) : $loop->the_post(); 
        
        $image_ids = get_post_meta($post->ID, 'dogs_image');
        foreach ($image_ids as $image)
        {
        $myupload = get_post_meta($image);
        
        //$thumb = '<img class="img-fluid" src="' . wp_get_attachment_url($image) . '"/>';
        $dogs_image_main = wp_get_attachment_url($image);
        }

        $public = get_post_meta($post->ID, 'dogs_public', true);
       
      
     
        
        
        ?>
        <?php  if ($public == false): ?>
    
          <div class="col-lg-4 col-md-3 col-sm-12 animated fadeIn dogo">
          <div class="">
            <div class="pindex " style="">
                
                 
                        <a href="<?php the_permalink(); ?>">
                       

                        <figure>
                        <img class="img-fluid dogs-gallery__photo--main" src="<?php echo $dogs_image_main; ?>" alt="" />
      <figcaption>
        <div>
          <h3><?php echo get_the_title(); ?></h3>
        </div>
      </figcaption>
    </figure>


                    </a>
                   
             
            </div>
            </div>
            </div>

            <?php endif; ?>
        <?php endwhile; ?>
        
        <?php
    endif;

    wp_reset_postdata();
?>


</div>
</div>
</div>

<script>
                // $(function(){
                //     $(".dogo").each(function(index){
                //         $(this).attr("class", "animation " + index);
                //     });
                // });

            </script>
<?php
get_footer();
?>