<?php 
/*
Template name: Galeria
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
<div class="row for-adoption__pet-loop">
  
    <?php
    
    $loop = new WP_Query( array( 'post_type' => 'gallery'));
    if ( $loop->have_posts() ) :
        while ( $loop->have_posts() ) : $loop->the_post(); 
    ?>
       
    
          <div class="col-lg-6 col-md-3 col-sm-12 animated fadeIn dogo">
          <div>
            <div class="pindex">
              <a class="pop" href="#">
                 <figure>
                    <?php the_post_thumbnail( 'medor-size', array( 'class' => 'img-fluid' ) ); ?>      
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

            <div class="modal fade" id="imagemodal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" data-dismiss="modal">
    <div class="modal-content"  >              
      <div class="modal-body">
        <button type="button" style="margin-bottom: 1rem;" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <img src="" class="imagepreview" style="width: 100%;" >
      </div> 
      <div class="modal-footer">
        <?php the_excerpt() ;?>
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


  
          
    </div>
    

</div>
</section>


<?php
get_footer();
?>