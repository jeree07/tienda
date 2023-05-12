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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'tienda' );

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
define( 'AUTH_KEY',         'xtz(o3}x]JM/Q_x0~V X`Ov)1HT*P1UY5}8hcC_EHcS=2N1A9?r&aD/>VONSn{RO' );
define( 'SECURE_AUTH_KEY',  'B%{U4g5dBj60-YSDBGkd(bG=I@iyxZc<X/AI(b~r<@c^h-6)8E;)Xv!=]Nz`7O2{' );
define( 'LOGGED_IN_KEY',    'NT~Lc@e15]!f4y$p1,kAU+TI{7%oT^K5xwa<0{4!ZXEHn|2508l/J(-VBr6MhJoB' );
define( 'NONCE_KEY',        ',t*[]~5}WT(mQ;mV&qU B=F9]/84QQ+^qW*,u`vw}0iY*/(E)^os[{xFT>O:8^{,' );
define( 'AUTH_SALT',        '%|C2upP4}^M+nL&MBib<Z]xY60q8J aUtN!@ew9ID >u(.YPvQ?im8{7@q*kx2j ' );
define( 'SECURE_AUTH_SALT', '.ZtcU2BzNC|vZ/~iRBWyv:v2%k>XyXO;}07*$p2~e*t&Wvs66Lj-dli7y|>z4.Ql' );
define( 'LOGGED_IN_SALT',   '8MoTQ?ANTX+y,#94>j0-Tq>E:^Mupmhwu-#H}38LbH;AfI?pJibt`,E;lTd$8%4y' );
define( 'NONCE_SALT',       '9jV!-IR<`z S~/faM]r&c_V;#2yyRSdx)|&S+H3 w[p@IXR5dbSgSTD)`u$MFp9*' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
