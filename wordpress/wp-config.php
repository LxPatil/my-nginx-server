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
define( 'DB_NAME', 'Wordpressdb' );

/** Database username */
define( 'DB_USER', 'wordpressuser' );

/** Database password */
define( 'DB_PASSWORD', 'password' );

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
define( 'AUTH_KEY',         'q0cz=t;f3=>V*% _c@c/KpdUR[{.^h@<cACXQ)YK?HNj]p|Iod[PX#k0MtJ~Bmwq' );
define( 'SECURE_AUTH_KEY',  '&dsC?<7M`-v76QM77;K0$kSm_R#V>.^U+Iq2S)/?Cmvh,t,=`J,kz1w]L:x-P+%t' );
define( 'LOGGED_IN_KEY',    '0{){93Cwde{evpC{<+51{(<^A;#Zp(/~B(09H5cVZ|((|pB[{r`v|0I`KGoz&Cc(' );
define( 'NONCE_KEY',        'y^pJ ~{2~DUKpECT-A,qnG>(H%6tfZ8fFO&ZYX)]#ebJ$+W[WfV=T YRwi68B(L>' );
define( 'AUTH_SALT',        'n96y9C{R%OMIhFb_MY>du`;v!*sY5-4IC_j6Ui~[>PTTxKUGo}E]t3gaM0_&fwST' );
define( 'SECURE_AUTH_SALT', 'r0h9h3DZ4FS+dvpS-m=>1_OU.Jk>jAt6NLqxmG,{gVMnYo)p,pfh6.lpU7@!VCwi' );
define( 'LOGGED_IN_SALT',   'GGjL.dSbuB|J0/we{!U$:<T~#*I7sxKV#|L|Oh2O2zm^uU7!aK~C&[>bbqO:8 [m' );
define( 'NONCE_SALT',       'Dv6kJSVtm*{4Uf~Sz}|<Z2p!pr>J-#Iy;IMY.sxcA-ST0+1N>f_A+@QQ5k)TPik0' );

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

