<?php 
/*
Template name: Galeria
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
       
        <?php
            if (have_posts()) :
            while (have_posts()) :
                the_post();
                    the_content();
            endwhile;
            endif;


?>

<div class="row for-adoption__pet-loop">
  
    <?php
    
    $loop = new WP_Query( array( 'post_type' => 'gallery'));
 
    if ( $loop->have_posts() ) :
        while ( $loop->have_posts() ) : $loop->the_post(); 
        
 
       
      
     
        
        
        ?>
       
    
          <div class="col-lg-4 col-md-3 col-sm-12 animated fadeIn dogo">
          <div class="">
            <div class="pindex " style="">
           

                 
                        <a class="pop" href="#">
                       

                        <figure>
                        <?php the_post_thumbnail( 'full', array( 'class' => 'img-fluid' ) ); ?>      
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
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
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

<script>

$(function() {
            $('.pop').on('click', function() {
                $('.imagepreview').attr('src', $(this).find('img').attr('src'));
                $('#imagemodal').modal('show');   
            });     
    });
</script>
  
          
    </div>
    

</div>
</div>


            </script>
<?php
get_footer();
?>