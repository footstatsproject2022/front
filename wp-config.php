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
define( 'DB_NAME', 'infiizsy_football' );

/** Database username */
define( 'DB_USER', 'infiizsy_mohit' );

/** Database password */
define( 'DB_PASSWORD', 'Apple@1213!' );

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
define( 'AUTH_KEY',         'H!~?7$n u$I!S5]cz|[8k(^&s|g_bBYK@H(t.UD.xbBjPfO.*osiINYKcKSNU=[:' );
define( 'SECURE_AUTH_KEY',  'i0??*Jpo@YLPp`Vo.JtWhP@*73:]NA4fR[Iy{oLE|5SV7w+0ZV!xb)SiLZ|O>{@B' );
define( 'LOGGED_IN_KEY',    'b`d#lVS_Z*dDBr@f3WX?.a1^u^J:ty{(O)lZ%4qYZ4NXV7:$ kGk* (R34IVuh82' );
define( 'NONCE_KEY',        'N6iTmnUJ;E;5M[5D|oztZ(!74af!T$r`8I>xtC@CKa-wU:?%xqu;EH=wyCElFm7Q' );
define( 'AUTH_SALT',        'Tir$R]5TdnnWu$uB,zTkljS7%3Lg|OxOTHF^CYiq}$SM5*G_a;4_I:S&{J;(`r#%' );
define( 'SECURE_AUTH_SALT', 'YRc P1<@QY<Kja3IJSQ]m%!}l$Hx(c.c# TcSog8Lx$,@OD#8Jcj?VQRl)?<$h Y' );
define( 'LOGGED_IN_SALT',   '9RFF-F?i`D|=O1aUSav-ho!EA%;qge.9]*4L|]V</E)s/m:E<KeL0<75~*;#Pc,2' );
define( 'NONCE_SALT',       'L+*$ 8[ZqP<@,+uZS!jV 1X- 0e{b(<M$#K0{>7B7 4)@ehe)*C7Iv+l>lnsk^/b' );

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
