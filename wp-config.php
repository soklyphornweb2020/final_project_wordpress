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
define( 'DB_NAME', 'pagepro' );

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
define( 'AUTH_KEY',         'rzdbl$-UYYcW:io}N:W1Hk]8Q.HB:i=g}*3~zneLj_48T!UQ$9rZcLOsF+[gTT/K' );
define( 'SECURE_AUTH_KEY',  ',Z!!H=teXJ=R`U2b1F.dR?n/wT$[u:/+<G>G:-n&x@F+Y=6Sw@^nB@O>oSqg<ow*' );
define( 'LOGGED_IN_KEY',    '&z[L4{3cs0XKVS[z3DZW}8k}`#/N<1}tt@}1vIXnB2$xx]G@41+H5_3FXG DrMj!' );
define( 'NONCE_KEY',        'ft]!uy?YrlI[LF&5%pi^YNtG.*]+J}/r:+;0* ZI$%</.z;dQ`U3/^JH]&,&6Gpj' );
define( 'AUTH_SALT',        'bg*Na#^e4Pg%!trAr3wjW{RmqbvY]c-8]Ys#t~H|9`%(+-`idGfIdLOB_a*-$>D>' );
define( 'SECURE_AUTH_SALT', '88>;7N<& j+p^nHKiRU`=84zFn&s*UPM3Q~{5r0&%s0?i|j-gjX%)*U5q_6gXw+7' );
define( 'LOGGED_IN_SALT',   'nQ$}jb%d`|10Dya=N5|-4 #!Q{u+oDUE5!MJvbB4&K/rr$iO2VXCEQ:Uu-~P+*=F' );
define( 'NONCE_SALT',       'WZ[IFzG8dn-iK);Y*p817{=~n<}s1R6R<`s$x%H}e<hkOFOH@IP=Z9&&`?WXHY^0' );

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
