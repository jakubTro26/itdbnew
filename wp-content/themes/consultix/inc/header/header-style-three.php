<?php
/**
 * Header Style Three Template
 *
 * @package Consultix
 */
?>

<!-- wraper_header -->
<header class="wraper_header style-three">
	<!-- wraper_header_main -->
	
	<!-- wraper_header_main -->
	<!-- wraper_header_nav -->
	<?php if ( true == consultix_global_var( 'header_sticky_choose', '', false ) ) { ?>
	<div class="wraper_header_nav i-am-sticky">
	<?php } else { ?>
	<div class="wraper_header_nav">
	<?php } ?>
		<div class="container">
			<!-- header_nav -->
			<div class="header_nav">
			    <!-- responsive-nav -->
				<div class="responsive-nav hidden-lg visible-md visible-sm visible-xs" data-responsive-nav-displace="<?php echo esc_attr( consultix_global_var( 'header_mobile_menu_displace', '', false ) ); ?>">
					<i class="fa fa-bars"></i>
				</div>
				<!-- responsive-nav -->
			    <!-- header_nav_action -->
				<div class="header_nav_action">
					<ul>
						<?php if ( ( class_exists( 'WooCommerce' ) ) && ( true == consultix_global_var( 'header_cart_display', '', false ) ) ) : ?>
    						<li class="header-cart-bar">
    						    <a class="header-cart-bar-icon" href="<?php echo esc_url( wc_get_cart_url() ); ?>">
    							    <i class="fa fa-shopping-cart"></i>
    							    <span class="cart-count"><?php echo WC()->cart->get_cart_contents_count(); ?></span>
    							</a>
    						</li>
						<?php endif; ?>
						<?php if ( true == consultix_global_var( 'header_search_display', '', false ) ) : ?>
    						<li class="expanded-searchbar">
    							<form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
    							<div class="form-row">
    								<input type="search" placeholder="<?php echo esc_attr__( 'Search', 'consultix' ); ?>" value="" name="s" required>
    								<button type="submit"></button>
    							</div>
    							</form>
    						</li>
						<?php endif; ?>
					</ul>
				</div>
				<!-- header_nav_action -->
				<!-- nav -->
				<nav class="nav visible-lg hidden-md hidden-sm hidden-xs">
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
				<div class="clearfix"></div>
			</div>
			<!-- header_nav -->
		</div>
	</div>
	<!-- wraper_header_nav -->
</header>
<!-- wraper_header -->

<?php if ( true == consultix_global_var( 'header_search_display', '', false ) ) : ?>
	<?php if ( 'flyout-search' == consultix_global_var( 'header_search_style', '', false ) ) : ?>
		<!-- wraper_flyout_search -->
		<div class="wraper_flyout_search">
			<div class="table">
				<div class="table-cell">
				    <!-- flyout-search-close -->
				    <div class="flyout-search-close">
    					<i class="fa fa-times"></i>
    				</div>
    				<!-- flyout-search-close -->
					<!-- flyout_search -->
					<div class="flyout_search">
						<!-- search-form -->
						<form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
						<div class="form-row">
							<input type="search" placeholder="<?php echo esc_attr__( 'Search...', 'consultix' ); ?>" value="" name="s" required>
							<button type="submit"><i class="fa fa-search"></i></button>
						</div>
						</form>
						<!-- search-form -->
					</div>
					<!-- flyout_search -->
				</div>
			</div>
		</div>
		<!-- wraper_flyout_search -->
	<?php endif; ?>
<?php endif; ?>