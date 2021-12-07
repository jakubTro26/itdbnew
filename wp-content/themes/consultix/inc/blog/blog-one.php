<?php
/**
 * Template for Blog One
 *
 * @package Consultix
 */

?>
<!-- wraper_blog_main -->
<div class="wraper_blog_main">
	<div class="container">
		<!-- row -->
		<div class="row">
			<?php if ( 'nosidebar' === consultix_global_var( 'blog-layout', '', false ) ) { ?>
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<?php } else { ?>
				<?php if ( 'leftsidebar' === consultix_global_var( 'blog-layout', '', false ) ) { ?>
					<div class="col-lg-9 col-md-9 col-sm-8 col-xs-12 pull-right">
				<?php } elseif ( 'rightsidebar' === consultix_global_var( 'blog-layout', '', false ) ) { ?>
					<div class="col-lg-9 col-md-9 col-sm-8 col-xs-12 pull-left">
				<?php } else { ?>
					<div class="col-lg-9 col-md-9 col-sm-8 col-xs-12">
				<?php } ?>
			<?php } ?>
					<!-- blog_main -->
					<div class="blog_main">
						<div class="row">
							<?php
							if ( have_posts() ) :
								/* Start the Loop */
								while ( have_posts() ) :
									the_post();

									/*
									 * Include the Post-Format-specific template for the content.
									 * If you want to override this in a child theme, then include a file
									 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
									 */
									if ( 'leftsidebar' === consultix_global_var( 'blog-layout', '', false ) ) {
										echo '<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">';
									} elseif ( 'rightsidebar' === consultix_global_var( 'blog-layout', '', false ) ) {
										echo '<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">';
									} else {
										echo '<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">';
									}
									get_template_part( 'template-parts/content', get_post_format() );
									echo '</div>';
								endwhile;
							else :
								get_template_part( 'template-parts/content', 'none' );
							endif;
							?>
						</div>
						<?php consultix_pagination(); ?>
					</div>
					<!-- blog_main -->
				</div>
				<?php if ( 'nosidebar' === consultix_global_var( 'blog-layout', '', false ) ) { ?>
				<?php } else { ?>
					<?php if ( 'leftsidebar' === consultix_global_var( 'blog-layout', '', false ) ) { ?>
						<div class="col-lg-3 col-md-3 col-sm-4 col-xs-12 pull-left">
					<?php } elseif ( 'rightsidebar' === consultix_global_var( 'blog-layout', '', false ) ) { ?>
						<div class="col-lg-3 col-md-3 col-sm-4 col-xs-12 pull-right">
					<?php } else { ?>
						<div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
					<?php } ?>
						<?php get_sidebar(); ?>
					</div>
				<?php } ?>
			</div>
			<!-- row -->
		</div>
	</div>
	<!-- wraper_blog_main -->
