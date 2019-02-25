<?php

require get_template_directory() . '/variables/pets.php';
get_header();

// Grab all of our custom post types
$meta = get_post_custom($post_id);

// turn dogs_info into its own array.
$dogs_info = unserialize($meta['dogs_info'][0]);

?>



<div class="container-fluid orange-row">
<div class="container">
    <div class="row">

    <div class="col-sm-12">
        <div class="single-pet-block__title ">
    <h1><?php echo the_title();?></h1>
    </div>
    </div> 
    </div>
    </div>
    </div>
    <div class="container single-pet-block__content">
      <div class="row">
        <div class="col-sm-12">
        <a class="btn btn__primary--left" href="#" role="button"><i class="fas fa-angle-left"></i>Powrót do galerii psów</a>
        </div>
      </div>
<div class="row">
        
          <div class="col-lg-6">
              <div class="pets-gallery">
              <img class="img-fluid pets-gallery__photo--main" src="<?php echo $pet_image_main; ?>" alt="" />
              <ul>
                <li><img class="img-fluid pets-gallery__photo--thumbnail" src="<?php echo $pet_image_main; ?>" alt="" /></li>
                <li><img class="img-fluid pets-gallery__photo--thumbnail" src="<?php echo $adi1; ?>" alt="" /></li>
                <li><img class="img-fluid pets-gallery__photo--thumbnail" src="<?php echo $adi2; ?>" alt="" /></li>
                <li><img class="img-fluid pets-gallery__photo--thumbnail" src="<?php echo $adi3; ?>" alt="" /></li>
                <li><img class="img-fluid pets-gallery__photo--thumbnail" src="<?php echo $adi4; ?>" alt="" /></li>
              </ul>
              <div class="single-pet-block__guardian">
                <h2>Opiekun wirtualny:</h2>
                <?php if(!empty($dogs_info['guardian'])){
                   echo '<h3>'.$dogs_info['guardian'].'</h3>'; }else{
                   echo '<h3>Poszukiwany</h3>';
                 }?>
                 </div>
            </div>

            </div>
            <div class="col-lg-6">
              
              <div class="single-pet-block__info">
            <div class="row">
              <div class="col-lg-6">
                <div class="single-pet-block__info--race">
                  <h2>Pies w typie:</h2>
                 <span class="main"><?php echo $dogs_info['race']; ?></span>
                 </div>
              </div>
              <div class="col-lg-6">
                 <div class="single-pet-block__info--sex">
                 <h2>Płeć:</h2>
                        <?php 
                        if($dogs_info['sex'] == "first"){
                            echo "<span class='main'>samiec</span>";
                            }else 
                        {echo "<span class='main'>suczka</span>";}
                        
                        ?>
</div>

</div>
</div>
<div class="row">
<div class="col-lg-6">
<div class="single-pet-block__info--size">
<h2>Rozmiar:</h2>
<?php  

if($dogs_info['size'] == "first"){
    echo "<span class='main'>mikropies</span>";
   }elseif ($dogs_info['size'] == "second")
  {echo "<span class='main'>mały</span>";}
  elseif ($dogs_info['size'] == "third"){echo "<span class='main'>średni</span>";}
  elseif ($dogs_info['size'] == "fourth"){echo "<span class='main'>duży</span>";}


else {echo "<span class='main'>bardzo duży</span>";}
?>
</div>
</div>
<div class="col-lg-6">
<div class="single-pet-block__info--age">
<h2>Wiek:</h2>
<span class="main">
  <?php
echo $dogs_info['age']; ?>
</span>
</div>
</div>
</div>


<div class="single-pet-block__info--content">
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