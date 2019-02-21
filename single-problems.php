<?php
get_header();
?>
<div class="single-block">
<div class="container-fluid single-block__orange-row">
<div class="container">
    <div class="row">

    <div class="col-sm-12">
        <div class="single-block__title ">
    <h1><?php echo the_title();?></h1>
    </div>
    </div>
    </div>
    </div>
    </div>
    <div class="container single__content">
    <div class="row">

    <div class="col-lg-7">
    <?php
if (have_posts()) :
  while (have_posts()) :
     the_post();
        the_content();
  endwhile;
endif;
?></div>

<div class="offset-lg-1 col-lg-4">
    <?php
$image_ids = get_post_meta($post->ID, 'problem_image');
        foreach ($image_ids as $image)
        {
        $myupload = get_post_meta($image);
        
        $problem_image = wp_get_attachment_url($image);
        }
?>
<a href="#" class="pop">
         <img class="img-fluid pet-gallery__photo--main" src="<?php echo $problem_image; ?>" alt="" />
         </a>

         <div class="modal fade" id="imagemodal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog" data-dismiss="modal">
    <div class="modal-content"  >              
      <div class="modal-body">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <img src="" class="imagepreview" style="width: 100%;" >
      </div> 
   


    </div>
  </div>
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
</div>

<?php
get_footer();