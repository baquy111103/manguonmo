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
define( 'DB_NAME', 'manguonmo' );

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
define( 'AUTH_KEY',         'z]B[nF}-fy7+HY`l;Z]#.;XN{4R:%B7F!h6xi]iOKy50H2g7>![cUI h4SP2v*h2' );
define( 'SECURE_AUTH_KEY',  'C?n.bbX2c-tM%*S5PJ[L@6I7NPthQW9c9.Q%JV1AP1oRDF(@8$O:A+w=/YX,@$Ux' );
define( 'LOGGED_IN_KEY',    'nsppk>0rq7rwQ;[*e&n>M7iIzp,TdFsiA~j`y]EwxTi-fqWCl5Y!!75k2bm+}ILl' );
define( 'NONCE_KEY',        'NXs+i&paEulQ0(x%SZ&DT=UUb4khLM%M.Mley3R/B4CT(T.36D$4vMO(8tG1)WG ' );
define( 'AUTH_SALT',        'T?3d`r{dVTrlV=!aHVZZk_}KB7}n<f8}{aveU`VJX|=3m/iwjej7f^%M7XnQ>b!G' );
define( 'SECURE_AUTH_SALT', 'rR 8Ivx]r/vV]fgZxnoQ[o,wVwqbo6~ev$VR@|iu@y<AI1F,?hQ86!Plles{<+,K' );
define( 'LOGGED_IN_SALT',   't{q_mIn{@xD&A>7LRMiyuBE9LHW+*G5VsnQW,X}BBUEb/X^4re:oXZr2Je!q/0SF' );
define( 'NONCE_SALT',       'ft#h]-c6+7[{hz>u?[Fo%mr*)]^D4YkUlI0g~Tg0dNXnWbJ-cdH]t@Y)OxTPMmeO' );

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
