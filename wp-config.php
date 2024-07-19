<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'wordpress' );

/** Database password */
define( 'DB_PASSWORD', 'wordpress' );

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
define( 'AUTH_KEY',         'R2s!jT?,Gz}g@u4(G:avx{N}oy&Hi}E?sdYwhD .`^;)[CVp(4%bZRmjXAmf[8*g' );
define( 'SECURE_AUTH_KEY',  'Z-LJ ~@u~j9r?yY9T6(l|t|t6nN&g9 /8/yh>Ax=f;}7 Ju:wfV2v8O$ 5i}%b%&' );
define( 'LOGGED_IN_KEY',    '.AGG>-n040OAx7!S)tGp*?9xWlnQp>jerjwj#r~mF_sib7U&d.w9SVGuz~;DKWy[' );
define( 'NONCE_KEY',        'D?R-3UZyMdc5ge1Gb?1OO] 7Hd[P0YQv,sCa}7;W`N0_~ Sfl/BHtDO#3xvtJ5r:' );
define( 'AUTH_SALT',        '9%vQ=hC5jN+>(J:x^UV]t1tD$8y=aE0Xl0K!Ajlxry^Qt<q:?AD b uVMEj#pNsC' );
define( 'SECURE_AUTH_SALT', 'j% ,ieHvM|t}_;1n09i7)7#&xF0O%&!q&uPu{:W%YRb0?0+4=>;Jkc|.pBPr*6BF' );
define( 'LOGGED_IN_SALT',   '/V10u[1#S$n2vC5b8j34]YxigLO`[RI%ZeoNL=cnnMI7Wni&pms}bvb0l$*4AD02' );
define( 'NONCE_SALT',       'pqj9umw}[T[/wUYS*UMGVRDCPQC0eO5|E>~WAP6j6/?Q%%U|c<2/Si*XcB7W:=0m' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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

