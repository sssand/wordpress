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
define( 'AUTH_KEY',         'K</b1_4JGuk;b%Y8qtL{=?V0+z{!%uf2*U(n 8oI;m44~jwW)sTW+9doTW >oY|n' );
define( 'SECURE_AUTH_KEY',  'hv@{24.SN{!>%}eFsXw3MnxuX}o7OimTqt@NOwV891X.AJ-uH|h [zV3>YVtL*ma' );
define( 'LOGGED_IN_KEY',    'zMpvy o,6(m/>{`Cs.lr45lb=wWqWimzFEA.4d{uj#?o.^v3j.Y/kHID#K]TK@PF' );
define( 'NONCE_KEY',        'QX5NINkx!U^i#>%q6-gqeBqXW1Vupx;R$CQtoXgZY!w@]3#D&,`?$^RSE+mCx:|>' );
define( 'AUTH_SALT',        'P`8>TUne@Gm[w~|1)xYlF<bSuL9Vs3QHU4N1%9@q}k::2]G7o_LJW c7=1eI/$LU' );
define( 'SECURE_AUTH_SALT', ']#oprVw1[DapayiuqQ0?A[FZ46ihVnrZbBH6Q)_s/dS+y=>vkRcoXW&=<-Z#| !N' );
define( 'LOGGED_IN_SALT',   'q((v8L/:M@[$?XULdX,9SY0D%n!{)/V?}E)yeAwB;2$!U;o&uY(2f*Ksb<HnHbx`' );
define( 'NONCE_SALT',       'hbcOz>Gk/l$VV6/Z7T[-pW3byzw1/oM 0nJXdQ(fT}^N_Vt3gF<|@C`(H|T#fM*i' );

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
