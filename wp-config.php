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
define( 'DB_NAME', 'proyecto' );

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
define( 'AUTH_KEY',         'yd2H*I{+6dm_@3szmxQguI*+}J~`#Z|9=Vg%Iq.a#^v&.!Q4?.9({ Nz+7H|f5eY' );
define( 'SECURE_AUTH_KEY',  'Z#09-$-d-_kXPRY6ME+q~@7%=!]qgjr9v)@A N]^R4#UQwKCF^WEB4}oBc6!ORpc' );
define( 'LOGGED_IN_KEY',    '<posi%5)y`L!~G&a]/M9?G1o9:d^/GTA[;<ureF9@)!/ !mMm9{!7sp|)c.I-m}^' );
define( 'NONCE_KEY',        'SX/W?>3U=V f{b?]6 ^8Ck@5B=c`NDA@!2=;qY%G.Sf2-L< 2O40 (A>?8k|QEdx' );
define( 'AUTH_SALT',        'A-sl1HOKb*`)N6Mc>%)KBby%D/E=PexYM^B9cQ3MOO|Z0UTQI.;}31Eh!zxjjqB^' );
define( 'SECURE_AUTH_SALT', 'GxZP[GMZ^-d7>j&WM12)F;]rEO*[+^[@T($K}o2>;{NM$n<+Hz~K,?pHiwwdR252' );
define( 'LOGGED_IN_SALT',   ';b.U`%H06N+RM.l?M(ik.zHJL9s+/Egfu.u6|OUTd8R:~z d!G+/QKyagjz@#<r.' );
define( 'NONCE_SALT',       '8b{OG.4#+ra)#Z6nh~Vj8&} qt&izY.W9HqW4vR=A!Dh >F#{!]0vada;Ts3ySu(' );

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
