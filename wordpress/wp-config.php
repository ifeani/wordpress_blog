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
define( 'DB_NAME', 'wordpressdb' );

/** Database username */
define( 'DB_USER', 'wordpressuser' );

/** Database password */
define( 'DB_PASSWORD', 'stackinc' );

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
define('AUTH_KEY',         'zW}+?^0S}154WmA-pbQ&oRmG=fHL?c{iwjFo<=?f?L+B^W~bEF3[givAGOGFYA-f');
define('SECURE_AUTH_KEY',  '`Sn}V;PScu@]$WBG,t!,o:r,&`#PxG+q@)L(V kV(zd6J^#GvPKx-0Bcg}!mq8|E');
define('LOGGED_IN_KEY',    '-(g|:vdjn!MFmg(/8UX H*yv|m~J#K]{juWdEFakvI) ^D^`P%2K1jMNJp7%|U0A');
define('NONCE_KEY',        '~w)cU-Y~JKk)S1*OmY! :4mjw?<;-py]SpomgFTJ@ofKU<9YpX+WS,A&0W-G)qn_');
define('AUTH_SALT',        '![;&*QQJIB8H}LTvWm84n|%>[YR_pF8j@N|^RKJ^w$x?+;7A7Kax _W[Vy@7)<,(');
define('SECURE_AUTH_SALT', 'NQ&ELW6K9up+K1UoIF*=Loh@xs4Z-I#`ga]/cn,g8:d,UbE|?^|b8F#[aAcwr?0,');
define('LOGGED_IN_SALT',   'pI@P593B$&77#E:Y+oG!nhRbs2K8h,Cg,+]lH`cW#?n|^%4r|^IbY9j9;?>-:i!j');
define('NONCE_SALT',       '1<>yqG3R]qX[/<# ^V?)F9-G?e/vc91;J[!C9v}Sdi4Hd3G8YRI;r+[T>/2i{Aq:');
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
