

<?php get_header(); ?>

    <section class="page-header-section set-bg" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/header-bg.jpg');">
        <div class="container"><h1 class="header-title">Blog<span>.</span></h1></div>
    </section>

	<div class="container" style="margin-top:100px;margin-bottom:100px;">
        <div class="row">
            <div class="col-lg-9">
                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

				<h2><?php the_title(); ?></h2>
				<?php the_content(); ?>
				<?php echo get_the_date(); ?>

				<?php endwhile; ?>
				<?php endif; ?>
            </div>
            <div class="col-lg-3">
                
            </div>
        </div>
    </div>

<?php get_footer(); ?>