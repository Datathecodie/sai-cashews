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
define( 'DB_NAME', 'wordpress_Digitcure1' );

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
define( 'AUTH_KEY',         'k4yg/ic!8eLAXV?g$|r-?X1?zu%Fw$W[qC6>7r+_6lt%7F+{=,jJa6g{l:y~l-tx' );
define( 'SECURE_AUTH_KEY',  'Nz3@HJJ@z:e~GX4T%DX:NZ Wd2G[5qY*iZu`0QRp!tZ<9iJ.Qg.Mvmamz%)sH>K}' );
define( 'LOGGED_IN_KEY',    '^Z!~dcT.IaIdm;2/v=^oLPKsF`(vwS)=hj(L7bPS%Wrh-#Nc*1~#=jX@X5R$e^X?' );
define( 'NONCE_KEY',        '4umqWiR:vtfO5uGEUp7OVaQ5H<Vd(P%N$DNI.6~A7[^YDW@Lc,%P>e!=V=9*Ko)/' );
define( 'AUTH_SALT',        'x2m}5WiU-K2gVxg__tt(/&8)<WBWI<-3ffZ$N3aX|||/(,+KfHa!mWmh^UU=Bikf' );
define( 'SECURE_AUTH_SALT', 'GyJ7Mn[)4j`;7<[x`IQ-ZcWJC?gT_JPLafdAE_JVHrItx!RYedY)e^83_z>H>K,:' );
define( 'LOGGED_IN_SALT',   'js/1r)DBvu_Ef:F)#=]#=EXz=yF8Xv{E:AnG:zW=.ZP1-`$t8WhOe@AsRNVwJZi&' );
define( 'NONCE_SALT',       'vvd;Uc>zY;ffjRVVLIZaISGVEa]VtUu3>fi]<^J6/)n&.I+Bqvzh #Nc*M&odIPI' );

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
