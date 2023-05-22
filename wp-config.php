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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', '211189hari' );

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
define( 'AUTH_KEY',         'D%z>Sqr/i1=1RH2FF?YaHC-TMbf<X].#Zc80oQHuJhWnV2HR!UzUzd*d2Mz;%t22' );
define( 'SECURE_AUTH_KEY',  '<BliMV{%[R,owsOg1ZSA?d_[cW (->?IuQx&iv[J5lek(U@}&7on8`Y,W9oy@_cr' );
define( 'LOGGED_IN_KEY',    'mm|2j_@5!W]V-Q%L(44fdqmQ21}~SMR*,8o57QSYNDSe2_%-L?9?&L{w/y%F ?Ly' );
define( 'NONCE_KEY',        '509Z+^${1e0 IbShvZArdn=prv#t|/lPFi4zjU@aEUSp~0c)wz>5..b3?bivB]a@' );
define( 'AUTH_SALT',        'Pc 2K2M>JE&_`F)4T;7RZ|Yo47mc,2(G>BiNuls.G(F+BRe.v7t[h([ac#rBc)8h' );
define( 'SECURE_AUTH_SALT', 'SeI4J}xCaJmNAbZ:Ru?)eIMxZ}J1CS{83`I$iXuAJ>Lpu+Faiee+/2XAtLojN?Rh' );
define( 'LOGGED_IN_SALT',   '#v}@xM:gV})HHse36`vur7gH>l[c3Q$v%+;-Li!XS^)!:^WR%uNor9}^UPjT+jDP' );
define( 'NONCE_SALT',       'D3r]QW*:Qu|poa9EGYl<T@j04$hC(|AuCI@b$@lB]b|44ImjZiRBdZb~!+eZw:$5' );

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
