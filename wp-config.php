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
define( 'DB_NAME', 'amazima' );

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
define( 'AUTH_KEY',         '`,%B]+)/+t{N1Muj5]SB.@?pIz_6MtY/F#Ult_EB(>zl&e~;S4T3CLMbZSP]cF$)' );
define( 'SECURE_AUTH_KEY',  'tY%; 2RYYHY`_$RV-i4h<$2DIcc3c>J _lL/1H0J7),.Jqic^m8^=QC]@Lu7.P,)' );
define( 'LOGGED_IN_KEY',    'w+G3Cpl H&ZMA3n]/S!=2-lvHD%jbhVw?4UJ|#Rc`]|Zj%X$&RPL]~LSJ(s[GaJ1' );
define( 'NONCE_KEY',        'hANW4Ea=x$Lya6fBwqusb!@^vZt$BZjy:x,PHR7)BA7X)VXgY?vjQq&g!4Cxw83+' );
define( 'AUTH_SALT',        '*FWIHKe8lo/*,##MQX$~GZ 1B4F#KQ~yf&x*n~rOKrKIDybBL.xM@|6u@:sd;_#r' );
define( 'SECURE_AUTH_SALT', 'B3Rf3vNu.vDhl<R-:2e%>IdNDTBtJB/^^?bGtw0^]!>P^Jt(:QCNn_RB{p1?9,/4' );
define( 'LOGGED_IN_SALT',   '/&D0ZbPrbv3nmC4{[=EKZOCxZ,}R+Q=,HHw0*V`5_EzI&o3GB*~*z*>Rj&=<Q[aR' );
define( 'NONCE_SALT',       'JC}}B4pvh7,U*nnS@SRE]DiL#napeT;3S|yivK}rd4sxBjH.vtMCv|=-yyHYUQQ4' );

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
