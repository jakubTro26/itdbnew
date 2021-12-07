<?php
/**
 * Template for Default Header
 *
 * @package Consultix
 */

?>

<!-- wraper_header -->
<header class="wraper_header style-one">
	<!-- wraper_header_main -->
	<div class="wraper_header_main">
		<div class="container">
			<!-- header_main -->
			<div class="header_main">
				<!-- brand-logo -->
				<div class="brand-logo a">
						<?php if ( has_custom_logo() ) { ?>
        						<?php the_custom_logo(); ?>
        				<?php } else { ?>
        					    <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><h2 class="site-title"><?php echo esc_html( get_bloginfo( 'name' ) ); ?></h2></a>
        				<?php } ?>
				</div>
				<!-- brand-logo -->
				<!-- responsive-nav -->
				<div class="responsive-nav" data-responsive-nav-direction="right" data-responsive-nav-displace="false">
					<i class="fa fa-bars"></i>
				</div>
				<!-- responsive-nav -->
				<!-- nav -->
				<nav class="nav hidden">
				    <div class="sidr-close">
				        <i class="fa fa-times"></i>
				    </div>
					<?php
					wp_nav_menu(
						array(
							'theme_location' => 'top',
							'fallback_cb'    => false,
						)
					);
					?>
				</nav>
				<!-- nav -->
			</div>
			<!-- header_main -->
		</div>
	</div>
	<!-- wraper_header_main -->
</header>
<!-- wraper_header -->