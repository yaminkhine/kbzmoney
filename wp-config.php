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
define( 'DB_NAME', 'kmoney' );

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
define( 'AUTH_KEY',         '}Dn#Dsf?}1~33#sc`+ DfCC+~d`asL9Ytx50=wF}s;lO0;|=Qo0A*E(ADa^CYvdy' );
define( 'SECURE_AUTH_KEY',  ';7hN{>.7PYA0bg3Q=`~&AnRdAk,TU)vn=]1H)Btq|?U9.eGmZ@VJ*84t??IZe^c[' );
define( 'LOGGED_IN_KEY',    'ftv<qZB |04UuXfaT?/e[NOL+EOCx:/gYI#2t/14^bEXD@ bWze$`0pW4P(6cbWp' );
define( 'NONCE_KEY',        'jwbxQksMsv~,=zH{_[iU)J$jRqwaGIH:QIsFt9z2D)Sl~k+lM0Hi/1a!@(|~W)#]' );
define( 'AUTH_SALT',        'pM4/}0N+]eNULbN{()&7iJ_3j1!n__ZL&:^AW<=+wv:]1M!vRTmN#n{)!2n6fE0%' );
define( 'SECURE_AUTH_SALT', 'S[).P*7EVKfIe8FN?.6)bF1PQ[!;Qz@2>7+g&5DaTZh0#opVqNJ+,^q5i19&JbtG' );
define( 'LOGGED_IN_SALT',   'G.nSEe(n(r0966u8j&#Z_ut~MSM9lJP[zm)}& ;^qc85.^JR!gK,~%#FNT}m~xIU' );
define( 'NONCE_SALT',       ':2}9fZcbHR4)W{2gnEMLA{$F$HTx`3;/7yFQ9%WZ.bKtd+W=W2fAweQ]?ypuWrY^' );

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
