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
define( 'DB_NAME', 'wordpress_digitcure1' );

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
// define('WP_SITEURL', 'http://' . $_SERVER['HTTP_HOST'].'/wordpress_digitcure1/' );
// define('WP_HOME', 'http://' . $_SERVER['HTTP_HOST'].'/wordpress_digitcure1/' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         ':vpI=cMl^4Zcu_69b!RlI/*Bvx)Cb9_pS1K&h?:j>Y;S7jO&zd?3Zr~C;yZF&~?:' );
define( 'SECURE_AUTH_KEY',  'xfCXTud~iA54tfA)S4@vGVRV}1~MP<|k~&Ok_R&rMRAUv{4+IMS$zWtvl,/%aBvZ' );
define( 'LOGGED_IN_KEY',    'P=}e(B<Nnq4r@9K]@bQuW#l{0{Wd>--=)i3i0F%z_fJz]/+7E(z(F6V-oPwNZil]' );
define( 'NONCE_KEY',        '}t%Hq*1dvT]3I0wH,F0f<~Rb:IN@Nn.WNc3p$+yGf:(Gz+7j9Dwh B(jwjJI;_P0' );
define( 'AUTH_SALT',        'd)k7B^|uRThfG:olo@dfl{1JLB`? 8WWu/,|.q6L@*]Y8mQ=&_)j{0Bqx{-v~q&@' );
define( 'SECURE_AUTH_SALT', 'L;j|1LpQHq:(w3:-jGyoXznf!@S>&$ei*>HUmVEZ6sC;JUv`Bv`FxoQ;J{UoDFfm' );
define( 'LOGGED_IN_SALT',   '&e7+q,~iU*ooc HD>5[]B;T52i1JMopC~sWR(3e0iF8=5oo!e>rb>H-#z.pGnx+d' );
define( 'NONCE_SALT',       'Y$}7P/b<#d>6avT7g75aRc&_n+0?Z9,rpm8uN~bu&6m$*YSjkXRk!a(t;>GiuZwd' );

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
