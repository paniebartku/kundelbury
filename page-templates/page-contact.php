<?php

/*
Template name: Kontakt
*/
get_header();

?>
<div class="contact">
<div class="container-fluid orange-row">
<div class="container">
    <div class="row">

    <div class="col-sm-12">
        <div class="contact__title ">
    <h1><?php echo the_title();?></h1>
    </div>
    </div>
    </div>
    </div>
    </div>
    <div class="container">
    <div class="row">
    <div class="col-lg-12">
    <div class="contact__content">
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

    <div class="col-lg-12">
    <div class="google-maps">
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d23445.043181485355!2d19.393755781411578!3d51.85444526163795!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x471bb5ee395e3b99%3A0xed92ae3b92130b3f!2sFundacja+Medor+Przyjaciele+Bezdomnych+Zwierz%C4%85t!5e0!3m2!1spl!2spl!4v1549958993046" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe> 
 </div>


   </div>
    </div>
</div>
</div>    


<?php get_footer(); ?>