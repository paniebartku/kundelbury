<?php

/*
Template name: Strona główna
*/

require get_template_directory() . '/views/homepage.php';


get_header();

?>


<div class="home-block">

  <div class="home-block__parallax" style="background-image: url(<?php echo $parallax; ?>); ">
    <div class="home-block__into-parallax">
      <div class="container">
        <div class="row">
          <div class="col-lg-7">
            <div class="home-block__into-parallax--white">
              <h1><?php echo $parallax_description; ?></h1>
            </div>
           </div>
        </div>
      </div>
</div>



</div>
<div class="container">

    <div class="row">
      <div class="col-lg-4 col-md-4 home-block__icons icons__first">
        <a href="<?php echo $icon1_url; ?>"/>
          <div class="home-block__icon shadow-sm">
            <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/images/icons/pets.png"/>
            <h3><?php echo $icon1; ?></h3>
          </div>
        </a>
      </div>
      <div class="col-lg-4 col-md-4  icons">
        <a href="<?php echo $icon2_url; ?>"/>
          <div class="home-block__icon shadow-sm">
            <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/images/icons/rules.png"/>
            <h3><?php echo $icon2; ?></h3>
          </div>
        </a>
      </div>
      <div class="col-lg-4 col-md-4 icons">
       <a href="<?php echo $icon3_url; ?>"/>
        <div class="home-block__icon shadow-sm">
          <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/images/icons/hands.png"/>
          <h3><?php echo $icon3; ?></h3>
        </div>
        </a>
      </div>
    </div>

  </div>
  <section class="news">
  <div class="container">
    <div class="row row__header">
      <div class="col-lg-7">
        <h2>Aktualności</h2>
      </div>
      <div class="col-lg-5 text-right">
        <a class="btn btn__primary--right" href="#" role="button">Zobacz wszystkie<i class="fas fa-angle-right"></i></a>
      </div>
    </div>
    <div class="row">


     <?php
     $loop = new WP_Query( array( 'post_type' => 'post','posts_per_page' => '6' ) );
     if ( $loop->have_posts() ) :
     while ( $loop->have_posts() ) : $loop->the_post(); ?>

    <div class="col-lg-4 col-md-6 news-col">
   <?php require get_template_directory() . '/views/posts.php';?>
   <div class="news-elem">
   <div class="news-elem__image">
   <a href=" <?php echo get_permalink(); ?>">
    <figure>
      <img class="img-fluid" src="<?php echo $post_thumb; ?>"/>
      
          
        
    </figure>
    </a>
    </div>
    <div class="news-elem__title">
    <a href=" <?php echo get_permalink(); ?>"><h3><?php echo get_the_title(); ?></h3></a>
     </div>
     </div>





      </div>
                 <?php endwhile;

             endif;
             wp_reset_postdata();
          ?>


        </div>
      </div>
      </section>

      <div class="home-block__parallax--second" style="background-image: url(<?php echo $parallax_second; ?>); ">




    </div>
    <div class="container">

        <div class="row">
          <div class="col-lg-4 col-md-4 home-block__icons icons__first">
            <div class="home-block__icon shadow-sm">
              <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/images/icons/help.png"/>
              <h3><?php echo $icon4; ?></h3>
            </div>
          </div>
          <div class="col-lg-4 col-md-4  icons">
            <div class="home-block__icon shadow-sm">
              <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/images/icons/hotel.png"/>
              <h3><?php echo $icon5; ?></h3>
            </div>
          </div>
          <div class="col-lg-4 col-md-4 icons">
            <div class="home-block__icon shadow-sm">
              <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/images/icons/law.png"/>
              <h3><?php echo $icon6; ?></h3>
            </div>
          </div>
        </div>

      </div>
    </div>
  
  </div>

  </div>
<script>
// $("document").ready(function(){

//     $(".icons__first").mouseenter(function(){
//         $(".icons__first img").animate(5000, 'linear').attr('src',"<?php echo get_template_directory_uri(); ?>/images/icons/2_white.png");
//     });
//     $(".icons").mouseleave(function(){
//         $(".icons__first img").animate("slow").attr('src',"<?php echo get_template_directory_uri(); ?>/images/icons/2.png");
//     });
// });
</script>

<?php get_footer(); ?>
