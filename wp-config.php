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
define( 'DB_NAME', 'zhongshan-mall' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         '+kGGy|F<a[kdbi%RW{R)eT9QRWhaH[kPf}`rh4!Xv7T%GR0q4Z/?sALN!2~H~{uX' );
define( 'SECURE_AUTH_KEY',  'rO(*Vrh~,yCp1Y9cI|no9CX^iP[YJ{|@%^Qd2*DCW(!_H,`A@`FAvykf/p$u1X*+' );
define( 'LOGGED_IN_KEY',    'W*wsCL?KCcd_u;:jsf}cm,Wm0H}^M$kkXKB}+yJi)vz{qIYa[-e,Z}E dk2`DDc>' );
define( 'NONCE_KEY',        'n .4aYZVz)dxXfK!si-2Xznyh01l>UqG$epE=,w@dcoY6P0I2E1[V.81#ca&]U,w' );
define( 'AUTH_SALT',        '$ku>x~w;mxhGrB)yNy)P*E1;{o`Ii2w$$@@FolahM^P#boFQ,,BUg&A#EyNpEi68' );
define( 'SECURE_AUTH_SALT', 'cLstW*r1.a0/&Arq^Yt{Y$hsKd,/;~.0iJ(^%x(  )[Y3j+0{]V;YVPsUMe]9V{G' );
define( 'LOGGED_IN_SALT',   'T|;CUP+7>M5vu5:G_)`O}l?Al6&.9K]LO+On~J3*et8>Pq[spVxwR;OS|@TFVL4Y' );
define( 'NONCE_SALT',       'JC&FsX7&x8/g}mBFctLh0d#TZ8mDhZyZ_EAw=wJq^[!&`[w7l(yY>-CE&GWg+b.w' );

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
