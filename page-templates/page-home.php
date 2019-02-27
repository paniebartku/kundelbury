<?php

/*
Template name: Strona główna
*/

require get_template_directory() . '/variables/homepage.php';


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
            <h4><?php echo $icon1; ?></h4>
          </div>
        </a>
      </div>
      <div class="col-lg-4 col-md-4  icons">
        <a href="<?php echo $icon2_url; ?>"/>
          <div class="home-block__icon shadow-sm">
            <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/images/icons/rules.png"/>
            <h4><?php echo $icon2; ?></h4>
          </div>
        </a>
      </div>
      <div class="col-lg-4 col-md-4  icons">
       <a href="<?php echo $icon3_url; ?>"/>
        <div class="home-block__icon shadow-sm">
          <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/images/icons/hands.png"/>
          <h4><?php echo $icon3; ?></h4>
        </div>
        </a>
      </div>
    </div>

  </div>
  <section class="news">
  <div class="container">

    <div class="row">
      <div class="col-sm-12">
      <div class="news__header-flex">
    
        <h2>Aktualności</h2>
   
     
        <a class="btn btn__primary--right" href="<?php echo esc_url( home_url( '/blog' ) ); ?>" role="button">Zobacz wszystkie<i class="fas fa-angle-right"></i></a>
   
      </div>
      </div>
    
    </div>


    <div class="row">


     <?php
     $loop = new WP_Query( array( 'post_type' => 'post', 'posts_per_page' => '6' ) );
     if ( $loop->have_posts() ) :
     while ( $loop->have_posts() ) : $loop->the_post(); ?>

    <div class="col-lg-4 col-md-6 news-col">
   <?php require get_template_directory() . '/variables/posts.php';?>
   <div class="news-elem">
   <div class="news-elem__image">
   <a href=" <?php echo get_permalink(); ?>">
    <figure>
      <img class="img-fluid" src="<?php echo $post_thumb; ?>"/>
      
          
        
    </figure>
    </a>
    </div>
    <div class="news-elem__title">
    <a href=" <?php echo get_permalink(); ?>"><h4><?php echo get_the_title(); ?></h4></a>
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
          <a href="<?php echo $icon4_url; ?>"/>
            <div class="home-block__icon shadow-sm">
              <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/images/icons/help.png"/>
              <h4><?php echo $icon4; ?></h4>
            </div>
            </a>
          </div>
          <div class="col-lg-4 col-md-4  icons">
          <a href="<?php echo $icon5_url; ?>"/>
            <div class="home-block__icon shadow-sm">
              <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/images/icons/hotel.png"/>
              <h4><?php echo $icon5; ?></h4>
            </div>
            </a>
          </div>
          <div class="col-lg-4 col-md-4 icons">
          <a href="<?php echo $icon6_url; ?>"/>
            <div class="home-block__icon shadow-sm">
              <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/images/icons/law.png"/>
              <h4><?php echo $icon6; ?></h4>
            </div>
            </a>
          </div>
        </div>

      </div>

      
    </div>
  
  </div>

  </div>


<?php get_footer(); ?>
