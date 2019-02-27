<?php
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
    <div class="container block-page__content">
        <div class="row">
            <div class="col-lg-12">
                <figure>
                    <?php the_post_thumbnail( 'full', array( 'class' => 'img-fluid' ) ); ?>      
                </figure>
            </div>
        </div>
    </div>
</section>

<?php
get_footer();