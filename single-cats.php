<?php

require get_template_directory() . '/variables/pets.php';
get_header();

$meta = get_post_custom($post_id);
$cats_info = unserialize($meta['cat_info'][0]);

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
        <div class="col-sm-12">
        <a class="btn btn__primary--left" href="<?php echo get_page_link(322); ?>" role="button"><i class="fas fa-angle-left"></i>Powrót do galerii kotów</a>
        </div>
      </div>
<div class="row">
        
          <div class="col-lg-6">
              <div class="block-gallery">
              <img class="img-fluid block-gallery__photo--main" src="<?php echo $pet_image_main; ?>" alt="" />
              <ul>
                <li><img class="img-fluid block-gallery__photo--thumbnail" src="<?php echo $pet_image_main; ?>" alt="" /></li>
                <li><img class="img-fluid block-gallery__photo--thumbnail" src="<?php echo $adi1; ?>" alt="" /></li>
                <li><img class="img-fluid block-gallery__photo--thumbnail" src="<?php echo $adi2; ?>" alt="" /></li>
                <li><img class="img-fluid block-gallery__photo--thumbnail" src="<?php echo $adi3; ?>" alt="" /></li>
                <li><img class="img-fluid block-gallery__photo--thumbnail" src="<?php echo $adi4; ?>" alt="" /></li>
              </ul>
              <div class="block-single-pet__guardian">
                <h2>Opiekun wirtualny:</h2>
                <?php if(!empty($cats_info['guardian'])){
                   echo '<h3>'.$cats_info['guardian'].'</h3>'; }else{
                   echo '<h3>Poszukiwany</h3>';
                 }?>
                 </div>
            </div>

            </div>
            <div class="col-lg-6">
              
              <div class="block-single-pet__info">
            <div class="row">
              <div class="col-lg-6">
                <div class="block-single-pet__info--race">
                  <h2>Kot w typie:</h2>
                 <span class="main"><?php echo $cats_info['race']; ?></span>
                 </div>
              </div>
              <div class="col-lg-6">
                 <div class="block-single-pet__info--sex">
                 <h2>Płeć:</h2>
                        <?php 
                        if($cats_info['sex'] == "first"){
                            echo "<span class='main'>kot</span>";
                            }else 
                        {echo "<span class='main'>kotka</span>";}
                        
                        ?>
</div>

</div>
</div>
<div class="row">
<div class="col-lg-6">
<div class="block-single-pet__info--size">
<h2>Rozmiar:</h2>
<?php  

if($cats_info['size'] == "first"){
    echo "<span class='main'>mały</span>";
   }elseif ($cats_info['size'] == "second")
  {echo "<span class='main'>średni</span>";}



else {echo "<span class='main'>duży</span>";}
?>
</div>
</div>
<div class="col-lg-6">
<div class="block-single-pet__info--age">
<h2>Wiek:</h2>
<span class="main">
  <?php
echo $cats_info['age']; ?>
</span>
</div>
</div>
</div>


<div class="block-single-pet__info--content">
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
      

  </section>







<?php get_footer();?>