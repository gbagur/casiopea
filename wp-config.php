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
define( 'DB_NAME', 'Casiopea' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'LUj?nElB.N_t^x*j6Dk=:_vq#4w]d%lL<t<23TV~{b1R691^^toMFxh3tTM|nbAv' );
define( 'SECURE_AUTH_KEY',  '^]B5%Uu|xC}``Tev2tt3|l#KG%T})Wa8,H=d0}r|td%}ElRaux`2!V$cTFr51|h3' );
define( 'LOGGED_IN_KEY',    'g=4YWDdHIh9lL z]X;L2N~hG^t 3a`cpFzqhT0{ [$P[F+$Tj!1-qcgb+;W@Qgk/' );
define( 'NONCE_KEY',        'j]t3]q~kyfBnRDHt1+EO(V:*~:GqP<ig_7O4|N+oV)YB,iB%+u,9h]#{a:lTJhZ6' );
define( 'AUTH_SALT',        ' KJowue#h5%@9$>z:6xJ`67|q|~n<[^*<XLD|f6p-,h5X}_RI;>b<jX?lz Z@VAD' );
define( 'SECURE_AUTH_SALT', '8)5aN!,64G@)qx@:X5?pm7mHO?&wH2,1w<NRd~;xXch5;DNY4Ap+WYKn`w>T2rA!' );
define( 'LOGGED_IN_SALT',   '}qOz[peCuo(VO&@U^I06.-W~^.`h<sB]1q<~eDYOKs<%|r0kkXt(<2o@M#xF.<}m' );
define( 'NONCE_SALT',       '={jJZ`5ZT:7/N&g17mW?3c8jrT=*`0a@$J/j!ip~QrNJw1_[WmK.mxdV7J(b ohi' );

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
