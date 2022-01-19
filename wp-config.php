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
define( 'DB_NAME', 'afmediatech' );

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
define( 'AUTH_KEY',         '7YCw}$%4SHa)d|02So,E9jqC@Evk+}D]?^=hFN}o{T~GY}<0C!x^^!,A!S#~V`kX' );
define( 'SECURE_AUTH_KEY',  'U*32ZR8C!<]B(%r_ (s]%n/rWoOq:pqXs#X3npuN!43WQwIhiW{Busgdy*~5>.D~' );
define( 'LOGGED_IN_KEY',    'T*y]~5iGWaZ+vZ/nrbPI{d_Oe7(@N+CulIk30*(mY (xmx[*!*0Yq4$W*a+;&R`z' );
define( 'NONCE_KEY',        '3S=C9Ym^a-z&sMGOWnf4gv#HdLH|UtYE|&Avu_Jz6SBQd^lSLfC%jR| 3f0LNCEY' );
define( 'AUTH_SALT',        'A$7QsqIyOojw(?5@!9L)k2:BgFqp&}x,lbelv5JwwxK%/-b$GhE_q}mcwk:V*GiF' );
define( 'SECURE_AUTH_SALT', 'aJj1TfXDHLEa)8/uU+[TY3`FLKE>q>D<_iKUh8SXG}q{JZmWaF>h_oX2r2M6YS8k' );
define( 'LOGGED_IN_SALT',   'TV#`5LH3>STn5o&-9<MsL9E!FeC*P.i7zuiRbv|=a;z*Ar~U1Lk%Z;Ucl`g|um]~' );
define( 'NONCE_SALT',       '>IBL86l`rk>hm`oPG6jz@{].K/a8QHjJqhwQrQU-#qwgRDM~N 15ln;%%KsSuh`|' );

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
