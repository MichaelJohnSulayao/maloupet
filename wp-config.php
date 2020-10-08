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
define( 'DB_NAME', 'maloupet_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         '|g1_;hOAg>+Y&Uk!:e$x)u%]4xr|Er<>~[LtYJXjtfEw*:vy|<Y?v_6+I4R3N*Lf' );
define( 'SECURE_AUTH_KEY',  '6:iE1,p$BJMYpX?o`qxLJ879%>cnrd}S}Zm+sm7z[oweSw!ZM.zv3+RAuCrW^r6?' );
define( 'LOGGED_IN_KEY',    '5,BLmZ}].f1+2_=Kpp(~t+B!]_~Dq6&?Bx,% e%^=w0~7fH)}=SMSe$(@BhQL^QQ' );
define( 'NONCE_KEY',        'tG~!no+8 8@;YAqkAbMgFia*fW0w+D$B@_w<ig%BT_d;1lR|sB$nx&Hd%>doEj+_' );
define( 'AUTH_SALT',        'S6YV;V78@.uq8BCpC2.C`}{-v[9Bl=pc8K`X>nU6QIo6{]fC=gL15q_tl(WcS8ZJ' );
define( 'SECURE_AUTH_SALT', '9`;~S*(@1wx&xmC^92$E1?POvqjiwxBLb!7~jM;S$)ep!daN0qU7Z`XznGL[ymve' );
define( 'LOGGED_IN_SALT',   '96$Wv,&=}^G:Y7+N>qg|n)PBmWh,Rbc;.^HXha^#U];f.FNXA2:vE!Dr6w6FVvNq' );
define( 'NONCE_SALT',       'nB]8Tz$biZOOA0M{>NSsal<}OiH[;*+N#S4RZA+p#(5BzpQ[ -IrG,qp;qS.C{^<' );

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
