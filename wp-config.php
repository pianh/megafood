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
define( 'DB_NAME', 'mega-food.tk' );

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
define( 'AUTH_KEY',         '`.QbWypV6 ^S(PEIKt|jNz~!pLSE]i|R,`D7PL^;G^jd`0IpK_.>hA)B`R3)UE,S' );
define( 'SECURE_AUTH_KEY',  '~BY/:nW./Qzd5_x&,F_@#R@F?Wt1oW09xZJoQhl>-I_1:=dBsC4&9[?hfP@p`P8G' );
define( 'LOGGED_IN_KEY',    '(sFNw2V #_i7_Y/hh>D&++w.X8Ovgj^!bRb<nVg)D@F(om+TsXIFcI(.Of5JisIk' );
define( 'NONCE_KEY',        '.JjH$G2|2<G)h$bs{@`K*Faw<v|W)y{q?K>)srEs AgWV%v1?A~=(n*Tn Dc/;(v' );
define( 'AUTH_SALT',        'D.bGJKhb 7Pl(&(rb4{qm|`*Zl76R-dJ0)]Va1?y+qb`Mv~B(-XX%/s,GVcqmK>4' );
define( 'SECURE_AUTH_SALT', '=]T+|Uzp{^#30,X6-uKU=*1yXuMx0<;ft0XpR$iv.~uPSo*@fmS^co3pp:M-<xMm' );
define( 'LOGGED_IN_SALT',   ';M;N;~6`VxYnsD;Lju&QM4|7&/trvP.^xp:Q71VTs3}Y;usNx1o>`./82#|0%dz5' );
define( 'NONCE_SALT',       '^} 1;q [ BMAer^3kI sSaIk)U9cT$P`C}-+[J}0gRSH*zBZ7HM16qpSiWhBdVRF' );

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
