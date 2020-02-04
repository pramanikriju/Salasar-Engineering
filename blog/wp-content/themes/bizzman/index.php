<?php
/*
* Main index page
* 
*/

get_header(); ?>

	<section class="page-header-section set-bg" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/header-bg.jpg');">
        <div class="container"><h1 class="header-title">Blog<span>.</span></h1></div>
    </section>
    <div class="container">
        <?php echo do_shortcode( '[the-post-grid id="5" title=""]' ); ?>
    </div>
<?php get_footer();
