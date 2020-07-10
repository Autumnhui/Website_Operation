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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'wordpress' );

/** MySQL database password */
define( 'DB_PASSWORD', 'sfwerwiu5566' );

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
define( 'AUTH_KEY',         '5A$;BX<Q>@(a/t<&wdcZJxW,XC/QGRW95jwd)2Cf{*W7[,pz7`0ck!5aQxsD,T1R' );
define( 'SECURE_AUTH_KEY',  'd/5Aaa@Z${yx$D}{.jfJ,Ed>#:-qW&:Woa;-X20[rkgP?}#J1:&4q-ccwjT@^/@&' );
define( 'LOGGED_IN_KEY',    '*esr2=a+QIAAiYy`oQ2-7JVE@$5s<GNzdccxEs]j#AK4bB.t1}:1a@u[t+-h2%ww' );
define( 'NONCE_KEY',        '7D%9^GAI,.dC]i%c9Lyt$Jb(!uet]-@-z_y*8x8_K^:(/H) ;nA~Zk5ME$B6~U%Y' );
define( 'AUTH_SALT',        'NJH?dh=`xL[T| +`@$zEO|vJ(g%oQ/c&ei7e_5^wuU?n!hc@/*~R1gFt%d}`OXgF' );
define( 'SECURE_AUTH_SALT', 'acu+Kk]g~|M&gO.RlH Gi%}(WTiK2ooFMy39%OZ<I1p|!6f2S!Ho<n0uNR9,#*lf' );
define( 'LOGGED_IN_SALT',   '$sX4&Ih=:xnTlL+ri7F_^B(c=yo_LL_&>W>`Im&>IqU|pz2~p]%l}V){y&jv>f*p' );
define( 'NONCE_SALT',       '=8eJF#*<Xam*)%i0>.G)m?DR5^[-rD(8PQof5z`9L(pX?Yv?0eELxa{;EznT6tS}' );

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

$_SERVER['HTTPS']='ON';//设置Wordpress全站开启HTTPS。

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';


define('FORCE_SSL_LOGIN', true);

define('FORCE_SSL_ADMIN', true);