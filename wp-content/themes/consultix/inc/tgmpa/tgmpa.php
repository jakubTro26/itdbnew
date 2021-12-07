<?php
/**
 * This file represents an example of the code that themes would use to register
 * the required plugins.
 *
 * It is expected that theme authors would copy and paste this code into their
 * functions.php file, and amend to suit.
 *
 * @package    TGM-Plugin-Activation
 * @subpackage Example
 * @version    2.4.1
 * @author     Thomas Griffin
 * @author     Gary Jones
 * @copyright  Copyright (c) 2011, Thomas Griffin
 * @license    //opensource.org/licenses/gpl-2.0.php GPL v2 or later
 * @link       //github.com/thomasgriffin/TGM-Plugin-Activation
 */

require_once get_template_directory() . '/inc/tgmpa/class-tgm-plugin-activation.php';

/**
 * Undocumented function
 */
function radiantthemes_register_required_plugins() {
	$plugins = array(
		// WPBakery Page Builder.
		array(
			'name'     => 'WPBakery Page Builder',
			'slug'     => 'js_composer',
			'source'   => 'https://api.radiantthemes.com/plugins/@3d!S58hndj-5d5&-fg8/visual-composer--SQeyhuYxqWFubs5iyeWPczR8jE7zU6zen8JpUGZw.zip',
			'required' => true,
		),

		// Slider Revolution.
		array(
			'name'     => 'Slider Revolution',
			'slug'     => 'revslider',
			'source'   => 'https://api.radiantthemes.com/plugins/@3d!S58hndj-5d5&-fg8/revslider--4cLsaCdwDzB4jxfMDiKyn8w6aaGoxSAuARhrNfm6.zip',
			'required' => true,
		),
		// Unyson.
		array(
			'name'     => 'Unyson',
			'slug'     => 'unyson',
			'required' => true,
		),
		
		array(
			'name'               => 'RadiantThemes Custom Post Type',
			'slug'               => 'radiantthemes-custom-post-type',
			'source'             => 'https://consultix.radiantthemes.com/plugins/radiantthemes-custom-post-type.zip',
			'required'           => true,
		),

		array(
			'name'               => 'RadiantThemes Addons',
			'slug'               => 'radiantthemes-addons',
			'source'             => 'https://consultix.radiantthemes.com/plugins/radiantthemes-addons.zip',
			'required'           => true,
		),

		array(
			'name'               => 'RadiantThemes Mega Menu',
			'slug'               => 'radiantthemes-mega-menu',
			'source'             => 'https://consultix.radiantthemes.com/plugins/radiantthemes-mega-menu.zip',
			'required'           => false,
		),

		array(
			'name'               => 'RadiantThemes Custom Admin Login',
			'slug'               => 'radiantthemes-admin-login',
			'source'             => 'https://consultix.radiantthemes.com/plugins/radiantthemes-admin-login.zip',
			'required'           => false,
		),
    
		// This is an example of how to include a plugin from the WordPress Plugin Repository.
		array(
			'name'     => 'Contact Form 7',
			'slug'     => 'contact-form-7',
			'required' => true,
		),

		array(
			'name'     => 'Mailchimp',
			'slug'     => 'mailchimp-for-wp',
			'required' => true,
		),

		array(
			'name'     => 'woocommerce',
			'slug'     => 'woocommerce',
			'required' => false,
		),
		

		array(
			'name'     => 'Redux Framework',
			'slug'     => 'redux-framework',
			'required' => true,
		),

		array(
			'name'     => 'The Events Calendar',
			'slug'     => 'the-events-calendar',
			'required' => false,
		),
		
	);

	$config = array(
		'id'           => 'tgmpa',                 // Unique ID for hashing notices for multiple instances of TGMPA.
		'default_path' => '',                      // Default absolute path to bundled plugins.
		'menu'         => 'tgmpa-install-plugins', // Menu slug.
		'parent_slug'  => 'themes.php',            // Parent menu slug.
		'capability'   => 'edit_theme_options',    // Capability needed to view plugin install page, should be a capability associated with the parent menu used.
		'has_notices'  => true,                    // Show admin notices or not.
		'dismissable'  => true,                    // If false, a user cannot dismiss the nag message.
		'dismiss_msg'  => '',                      // If 'dismissable' is false, this message will be output at top of nag.
		'is_automatic' => true,                    // Automatically activate plugins after installation or not.
		'message'      => '',                      // Message to output right before the plugins table.
	);

	tgmpa( $plugins, $config );

}
add_action( 'tgmpa_register', 'radiantthemes_register_required_plugins' );
