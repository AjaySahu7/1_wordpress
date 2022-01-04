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

define( 'DB_NAME', 'database_name_here' );

/** MySQL database username */
define( 'DB_USER', 'username_here' );

/** MySQL database password */
define( 'DB_PASSWORD', 'password_here' );

/** MySQL hostname */
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

define('AUTH_KEY',         'hO!/nOR+|6:F3QwRoXth6|OY[eR)M-&^vzk-(|:a#RLtc895{uk3qni(4]Yc`gs/');
define('SECURE_AUTH_KEY',  'O|U`4-UB3;!{7%+&a269b+pCd.yl+pqf4Nf]ubq$pM0zm7Eo*Y^(CG#6/,d F[{S');
define('LOGGED_IN_KEY',    '@oBgXjO#4M|@pHw4DR5(3&R{{@|fWqTbfeZ(Kb|R;/U!eT}ssoT`.5pQSPrd/@h8');
define('NONCE_KEY',        'nrIi/D{YuXY_e~I[fy-|rfNS=w*v|C6YypOX?;x+*XKx=isy6Q$7m.64PUgzkL2:');
define('AUTH_SALT',        '>Z#<.1OF+$d@Xi|{6B0uRk4&GA_bUmvBt88mT+A|q|:09xQ8xSW}.^LAzFEb]6H(');
define('SECURE_AUTH_SALT', '=<L=MiC)>P}ip%J--?`{ooz5nO&EnB`VPIUrR@@eR5g)F8a::~!>5}*oi@WMATXd');
define('LOGGED_IN_SALT',   'Stw.VKn.OP CC>ZsuZUuef0|=OfMBUYQ/19;=q]hZ6XBau0`{EP[1I<k|t?QK2 p');
define('NONCE_SALT',       'T4/NVv#1N|zrEsd|-3gf;sar[%U-^CDO+K~KE9)Z+TDI?p(:&PW9fM+CZ>8JrC%i');
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
