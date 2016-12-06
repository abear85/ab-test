<?php get_header(); ?>

	<main role="main">
		<!-- section -->
		<section class="container-fluid">
			<div class="row">
				<div class="col-xs-12"><h1><?php _e( 'Latest Posts', 'html5blank' ); ?></h1></div>
				<div class="col-xs-12"><div class="row"><?php get_template_part('loop'); ?></div></div>
				<div class="col-xs-12"><?php get_template_part('pagination'); ?></div>
			</div>
			

			

			

		</section>
		<!-- /section -->
	</main>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
