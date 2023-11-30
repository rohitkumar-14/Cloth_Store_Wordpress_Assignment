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
define( 'DB_NAME', 'clothstore' );

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
define( 'AUTH_KEY',         '=*PUo6rma3: ]C?!>zT5_jgF<RD7ktHYj:hXZJl%AJ6ixW}PLU<Z&d&GB{A[tEHi' );
define( 'SECURE_AUTH_KEY',  'TZ7,m5Zu4v`x4.u?[5t82qbA9d]mo4- L8PAo%S8P5NP*O6,46]#-eSM:dWZjr A' );
define( 'LOGGED_IN_KEY',    'P-ef;C=J;fIqi,xY4([WMKx7imd>E4s[~UW1H&Ja6ic5->Zm[*(^4&::F7c8mjg?' );
define( 'NONCE_KEY',        '<OV~$Z-H82~<,C<ihAh]`~hv:uR4Gm 0P?jae6k7idMftD7?]7X[qZ/CWY}_R!Se' );
define( 'AUTH_SALT',        '5KLV5O5JKx5%;k8o;RwfPm&Qe^<&BXG|ya;&hWMWB&mt,HL>-Fj)w_r)5&b  Y@C' );
define( 'SECURE_AUTH_SALT', '@%D/q@i/f-bu.:.P2Dd/xS>_QO1-&^_&}l>.9Nngt,}cO%ZDm{BL3n#9hG8:Jquh' );
define( 'LOGGED_IN_SALT',   'e33oEEQzbCM] X|/%J{*=Vo0wgGl_SE!r9Ud*e[T~Ivzc^besIH*mRju#kVvvLu>' );
define( 'NONCE_SALT',       'Gz|/!@]-[Iy~1$%%,Eh(AB}:yYt?ss=IS9_FnA^,.<?}[aByRPO.jhxKrP3mtoJ=' );

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
