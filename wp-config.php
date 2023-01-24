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
define( 'DB_NAME', 'githubhost_Site01' );

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
define( 'AUTH_KEY',         '%77L`:a7,YJ2+oZ^Al^V~&@g0%7M.#ePb/b?3k%5mRgUS,v6i0(0?/WfcoP0#aKw' );
define( 'SECURE_AUTH_KEY',  'G%`ZwI|HfOwu_iJZqUOF$XDGN}yag7OC=[oNDq s-d41etE*<M IV{f/XL6I}4w[' );
define( 'LOGGED_IN_KEY',    'msxfJ?7A&*,mOtY(kl+$ZtUDY;;CV!Hls&q5gHjO5^Ts6Qbr9%mL)bg*&A.`;0GQ' );
define( 'NONCE_KEY',        '<1: eU-|44KF+Ljz/*S^/iw#WpIG>Z}=T?0?j}c*4ZeIq#@tFZVN^:[(._,Upt)-' );
define( 'AUTH_SALT',        '.@6tPa1M320?2}8Es@(D<R.H-@cMmhg>/W%V+/?ZfW>|u )j0c7TTWpm70I A)@I' );
define( 'SECURE_AUTH_SALT', '`Hu.:Q|4}aAP]#0H=u|.$9tgJG,3loo&<j9S5<zyYMXLr#I.RmXP1xR7T+k 7(cE' );
define( 'LOGGED_IN_SALT',   '+@-Ne*Fp*].XCDF~)k{R6GZD+8bfON[v#^fT${If?YP[~K<=;:HD~fG|7q& P]0Y' );
define( 'NONCE_SALT',       '[0_#K$tN3M9X_rx<xNpM6rKsG4P_2X w$Z:)u4`,h)59tG:WKRjYX@!0>;@Zoqn{' );

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
