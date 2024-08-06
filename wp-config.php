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
define( 'DB_NAME', 'port' );

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
define( 'AUTH_KEY',         'zw~<uf,|J9.j-g9`2T4sUOuKr{te;Z{cm)HgD(,2bF:`VBMo;^u?OZ]vq?l9N9P@' );
define( 'SECURE_AUTH_KEY',  'bI`;5-sMQ.SEooK.Ky8E=/Hw@;*!oMT2X~/-NzHazB|yC*z(dZpvX6C%LcQb#e)$' );
define( 'LOGGED_IN_KEY',    'u !z1>uGw38}]`(b2mO}!-P0FG[7eziE/&NJRn&HaV-v6R+#90fQgq~YwDe@U_l[' );
define( 'NONCE_KEY',        'n=o95*S.f9b(14SK3qX~K`d}{nfF&XUF4N3_5-0V9EmPGl}CABCs[q,+uIR;NpO$' );
define( 'AUTH_SALT',        'EVH{{]~!nknJ=>4il|3I%%fjSg7gK|Xj@txKT9DLa<&t@+4F.@:_/n,R+ins}Z*T' );
define( 'SECURE_AUTH_SALT', '[{c*)T9gs?Fg4u!fPa4*TbUN-wW{kC/krP#sd1Q6sND}KeiqD(5%v?IVg)IEj|$]' );
define( 'LOGGED_IN_SALT',   ':f~y(:1G>sG>VU%sScL`ZoBXN%^[dyvc5^blngVuUyu~%YVk#q{Vv4f%+p51JHOU' );
define( 'NONCE_SALT',       '@k$eqci8}U4|*Qr EqGBL5n^NmdS u|{9JQixoQFMfNEh:/c=up_x$nMTkq!sjZ9' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_admin';

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
