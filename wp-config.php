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
define( 'DB_NAME', 'miecolo' );

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
define( 'AUTH_KEY',         'Dx*mn77LTqXjC2+<Mdf%?|vYY,Ji;;E=^NoM4Fy{yJ@DJ}Ds<Qr` EyJk-)e8u]-' );
define( 'SECURE_AUTH_KEY',  '3*ZwK>>1bMmd2i4DZr)J,71KXW2iWRpr&@m/~QBvh~qh]kI!GWc0XTi(<1Zr]<Ge' );
define( 'LOGGED_IN_KEY',    'qpCvJ*2oUYAGGDxe04S0/9$tu_XX6Jzd+e{J,G=U{(lW>YspUR:Y_y/f^,25xg V' );
define( 'NONCE_KEY',        'O|c&ui:9DH&7yk%ZPr%s~%T:oV$@g@,ONXtO*U]g` mpZu2{6rGKgPVZ@3^TwgFp' );
define( 'AUTH_SALT',        ']Gg!CYsH ,[(8`p^1X)~d=3bq~5{B3[%)DAAzFjISP`z:X$bIlY.O}voLvZ%F #G' );
define( 'SECURE_AUTH_SALT', 'dcUyhorS+= J<7Whlg<ubE!W?7,>^B*Q{Vq]t@s~>q~C)n01$o7/owQqY&~ZllEQ' );
define( 'LOGGED_IN_SALT',   '`a`_P mm0P!!|CEo^$7!L^8X3x^uZVHsO}WM2z[eFOA<*!FL% X(=Q[8FH8G&&`x' );
define( 'NONCE_SALT',       '>9<6[JI7#:8l[~aFn OODc&n)r%u|o9Z(g_bjsW@ht$n[.!8zLxL.hU<_@RIqG/W' );

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
