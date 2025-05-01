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
define( 'DB_NAME', 'Rajnishse' );

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
define( 'AUTH_KEY',         '3)J5d4KWb.IqG@_c*/D261h>@`d/[^=4H3f*G^S[xmt0[_<xmi`)jsZs<tUS.MLL' );
define( 'SECURE_AUTH_KEY',  '7DW!iHnYlK_Is9JhG92AZ0Q 4|?yzDE5 #Yw7^rC,c*nb7[bUt%M@!2CBAyq0bXj' );
define( 'LOGGED_IN_KEY',    '?=k4j8O;*? w#IZWa@ OM;yu/##PiK!OTst>mM_*^!$/1@UEl)qzKns}Wqib3`gw' );
define( 'NONCE_KEY',        'Zxwp3|6~q9r|(_IF,/);#Mw65USbPp3m{1+9;xnIYy1NA)ARr+Edr}XixkQQpuRt' );
define( 'AUTH_SALT',        'V#HI:Z!ImLBjGbgMYb1_]qFUpt~@gzOBO?5Em<YSr@+~V:Z^PCIl)8ACq5<FAXyR' );
define( 'SECURE_AUTH_SALT', '{nTGeH`rv+2dtP^bN>D#Ojav[E0=?vU//HBJgw5c>TzF4=RbM)3lVulu|/=q2t3/' );
define( 'LOGGED_IN_SALT',   'aQQY3JR+!MHqT=kJ`-vx*ia^`hPeQ :F6p`Yfi4 0P.vEOrdxes2*8{xoa>bPKS]' );
define( 'NONCE_SALT',       '`.?.wQEHG;OAgssHf2;R295ZFl9X{da!@TaCbPLBRSMP!Phjx,FNOI;F??5hJ.dg' );

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
