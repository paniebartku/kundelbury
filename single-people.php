<?php
get_header();

$meta = get_post_custom($post_id);
$people_info = unserialize($meta['people_info'][0]);

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
  <div class="container block-page__content">

    <div class="row">
      <div class="col-lg-6">
        <div class="block-gallery">
        <?php
        $image = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );
        ?>
          <img class="img-fluid block-gallery__photo--main" src="<?php echo $image[0]; ?>" alt="" />
        <div class="block-single-pet__guardian">
          <?php if(!empty($people_info['job'])){
            echo '<h2>Stanowisko</h2>';
          echo '<h3>'.$people_info['job'].'</h3>'; } ?>
        </div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="block-single-pet__info">
          <div class="row">
            <div class="col-md-6 col-12">
            <?php
                if (have_posts()) :
                while (have_posts()) : the_post(); the_content();
                endwhile;
                endif;
                ?>
    </div>
  </div>
    </div>
  </div>
</section>

<?php get_footer();?>