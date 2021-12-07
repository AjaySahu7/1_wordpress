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

define('AUTH_KEY',         'rnD5K/`nhs6S0q)OW?qoaP]e~hb2a.RHcxXYxn,F!aE<rBq4+UDH|;,l=6|5i3c>');
define('SECURE_AUTH_KEY',  'iO-&-OPKcIqT_oa[;HDk]Sc+1(1O`{JBc`Ate0{2kUA^Ld%U-/V.N1sM^9%%C<B<');
define('LOGGED_IN_KEY',    '8GC=na.o{y2OdluO[OE;lz[}fn4G{6.1gn5I2=!ry)K67Z!&w_(d6ZlThN~pVj_`');
define('NONCE_KEY',        '#L_NB@zv6I;koyxe6A7m<O;w|psPJ/>sW ))|?(g!:7IjIRjR7~--^[hQ9AhXYCE');
define('AUTH_SALT',        '6Wx$=3H>)QDZgfDHr1:9w$yMb7/An=0f+IoA9PN7Q&9bu=sd7PT6vEG-PA:AUM@a');
define('SECURE_AUTH_SALT', 'pmx-A9qmL%p#P Oj:c;kq?4 XVgkOa;~rTbO]].)cwRWxPki]%%GAp1 Gmv-|0o,');
define('LOGGED_IN_SALT',   '6h+&W~EY1Xd3QfD(HjS%(US:e7EwS3C6kFL)!/Tb/RaF,sygW@(fJ%lD$_CG^Rso');
define('NONCE_SALT',       'Gg&cf .<)(FK] nrX/$YY@@=OgtQ QW3!mXw-SzGu-B@u|skc8 ~-o|=L|5TYmv]');


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
