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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         '`8MM(O4_e0%)0>5q{:dhLR<$4)>s.-X16cxESbT-Dx$|JB`dOFRI66&]a5O{TC2H' );
define( 'SECURE_AUTH_KEY',  '@{!7&!3]nH(z.m<r2[2SN=Am]|w`6=YW ND7/Lyr;O$N8`GD|F#.SU=AW}6T<^}h' );
define( 'LOGGED_IN_KEY',    'uc@9G AHCrr]k22Y9W*2xS/@u2 ]1<k~lIA(RZw}K]vGK75nw}x_R4467o^*E#Q:' );
define( 'NONCE_KEY',        '9r.FVw`_W*Q54h_`p)uqi6~HpuC.^049pii;3Hz;JGE$.:|3:WPbKYlIBGzv8OgQ' );
define( 'AUTH_SALT',        ' u*fx|Q%(IP]:bME*oz9Bf**^>hJ1x:.5l`/4X[@)TJ rXb*zf1}o#EEKOEbSwgx' );
define( 'SECURE_AUTH_SALT', ' ZPo0>-OqjXL{VC]W+_vSQ,XS^_M_ZeZdI<5788qi`RvPO5G6I)(Fp-y`_6@GCa8' );
define( 'LOGGED_IN_SALT',   'v/IO+*-6o,+GD`_f5*<TCS*)h8iQe4rg`(alIceHO.tJzqv9i*a&wDY4,t?>]Md8' );
define( 'NONCE_SALT',       'Jx<H>P|)6HqAGRep+u6vy$V`_vQu2cAyP2/[:hG:h~_+|2N=SgxGeO@f)MSzO`yK' );

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
