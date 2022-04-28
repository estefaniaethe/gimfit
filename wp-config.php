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
define( 'DB_NAME', 'gymDB' );

/** Database username */
define( 'DB_USER', 'admin' );

/** Database password */
define( 'DB_PASSWORD', 'admin' );

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
define( 'AUTH_KEY',         '7%_Zf!!sp`>RKC3P3%{U6yJwx2FS<^JOacA7hUbk*clk[opov j{iS)bNs;?,pro' );
define( 'SECURE_AUTH_KEY',  'ydU,gU;<waY>br,8u??^`;1B-oCdtZiJ^g=CqHDW6:aLj,G/_oo,?OvZAF!Vpw}]' );
define( 'LOGGED_IN_KEY',    '8+QO-a+4N|Ib3&N&#6rW~2,eQLJIB=ChP+Kl70_a-h?;04lo,7|f(3l@:R >e@cP' );
define( 'NONCE_KEY',        'sjtK`wA 1e-(c?G%W#(K#n8Jf+[_)Ln>C<UN-}~@b-J{fkfWFU-lXWpRM2?RzkX@' );
define( 'AUTH_SALT',        'H}~[eHd0R?;{6]DQh6$ub}fQ  }+x(%Su<;`ujOdR5sz6?,k-9?ALja/NGR()CY[' );
define( 'SECURE_AUTH_SALT', '0zk:%aN?{,bwyAKYYi6tHOS^<pRKy@O<QlHZPVfw^G.`4~g6=_}]KbT9E>znpE,`' );
define( 'LOGGED_IN_SALT',   '~[nQ6ugkkuWX2 qJnDx6k>X%N,u{_v<1(D#wf@CvYk,j`jSE>.@>Q2boLDj$ebgf' );
define( 'NONCE_SALT',       '.=Htl@i=i6j#J;=Aa$Lg;>0rM=!<*|Bm?-_Zr75/e|tF=l*{pJ|S)CI;&gTG;_c>' );

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
