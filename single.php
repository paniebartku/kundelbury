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
    <div class="container">
    <div class="row">

    <div class="col-lg-12">
    <?php
if (have_posts()) :
  while (have_posts()) :
     the_post();
        the_content();
  endwhile;
endif;
?></div>
    </div>
</div>
</div>

<?php
get_footer();