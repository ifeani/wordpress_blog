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
define( 'DB_HOST', 'wordpressinstance.czbodzmwgczf.us-east-1.rds.amazonaws.com' );

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
define('AUTH_KEY',         ',oic+;u EgUsV-Mh^keA<!S~gKO+*S_1yK]ix3~Z!Wkz0UX2OG+yq_v62Kl<vY<K');
define('SECURE_AUTH_KEY',  'N?=RSi{}`l|>m[|^bFj38,U=o;OXqzy*0?gm7sYD+;l-tRnr1{b5Z%wy7H<IvN{v');
define('LOGGED_IN_KEY',    '@&7]*59f=H`0I/N 9w%`-Aqz}5||>LJV]:_PRC]G>UkZhnS<S:x1K8TpoOy/qTds');
define('NONCE_KEY',        '>Rf,vyr`h4|_cN|]-)MO+r2X&b_&qp/6 yrRGmwmInmN1?V#3KLEC:24|,mz,EJZ');
define('AUTH_SALT',        '~Kt+pc{pVgt6GN*y0oVl}MD)u`%T3Y-P{sp#99/(<D+)x;%[|mu)D[zxljaLny~+');
define('SECURE_AUTH_SALT', 'rh_8IAW}/5+}uS=6uvZ|@dAA<T6FW&)-jb(MiV#8<Vj1;Sv0tm<WW@[#>*E#A-Pd');
define('LOGGED_IN_SALT',   '<<D>ALO&T8*lIoa{[d^6!xMpWhcQLn{_5_.:+wo~o7O.-Fht5u*HAg:n]1+:573.');
define('NONCE_SALT',       'G>MMj V5gj^{>y+k6r9]#OF~j+=;[z#j XfTW]>z#H(wrln#l|=Vx>j<st#c:Dr;');
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
