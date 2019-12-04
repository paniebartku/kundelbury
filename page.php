<?php

/*
Template name: Kontakt
*/
get_header();

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
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="block-page__content">
                    <article>
                        <?php
                        if (have_posts()) :
                        while (have_posts()) : the_post(); the_content();
                        endwhile;
                        endif;
                        ?>
                    </article>
                </div>
            </div>
        </div>
    </div>
</section>    

<?php get_footer(); ?>