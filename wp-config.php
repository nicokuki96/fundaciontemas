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
define( 'AUTH_KEY',         ')YRqge19(~J-jJRpfaXmXP<qX}J-U67Y7)/.(~xseWvT]g*UsxFsaF*0T1l>Z; U' );
define( 'SECURE_AUTH_KEY',  '*[{ubE{b*.LMKqw*l_f3 e9Wjahl3;Y2VbXDAEr#j%$z30+hCG}PgyC[jV_2L,!1' );
define( 'LOGGED_IN_KEY',    '33~zjBC-YZE#z@xXsF-a_p@6GK&_?6.O~kZu{H*{5%<]1,oQ!smr~;Zb5i%TbYwS' );
define( 'NONCE_KEY',        'W~+tkv*JjIUThQDNEY K=KZriIk.utnYO6{@j]RB9=8Zb+KV|P_Y4v~%apK:}BgL' );
define( 'AUTH_SALT',        '8LQuheXrUvSeBDtN%BSsl_Uc~:#FI4a4hw2<GdeH^X!V`5!}hnZ(6L/eY=#MD4#a' );
define( 'SECURE_AUTH_SALT', 'DyMx8J,5@]P#mKOt$yHhb8*%ZV6BAr{PA<=pnS++IL]`b_A9ka<8vGG#Ug?UG<-v' );
define( 'LOGGED_IN_SALT',   '5}[vBME9U!:5PIx$2R9Wv&/f PUj13t]$H2PAFs9wXbg7_?s!PrY4(&`,&3t<+bs' );
define( 'NONCE_SALT',       'PGt?~C2xMH-ps$P0w<_AyoMv )wgZ]s2Y}D[KPV$hEK8|M t5]@Z|ab74WfT=e=K' );

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
