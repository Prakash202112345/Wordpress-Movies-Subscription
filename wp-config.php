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
define( 'DB_NAME', 'movie-site' );

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
define( 'AUTH_KEY',         'U6Y$KXY]-)23PU>C`3yh*W-Z]O.&{y7$zJ3OvPbm6^hfrFj$~NpTT^$H;lnQYBDE' );
define( 'SECURE_AUTH_KEY',  'k,@sZQ*hx1../s&]Q~l-G-<=+czI }4t~(Mg$:)8.Zy#Mu&TwqZ4ydJN16)<-g@h' );
define( 'LOGGED_IN_KEY',    'N!,?g~6?xbV218IMJA^%X U6Maj%uc5,_0jwR+Ws]-pGS+,bUqh2,>F*-C]M6*Yt' );
define( 'NONCE_KEY',        'I5@@MrS1luti7$F.3>c8UTKwW3dT|p7i#I6IIuY6oLgHT,HR)d9x}Td~zDCIm;7 ' );
define( 'AUTH_SALT',        '<Atn QuL2Q&Lrx$*T@8h$HT2|xXcBUxl!Wx5#2@v27cy0g7lK!prBU$l1z[[,(K#' );
define( 'SECURE_AUTH_SALT', '=Quj7B?l8D!qA/GdO*>|AG&~:%4 8heB84$/io|iOvV4?qY3RADlv0BJ|O0Eld6v' );
define( 'LOGGED_IN_SALT',   '&UEL1ay/ox#<N,>*u@lN5T,8S:b(.sQ/lq~np{BW^6dT55kxzfE#N{]F8szX?m;d' );
define( 'NONCE_SALT',       'mj}K2z(gg3F<YKi.9l]i8x4#usBh!3L5DQ&*oXz<4/CFs]@/OP,f0w`e|5AZer3+' );

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
