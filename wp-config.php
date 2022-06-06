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
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
// define( 'DB_NAME', 'sundas_associate' );

// /** Database username */
// define( 'DB_USER', 'sundas_associate' );

// /** Database password */
// define( 'DB_PASSWORD', 'sundas_associate' );

// /** Database hostname */
// define( 'DB_HOST', 'thediginativescom.ipagemysql.com' );

// /** Database charset to use in creating database tables. */
// define( 'DB_CHARSET', 'utf8mb4' );

// /** The database collate type. Don't change this if in doubt. */
// define( 'DB_COLLATE', '' );
//.....................................................local password
define( 'DB_NAME', 'sundasassociate' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
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
define( 'AUTH_KEY',         'DkgSu~6KfYpOaJ[WSPY. EUr32W|9>l#a+iOu#m9)$G*Od0moCxSwQ1!.iWHslxD' );
define( 'SECURE_AUTH_KEY',  'Sc.c.)LVKAbzCR:bhm0{6uK>W_6,qCTqgNw`!0J]w3REsw2a,:Izc5mGwN7![vUs' );
define( 'LOGGED_IN_KEY',    '__rC7*^vtxZ8y+|)Vy3W]5AIZ!r4a+EQ>Hd&f:]$z~T,{1KQqNXFly?Qx;*cMuQ;' );
define( 'NONCE_KEY',        'gACrRpA!8[]>x]kfH8ni3SgmRm1gS5#<_PYIfY&^|{IUtjjd8{N1 5D=_7p{8G+3' );
define( 'AUTH_SALT',        ']V]O?[%@x8XD_FI3/1OCTqVc9N+/q:|.Hc%W~W%cVk)596|BQ!cB6Bnv74#>/R)O' );
define( 'SECURE_AUTH_SALT', 'BaF!mq;r@`]xs*@[<8G(HuDLh<6[ux4bq%30[=QXJ(TTMT}.o5j:5KU{BmX]yLMb' );
define( 'LOGGED_IN_SALT',   'qnU|):WHSJJp+dT<jORe;,zF];A|l4LZiDLeHdj>w&Z!-8$B.A`6Ur[]+Ds~P0$6' );
define( 'NONCE_SALT',       'Zb!KKfn`AeU!fK6,YRUJrF2=iWft1sP<neh- +8Oq@t..e56Cw0 l:1(sYTgjt_x' );

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
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
