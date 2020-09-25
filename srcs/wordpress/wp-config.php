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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'bminner' );

/** MySQL database password */
define( 'DB_PASSWORD', 'bminner' );

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
define( 'AUTH_KEY',         'c~4eQpOma[v+<7wkIPc>7wp8LB_=0X!h5fpwh ,,V`_v:IJs.aOP)fR^[fi0QiJQ' );
define( 'SECURE_AUTH_KEY',  'piQ{i]>x faX$|JD0-#jc_P}?B:gg>x>k;{Fx:FjfY<g`! &KeX0}9fDfGc15R3=' );
define( 'LOGGED_IN_KEY',    'T0PN5w!eer?.`3Z2XAm#OjFu?ao/rO~=ns.5hVMv`FYg?F^,uoY4 WU#]rGXT(w6' );
define( 'NONCE_KEY',        'EuJahGH(T*q|/?*]Mn!k-/Z5r?Rzw{0>k-X2W1-{#ho3`+O07$|bEhIx}&@62H$+' );
define( 'AUTH_SALT',        'Hmm1|OThG`IXwAuJy/~/k ;QyNu0XC[X[Wt.eg@@q#dMDdOo~/$L)hW*2){xgLw ' );
define( 'SECURE_AUTH_SALT', '1fn+G}J?-upCl#,)v4Cf /lMa]BId^9@M(1US=~*Ak4JVM{ t4!pc#f?dAx8GL%J' );
define( 'LOGGED_IN_SALT',   '06.fP!8 aM u,vE7S_y@X]X#ULF@93J}Azx3[LPXyA+cFQA.]Zf;tu2xiJ$kcM}b' );
define( 'NONCE_SALT',       'qS#aY3OBlorY12:*:d;GUk/z0xFjPaDf===pQ%J3^&^9Ui++cucu: $RoFN<wF)*' );

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
