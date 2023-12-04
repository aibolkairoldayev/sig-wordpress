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
define( 'DB_NAME', 'sig2' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1' );

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
define( 'AUTH_KEY',         'zh-mi(fIUv|{Hk803rPB(?Q96f/3Y+{rxUR5|U2Yxj0`BG~s9V2?(BzDw)ELX*Gb' );
define( 'SECURE_AUTH_KEY',  'aUg5zRFPom=.&{^0Pin;uNWfiIh6[O=V?f~b2|Q!6hFO1,Svt.dT.M?S*vjMg)z!' );
define( 'LOGGED_IN_KEY',    '%w!X7W0q;9&NlvOk@4,uu0-i.CtR K0Vtdesy_7})u&WpvhXp[;8V/znsj$_nb%-' );
define( 'NONCE_KEY',        'S/+.XI^dd~73cQ+H.T,WX0%:XWM.Ds_cG6O$wnZ`C{R76S&/SADJJ!1Frr4oV/QD' );
define( 'AUTH_SALT',        '[|w/)5,x$+RK@O9D`kKx[r;L;fF{OUpF<|2-d+VFLB^>[Ssr :2cu( 1_ANhCsrK' );
define( 'SECURE_AUTH_SALT', 'P6md9u_r`Ixjw8y9RQ9YDzc:wn6bIbZ^I/BKH!~Ejvh:N<0s%cx<ly8Q4Yxxatfj' );
define( 'LOGGED_IN_SALT',   'c6Usb4|>b|^ji} ?NTeYV4yt_iGpi>2S2@=7~:|b6VHasZ{0S=2Y$[`cN]=ym_8U' );
define( 'NONCE_SALT',       'p=a}R,hCw7YKqv#$=l?ryL!vF IGDfJK#zQ,FI(i6rkJ.Zzgq^0]WCd0!3|&TN*}' );

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
