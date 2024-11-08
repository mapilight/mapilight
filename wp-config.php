<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'mapiweb8' );

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
define( 'AUTH_KEY',         '4YQF-%QUgK<$a.`D=K:y$d@Z#L7T{^x]Ryh>R5IxeOEFqu/<q3(`nTOce5ZvgiH#' );
define( 'SECURE_AUTH_KEY',  'Sl`c-62mf=xiNxO$D{&X=1.[p&},V72qr:6y%0-F,%5LG,g-ziiSIQc*1J+MA|a}' );
define( 'LOGGED_IN_KEY',    '|y[dP7WV=kE8F6*TmgUN!QIc5l$FZU#^pO^GA7vtRTeI;wuy@M~HBGK]!=L4Y4JL' );
define( 'NONCE_KEY',        'QhfV)R/H5<Yi_&>T!]*@Qv7X-P+h0H K0xAZ0LsqiT{]o!*-H=CgHcFNr*EintNj' );
define( 'AUTH_SALT',        '?^1.k@PEBWV=JI|<WOIR9fm)9ZO]2*9(0qqE<.`|a:)W6kwq?mbgM0)HU+|q9HVH' );
define( 'SECURE_AUTH_SALT', 'Z4!aR^ZB?y69iW4^b$fHcV mQU=Wvx2dB.7TF0n-cO4,z*u~<$MX$UWJ4kmOn+AX' );
define( 'LOGGED_IN_SALT',   'pw_iePnl,:(2]wd4AvKU}QvHP_QU8OP#|$<Z5$ap8FpcU/q0f^bi WC]?uf9~~9S' );
define( 'NONCE_SALT',       'udut2:JRJIPH-m._%yg1<_@A#)f-]T_;NL{E^ECF$EEJ:8p=TRj{r$}Kul[}Ot Q' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
