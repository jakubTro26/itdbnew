<?php
//Begin Really Simple SSL session cookie settings
@ini_set('session.cookie_httponly', true);
@ini_set('session.cookie_secure', true);
@ini_set('session.use_only_cookies', true);
//END Really Simple SSL

//Begin Really Simple SSL Load balancing fix
if ((isset($_ENV["HTTPS"]) && ("on" == $_ENV["HTTPS"]))
|| (isset($_SERVER["HTTP_X_FORWARDED_SSL"]) && (strpos($_SERVER["HTTP_X_FORWARDED_SSL"], "1") !== false))
|| (isset($_SERVER["HTTP_X_FORWARDED_SSL"]) && (strpos($_SERVER["HTTP_X_FORWARDED_SSL"], "on") !== false))
|| (isset($_SERVER["HTTP_CF_VISITOR"]) && (strpos($_SERVER["HTTP_CF_VISITOR"], "https") !== false))
|| (isset($_SERVER["HTTP_CLOUDFRONT_FORWARDED_PROTO"]) && (strpos($_SERVER["HTTP_CLOUDFRONT_FORWARDED_PROTO"], "https") !== false))
|| (isset($_SERVER["HTTP_X_FORWARDED_PROTO"]) && (strpos($_SERVER["HTTP_X_FORWARDED_PROTO"], "https") !== false))
|| (isset($_SERVER["HTTP_X_PROTO"]) && (strpos($_SERVER["HTTP_X_PROTO"], "SSL") !== false))
) {
$_SERVER["HTTPS"] = "on";
}
//END Really Simple SSL
$_SERVER['HTTP_HOST'] = $_SERVER['HTTP_X_FORWARDED_HOST'];
$_SERVER['REQUEST_URI'] = str_replace("wordpress", "home",
$_SERVER['REQUEST_URI']);
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'admin_webwww' );

/** MySQL database username */
define( 'DB_USER', 'admin_webwww' );

/** MySQL database password */
define( 'DB_PASSWORD', 'AVqWSeOBeB' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         ';x>lqVvV2fb?@2Ztm`?jchQ~W 1gu5tp-yNqKLY?ro3rflL:5Hktw6+BjlzNd`6m' );
define( 'SECURE_AUTH_KEY',  'd1#kY{|zWU8dqgKpP9qz1%1K1ZVS(jG?o&iXmaRhPhe,[vO_`H32/;<o/SoJFQXx' );
define( 'LOGGED_IN_KEY',    '5qZ$E]5y@-2[`{)NF2}ryuj6bI#PH*Bk|uf/3F#WG%TK01faCHDnbw`>[FUPdW=i' );
define( 'NONCE_KEY',        'v(^Sdp>]dE S%{RX9<o)$6sDen<kapEEX!?7~ST{P{-YegDsmLog`p.~v&2Fx(n&' );
define( 'AUTH_SALT',        ')gQOf4*SaT=#}WU<+;;>r-1 tm84Wpwg1=N%{t{-5PpUUf7!^Tz$l%t<-N(=4(>9' );
define( 'SECURE_AUTH_SALT', '5ofuliT*(_dsi2cGD>I3~`yk+MuI!*<PF1B$|p}6^{qZ9Y1F1Q=#3#C1gRci9E]+' );
define( 'LOGGED_IN_SALT',   'v76Y,tmTg%SH$A}6ECUs]|&%!!wx>j|fx]K@!YLCti]C,Xf040L~bV&|,gf(Jp|G' );
define( 'NONCE_SALT',       '7Fke<t+oY[P3)(pe?3G|H4u7*hhzlq .R-Fep@0F#jwG_+wV%q,-PmR?]G}:O]PQ' );
define('WP_HOME','https://itdb.biz');
define('WP_SITEURL','https://itdb.biz');
define( 'REDIRECTION_DISABLE', true );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', true );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
