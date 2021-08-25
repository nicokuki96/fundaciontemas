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
define( 'DB_NAME', 'fundacion-temas' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost:3307' );

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
define( 'AUTH_KEY',         '[dPw]a|6Ldi5{0_1g{wN~Z yof{2mbBae.(bGfWYjv@nU<BGb+R<`S427w63iQc7' );
define( 'SECURE_AUTH_KEY',  'l(<,*T_wDQsd?7><L}DIC/YjTi{GJX_xi%zPtq`R(@3axDuYn=pk#WB[I+3EZ`&3' );
define( 'LOGGED_IN_KEY',    'nM{j:wtTdUvcSeSn~bf.ui&:gnmGVq4[M<:;l?N&%x1X$2nHBeoC*Qlajtkw<Y_g' );
define( 'NONCE_KEY',        '(RpSvn]=&Wz=h1WGzEp4#aIEVlSw1D*:p~aa)d9kiA*yqz~5|F;Ybz%6?Ad.hU|V' );
define( 'AUTH_SALT',        '5,UDwMf^Fl]`c+V/tuO`v`dCf0N{!lw29WVfF5s`SGGZI4PtE9JEOtBz*Q#R.]wi' );
define( 'SECURE_AUTH_SALT', 'h]YP{1H<oStIH4_a)trloA3,C.ca+p!YWr>`$9Fmlpuw/-J6MWv[U-77X#c~+T:X' );
define( 'LOGGED_IN_SALT',   '5/)u_E9z05:197XUi0>4[%?8FhW&6<WXn%^P!W}UU,M} _m#c,FC,HFFj/:5yfpV' );
define( 'NONCE_SALT',       'msO5N(~X_y&#pggVO-Nz~zM,cq2s]]t%w&0e:7?;._t?ZapcU8rOVR$=:B1EtcY;' );

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
