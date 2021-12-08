<?php

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

define( 'DB_NAME', 'bitnami_wordpress' );


/** MySQL database username */

define( 'DB_USER', 'bn_wordpress' );


/** MySQL database password */

define( 'DB_PASSWORD', 'b88c0bc2d2c2fa13e2e7e030af1fe00868bed558e760efdbddcb6975d3d93d66' );


/** MySQL hostname */

define( 'DB_HOST', 'localhost:3306' );


/** Database charset to use in creating database tables. */

define( 'DB_CHARSET', 'utf8' );


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

define( 'AUTH_KEY',         'x98NT728k4<F~-S]S64k,|];?Yb3)YFA%J,)R:Te*8![.-7d(E!Jsow{J?KM[X0}' );

define( 'SECURE_AUTH_KEY',  'c3|HqZ5)TfXHHbZsz&:UGMj]eZ^hu h|A%NL!7xAj5a>R6S8aNdX3Zb8sF?odjc~' );

define( 'LOGGED_IN_KEY',    'jak9Lk VO/(Vb7-Vc$^4oF~D.5AC{NlHu7-*Azu.:9M)g~YgezhSW7rG!LY-4Zv[' );

define( 'NONCE_KEY',        'afb|*9U+]qI8Gj6~+yXel}KF/+`@T+]h(:2S{)qC&G{En*_NcEyWK&}Xu0/nWx/+' );

define( 'AUTH_SALT',        '1`Udcp}g56RAt)3YL_wsrIZ).HdNb#QwoDqc 5[>?LK2;FrO|veCdvOSxqty0M1]' );

define( 'SECURE_AUTH_SALT', '!LskO>7zk+~v^#s4`h(fLg7=g[HPaM16J~Q{N~q~K4e^7w;)eI9vvHC(S2}]K{8o' );

define( 'LOGGED_IN_SALT',   'TxK)X>n-Qkya$-S:.%y=wg,;TT?pnkBx#xJ]yJTrG 3[u.|+JS;#aQ7^)d?|oZWy' );

define( 'NONCE_SALT',       'BseIxdb/xpCV.2|I [n(kdh31MW.Hm.Llh!}fgoY&DYH9}OF%VB#*T9>b5`.mG*[' );


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




define( 'FS_METHOD', 'direct' );
/**
 * The WP_SITEURL and WP_HOME options are configured to access from any hostname or IP address.
 * If you want to access only from an specific domain, you can modify them. For example:
 *  define('WP_HOME','http://example.com');
 *  define('WP_SITEURL','http://example.com');
 *
 */
if ( defined( 'WP_CLI' ) ) {
	$_SERVER['HTTP_HOST'] = '127.0.0.1';
}

define( 'WP_HOME', 'http://' . $_SERVER['HTTP_HOST'] . '/' );
define( 'WP_SITEURL', 'http://' . $_SERVER['HTTP_HOST'] . '/' );
define( 'WP_AUTO_UPDATE_CORE', 'minor' );
/* That's all, stop editing! Happy publishing. */


/** Absolute path to the WordPress directory. */

if ( ! defined( 'ABSPATH' ) ) {

	define( 'ABSPATH', __DIR__ . '/' );

}


/** Sets up WordPress vars and included files. */

require_once ABSPATH . 'wp-settings.php';

/**
 * Disable pingback.ping xmlrpc method to prevent WordPress from participating in DDoS attacks
 * More info at: https://docs.bitnami.com/general/apps/wordpress/troubleshooting/xmlrpc-and-pingback/
 */
if ( !defined( 'WP_CLI' ) ) {
	// remove x-pingback HTTP header
	add_filter("wp_headers", function($headers) {
		unset($headers["X-Pingback"]);
		return $headers;
	});
	// disable pingbacks
	add_filter( "xmlrpc_methods", function( $methods ) {
		unset( $methods["pingback.ping"] );
		return $methods;
	});
}
