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
define( 'DB_NAME', 'yumyoda_db' );

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
define( 'AUTH_KEY',         'n0P73Fb ok8UKSq `}FQokF5_Vz,|cLNvjOv!6,+FbW4CU+i0*vf)B%I6j)%k{I1' );
define( 'SECURE_AUTH_KEY',  ',*F|,3u*$p~^+*cs)UV>z!fIXkjCfH47Pea|?eA]~`~}~Z1AZo>Q)Gb#XjF[)3]r' );
define( 'LOGGED_IN_KEY',    'uB-|t5+z^m(4vypLa>iQpl(F6s%9oO2V]|GN[K0<@/:0Ta1kCn.wqW#>*#gckQ,D' );
define( 'NONCE_KEY',        'Tv-|&lt{#^^2zr8@cZ?+enhm7qk^F#c(<]q<Qz~M+NS|NsAle4r>Ilv+GNo&Wo?H' );
define( 'AUTH_SALT',        '%uHqcy+)B;#}L@n:z|My[$^+Jzx?M.yZs42 Ox1J2kq&Y&qpmoM^4IM030K52Q[:' );
define( 'SECURE_AUTH_SALT', 'QC2xLCuBnZ<clK2*@*7?FOu3#Fg#fvoLgAW7VoP)cud}*-HL1N3oL_i(Zb;JD7@J' );
define( 'LOGGED_IN_SALT',   'U)$iT0m |$(Su53)j-YgT>-O<-)=8](~d5Gu&Yrn2fYUx|Ml)qq`v lZYAr[lrKE' );
define( 'NONCE_SALT',       'l^hm7nyB%HE(6]!&JU ~l5EHpmoa9h6b~iKc5<-`^2m~~H_G^^5MbYA f@N4pHNd' );

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
