<?php
define('WP_AUTO_UPDATE_CORE', 'minor');// This setting is required to make sure that WordPress updates can be properly managed in WordPress Toolkit. Remove this line if this WordPress website is not managed by WordPress Toolkit anymore.
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'pmstnepa_pmstnp' );

/** MySQL database username */
define( 'DB_USER', 'pmstnepa_db' );

/** MySQL database password */
define( 'DB_PASSWORD', 'LB(Vp3sE^*5A' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'f5j<kMS(w;AF1BhA#ocyC{@b_EB8Pky#<Ym`*]$[m]d#Wm6njuHKaX$+xcx7@@.)' );
define( 'SECURE_AUTH_KEY',  '1nJ^etu))(y7PV}0^lm0DYe2bD6 `aZc#F:v.rYy%ZpMTE#pV#-tHw?4+9==9obE' );
define( 'LOGGED_IN_KEY',    ')?36VvShEPH:cpF8*=gUSSgW]pFK5|:bn]K|wr+vf@z2_[P]en#So#D%2up-OND-' );
define( 'NONCE_KEY',        'L5xM4@%;eJeFM}/)^g[m]LZn_(Gl|4VM=<NrL/;^_#_oJ$)KokvTqe`}p=}#WyUN' );
define( 'AUTH_SALT',        'cPr,Rn1$CBp4s@2)Sa+/XU5>ovAxcf:EaJ?wN3{gGZkPL#2RvT:nXH0P+=K;%rEg' );
define( 'SECURE_AUTH_SALT', '!;[{nQt/x]|v@gTB]n!WQYo1czspfgkQ?t6*wBZrrU%*koY[0oY*zG%1CF~}T8/=' );
define( 'LOGGED_IN_SALT',   'TZSPZ [<}]+Q0!4VVJbsad@XQ~h5OY-ey9hYxdZl?(w7)jQ<rb[kkuF]Br:w_WRe' );
define( 'NONCE_SALT',       '=E$M]jq|S|aj}c7)si}S<HeCU{8}&78q6Y6/X*}RvMzB:C2(i9@U8_QH[pI|87BM' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'pmst1234_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
function disable_plugin_updates( $value ) {
  if ( isset($value) && is_object($value) ) {
    if ( isset( $value->response['contact-form-7/wp-contact-form-7.php'] ) ) {
      unset( $value->response['contact-form-7/wp-contact-form-7.php'] );
    }
  }
  return $value;
}
add_filter( 'site_transient_update_plugins', 'disable_plugin_updates' );
