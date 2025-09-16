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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          'C<56M=)p+>g|MxfCLF:?rW]Q`@,!I;)g]x:jY+ ^ak$N)REhh2RW:&wA89jFyk.U' );
define( 'SECURE_AUTH_KEY',   '!~<TfWw/x3,P%{DYqU!N66p*U{8GhOcsY2$CwaclBnblgpB0O P,!f=#b]<sF ^A' );
define( 'LOGGED_IN_KEY',     'O-/N<gEcS{Q+htZGIeOn,Zu^/%#Flnq@c}?71&QuaU;&CicQ|;tbT h|SjZ7/Njw' );
define( 'NONCE_KEY',         '+1nGILN*&ty+z(c/|ue>?^])[>6)qZ1KPw{~P:OqmOr8likTS,;{9j<,Noj|t&/>' );
define( 'AUTH_SALT',         ' TDf[IIZ$;`|jPMFjeD(:~&Wd,TJ8|RU.0$hbMALZ4AB]_B7mn],HC(69%M}AC-G' );
define( 'SECURE_AUTH_SALT',  '`E;o4}H<NjG#(-fHYy|ZmRO(-.RVn&oE#`ej/TE.4n*L_z(x!aPOYhK+$y?kM^Sx' );
define( 'LOGGED_IN_SALT',    'WArB=(<kG 6bqr}$1A]q(+mq*L|o<bLVaEMFPWhS0,i e4zzv`Hm[cJ(%<s<Nw~w' );
define( 'NONCE_SALT',        '`Xc/3c@E(7p`5O$#w<8iYt)ric](lv8U*@;A4%QR]Q{bjH]m{njON% =v[_B|!I<' );
define( 'WP_CACHE_KEY_SALT', 'qm RF~o%<JnW?lce^AOwiCX-R5@_AwcA<?|w9%uGb$<pPQZ~}VY6#Lw=W#.kh|#A' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
