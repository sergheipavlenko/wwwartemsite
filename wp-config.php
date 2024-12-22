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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'artem_boxing' );

/** Database username */
define( 'DB_USER', 'artem_boxing' );

/** Database password */
define( 'DB_PASSWORD', 'S1SLnWlxbdE5RU3p' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          'k)YfUv>Eo*q+as4e`@@%AJG*23S:w-.9`D)n)%LsJqQ%,q[f,G=+/./+`ln4.oj!' );
define( 'SECURE_AUTH_KEY',   '|m`D1!Ig1 3x=SQ-!Zmv7O4 Z]2q14ktg:} kafm09]cTlB+/da+0bl>14|!GFN$' );
define( 'LOGGED_IN_KEY',     '0&p{>}Hdi1v**PN eQ+$^P J_(1n$#d=[jX{`x6?1!q{~*L8HX : 6tr*z6Frs/J' );
define( 'NONCE_KEY',         'u4O=&=HzZV5X(IPk:x-kyJhk=`pP~W3 Sy=19*gR@MW4N.ZUYh@vAvk(rQ*6pFn<' );
define( 'AUTH_SALT',         'J@X[+.0tm@g/0ehVo:N fHs|=s<PmaSc$+fgpR6roHWh&u,FK}g~l0-;:Ym^aZ,u' );
define( 'SECURE_AUTH_SALT',  'Et$j%II$vTH-tdhUB(aV*.$kz8s_LZBoH!ZNp*86D<Tr_]-)GQ5FZsG4Q 3;hCh[' );
define( 'LOGGED_IN_SALT',    'Kuj*eRQxa&,$%N-r99WlFe$Np&pEL~ltayVrApp8FxW Nmk_-&xsgICJ$t&Z=g=~' );
define( 'NONCE_SALT',        'q|$|,cl-x@IYUJ2f(Zvvxm<Rzq0ZPrN@NFI[`<tih6gkZ%v!+u4n_%6.>/r^lB8-' );
define( 'WP_CACHE_KEY_SALT', 'h=`E,3(Hw(MD=PUH%tb+!Tn_:9t6dp$;gQ.p]MDTrTi5sU>0Y=,`zh{8*j-C`Bw}' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
