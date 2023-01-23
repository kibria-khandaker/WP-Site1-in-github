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
define( 'DB_NAME', 'githubhost_WP-Site1-in-github' );

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
define( 'AUTH_KEY',         '*BOXEJ(g1yaHN5Q.06Pgl`:=dP5ZG~gX/Wnt^mlMuDh-Ve4s,K<Dd(NpP4<BwX%V' );
define( 'SECURE_AUTH_KEY',  '&3aVJrS3ysfwNZb6-AGi@].iClkE{9K5q?#JdttCml4s?wN{sN/&Z/l>~31cl9cW' );
define( 'LOGGED_IN_KEY',    ']_125h#|xapz69CH0hg;Pej2&Ym2U~![xQ/x}O5{3Mf->&1?^:P_O`glTH_?1Bz9' );
define( 'NONCE_KEY',        'i;DImN1/ak`Z3;RGGJ8@LRZ>$[bi@JM^;#7fb%E<GjJ,tms%/WDYDg uckPUO}`~' );
define( 'AUTH_SALT',        'f4@ U=;d%^&zZ-iiEf2aY~I7PlRpz}d!B#}(@1uB8T6KS~B2ziMCKI3N,{M3#=m&' );
define( 'SECURE_AUTH_SALT', 'k@NK&,Ct<=L8anN.c7EfqUb|#(hm+O0zdM!.Xj(OgctLgMW+s08CL!I|z1&[ikt-' );
define( 'LOGGED_IN_SALT',   'KKb@|w(P4V$2L{!jO$KRUN@_Cr)u44i%oCm=52_w6G_L3K@C7gJ5ERy,NBs,5&[.' );
define( 'NONCE_SALT',       'L3zXhe_8Vk VE+&xo.#/1hSU|*CAMz^^5.tt-)nk+(T^6F3-d>TsAT{}_TgTL};W' );

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
