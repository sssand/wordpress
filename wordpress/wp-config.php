<?php
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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpressdb' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         '7.?1Fe!c2p<t/R,-8vFB[vS17O])O]>e2f%}FuVF~~dMV-@) ]-KQu[mdSjfI>*h' );
define( 'SECURE_AUTH_KEY',  'k]FO0!#OgvJBzR!W,v8nYEqpy?Rk;WT58SN(w0P^izuNNzxAq$cx35wh*QN/Bm3U' );
define( 'LOGGED_IN_KEY',    'tw*G{l~ajZ:Vfa49T]&4@(#uqUNeEu3i*Wk@VB=;nx`xx$ws_]Ka2e9e`(S,h]g.' );
define( 'NONCE_KEY',        '_NMU4p]fp%jt m)(U8.hn0M@;7ywATt:w*Y<5]I)9*Df$xW5!u|;J;$cm,R~AE=C' );
define( 'AUTH_SALT',        'HJKHqCTIiGe]^&Mw#Kdc@q!<|/yD-KJT_H,RxU3VH5AXp=)t-MO~*o3W9/.;su5y' );
define( 'SECURE_AUTH_SALT', 'X-dM8DNEVVB@Fw<,o1B!-B]x3z K?{P^cl@i9r~6(m@T=JW5Kr_z=sS7Id22:7}#' );
define( 'LOGGED_IN_SALT',   ';|2*/&bRDkF|ms.*$|0VP(m,~FLk$jCW+MYSw5.T&RF|Bv.I]v#],S1(R%;pPUFA' );
define( 'NONCE_SALT',       'qD$NeMTsI5Im(jKz)e.a>t1R1Ll+o;n~p1L`8}f1/ ^]}.KDQ,Du jPmnvmId3h~' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
