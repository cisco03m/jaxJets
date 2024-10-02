<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'testsite' );

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
define( 'AUTH_KEY',         '&V4-OYd;[44ClQfj@16V@-qGMCd=hBq@N%/{yX,04OkcS#.zx)!UFb6OrWEG]IeG' );
define( 'SECURE_AUTH_KEY',  '7!B>dpJEK%t,YfQ{Fn[[yfU=%Ui($-0.bbo*+;FQ6y,?2@{cE:AX&>dH*J3F&S;}' );
define( 'LOGGED_IN_KEY',    'fl[*B_s-#,l~1h:5<aWw/E0%GO2AMYN9m;hI8c@H^=R?|-U1dS3LaH(j27[2tz!k' );
define( 'NONCE_KEY',        '{I%q6Bs;E/i8(G_]E!w?QoLP wOgB><jv4-mc>^8K7VMQ4EJwpbbm`QSl-|u38#u' );
define( 'AUTH_SALT',        '*S~Y$M9a&.h 5AMG:3A?U5rQbaHz&-=g2MR<VC/2bS:VtowSezfCss5 BEx6ixE4' );
define( 'SECURE_AUTH_SALT', 'z5b8+Yj2lJU,|lS0o~Mc3xarqH*=^R8KUk.SVef`{-L[59f7Z^^~SJVhNG-dgc0b' );
define( 'LOGGED_IN_SALT',   'hXCa-d47!$Uh<hP.%&Lsiu,B)s)/nOuxKFeP.nBO4~=;OD g=05?5[w6%%a%4}X@' );
define( 'NONCE_SALT',       'qu LhX{l%>{p?BKb/1)AWtKj&Ai]nxiEJ%0[=kcdCX!uy9tV59^tVu7FsDy_[Z3Q' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
