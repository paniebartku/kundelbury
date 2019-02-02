<?php

require get_template_directory() . '/views/dogs.php';
get_header();

// Grab all of our custom post types
$meta = get_post_custom($post_id);

// turn dogs_info into its own array.
$dogs_info = unserialize($meta['dogs_info'][0]);

?>



<div class="container-fluid single-dog-block__orange-row">
<div class="container">
    <div class="row">

    <div class="col-sm-12">
        <div class="single-dog-block__title ">
    <h1><?php echo the_title();?></h1>
    </div>
    </div>
    </div>
    </div>
    </div>
    <div class="container single-dog-block__content">
<div class="row">
        
          <div class="col-lg-6">
              <div class="dogs-gallery">
              <img class="img-fluid dogs-gallery__photo--main" src="<?php echo $dogs_image_main; ?>" alt="" />
              <ul>
                <li><img class="img-fluid dogs-gallery__photo--thumbnail" src="<?php echo $dogs_image_main; ?>" alt="" /></li>
                <li><img class="img-fluid dogs-gallery__photo--thumbnail" src="<?php echo $adi1; ?>" alt="" /></li>
                <li><img class="img-fluid dogs-gallery__photo--thumbnail" src="<?php echo $adi2; ?>" alt="" /></li>
                <li><img class="img-fluid dogs-gallery__photo--thumbnail" src="<?php echo $adi3; ?>" alt="" /></li>
                <li><img class="img-fluid dogs-gallery__photo--thumbnail" src="<?php echo $adi4; ?>" alt="" /></li>
              </ul>
              <div class="single-dog-block__guardian">
                <h2>Opiekun wirtualny:</h2>
                <?php if(!empty($dogs_info['guardian'])){
                   echo '<h3>'.$dogs_info['guardian'].'</h3>'; }else{
                   echo '<h3>Poszukiwany</h3>';
                 }?>
                 </div>
            </div>

            </div>
            <div class="col-lg-6">
              
              <div class="single-dog-block__info">
            <div class="row">
              <div class="col-lg-6">
                <div class="single-dog-block__info--race">
                  <h2>Pies w typie:</h2>
                 <span><?php echo $dogs_info['race']; ?></span>
                 </div>
              </div>
              <div class="col-lg-6">
                 <div class="single-dog-block__info--sex">
                 <h2>Płeć:</h2>
                        <?php 
                        if($dogs_info['sex'] == "first"){
                            echo "<span>samiec</span>";
                            }else 
                        {echo "<span>suczka</span>";}
                        
                        ?>
</div>

</div>
</div>
<div class="row">
<div class="col-lg-6">
<div class="single-dog-block__info--size">
<h2>Rozmiar:</h2>
<?php  

if($dogs_info['size'] == "first"){
    echo "<span>mały</span>";
   }elseif ($dogs_info['size'] == "second")
{echo "<span>średni</span>";}else {echo "<span>duży</span>";}
?>
</div>
</div>
<div class="col-lg-6">
<div class="single-dog-block__info--age">
<h2>Wiek:</h2>
<span>
  <?php
echo $dogs_info['age']; ?>
</span>
</div>
</div>
</div>


<div class="single-dog-block__info--content">
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
  </div>
      









<?php get_footer();?>