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
define( 'DB_NAME', 'slimstone' );

/** MySQL database username */
define( 'DB_USER', 'admin' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Deadend0001+' );

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
define( 'AUTH_KEY',         '?b v>_SceFimZ+!.xZBQ:LPcJty$$&2`IYzs157WhdC_N9}syv,F)H}2kM[P]0|Q' );
define( 'SECURE_AUTH_KEY',  '1Y1X>ct`0jVj;A~Qd^@0Q}s]J)+4W9A(cSrif2*qO+5&&!zq1<JBhe<c#@:*w{5]' );
define( 'LOGGED_IN_KEY',    'I3`gL1-+OfrPZNzm[hZHKuiC5p:0DXnHAv;NBk)pfUwyTDdwA{GAS&,z9:r~T:(C' );
define( 'NONCE_KEY',        'tEC$_r89|4W&jUWc@:djiqPV,^3fwXZ@SXc#/4^w+S&W#T[ 3: 2+)4S}ScO7Eu|' );
define( 'AUTH_SALT',        'mO6Vmw,A<LF]$;/7D~R?(!msbTF&bmFm$wQehiDW hl]pU#hx6?l&;0R+x_^!6xz' );
define( 'SECURE_AUTH_SALT', '@zl+vfj6:0aR><>*s[sf9[b3Sh;yc6gV9 OiykbO-}2|FkyqpqWVvM@_hsT6ckg~' );
define( 'LOGGED_IN_SALT',   '(U$&EzkOrT[7X=}vcu)ZM28H8/I:<ClP %%Oe?%sak>olLRb^nquT;yKMW *9,,^' );
define( 'NONCE_SALT',       '6bWU=zQ0i{_J/&%=wL{H{u+U?u!1!A+P>ozi`%=RxE@*5r8@_GS4+xU_Ay}ojHfl' );

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
