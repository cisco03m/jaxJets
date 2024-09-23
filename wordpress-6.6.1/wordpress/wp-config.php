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
define( 'AUTH_KEY',         '~*1Y?M?-0Ag0b/aGm6:~w_[b,BVbmIB&~bm]Z.4;*~Q_ghBAm6(l]yDu@[9,U=oQ' );
define( 'SECURE_AUTH_KEY',  'cslrWPB!WRle )a+BQnZK1e(m#;D7[[Q2&y~){Vvb.ncokxiBLzeEH7]Jz]XwjDe' );
define( 'LOGGED_IN_KEY',    '3E9p3^}h(dPzk)@!2/SMXeIn39B/hFevXHe|Q;F_d]A9puTpS.nY@8sT}vff[_H=' );
define( 'NONCE_KEY',        ';+g8;f`ZZYARXs7:&VQPoy.m 5P1U3V&M=X?Uk4@N7qKcVwbq6ehf+PkGqy.8 9<' );
define( 'AUTH_SALT',        '9q(9Uu{.:v({roDn0Rp #wV)#>1>,docwmC* !(~,!|}t`r>SKs:|f+R>5/^lr=i' );
define( 'SECURE_AUTH_SALT', '<Cw:+Q.=+%G&Q!/PJwD>vx`O 5.hr*V)) wyxsii+*EM4Ov`5=3%si}wZ %w`qd ' );
define( 'LOGGED_IN_SALT',   '3m/eM(Habk<AW!y-/(Rdb<6wOw5,B :W|I7LcRKjg5o^saX/D>1v(YseutV]II5 ' );
define( 'NONCE_SALT',       'uN}*0n,nfW#MB.6o;H5++15%6NeZ@zQar-&c?b6`k``d?@14~k%nFUF%Z;rB-{e2' );

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
