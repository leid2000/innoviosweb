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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'innovios_site' );

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
define( 'AUTH_KEY',         'qdalN+=t g)dk3`5poKqmbi~6/g{Cx0%Vd*c_)]Z}&tm:|e/ksTY;=yg~s@Ja>&*' );
define( 'SECURE_AUTH_KEY',  '}D:bC;om[t#x(=%1_$N%%y80Gy(T2gf}9h[<n#TM00klgrekMRTO~)szzt%Qvf%t' );
define( 'LOGGED_IN_KEY',    '$d.m(8:@ujQkobcD7c;cA,C^dw]SK%FIB3|.tT1k%(i;a_Gti]hEBjZZx8tWx%|`' );
define( 'NONCE_KEY',        'ZMcGadJ&ursDstcyc#z:tk+(EC*,@1WdbB-ugR{3##!2te{3WZ`Q2UYm>!GE@=]j' );
define( 'AUTH_SALT',        ')0JY}?|/<gr$y.;V$-.5>d0U9n%n(F<$~SR7s7($~X@M&^w~o|Y3Y=W1SJ+e!PXA' );
define( 'SECURE_AUTH_SALT', '!bdMwLD*5LboFWi}ekl)QyeaaXZG;(-w.q}Mwu[>hT8A0fGm+qQp1x?oFIt`xub?' );
define( 'LOGGED_IN_SALT',   ':0(6rK`yc;+ar[9lT;QGbTehPOg4g6RMF!c-0!1g#*atDXQE9<PyA]:aJRpe`B%u' );
define( 'NONCE_SALT',       'WBCD=9)&IX@J[rWoH%@$ r1Kbi{OuQ3BX-#/36W}|E;L`UO:I2w7:4J!gviO~g${' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
