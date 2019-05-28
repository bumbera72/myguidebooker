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
define( 'DB_NAME', 'myguidebooker' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         '4&OEy/Tu[7o=~M@~CKfpW_ h&2_{qwmQP1+qdzKT/`)Y#s!WS+A-0LDYO~=Md1B!' );
define( 'SECURE_AUTH_KEY',  'E+eB-p/Mz=VNSt3h?VY]#P`4ah=S*~!?2l;Qq cDa&q(FPz|}i3lvH#pKq>:,pRN' );
define( 'LOGGED_IN_KEY',    '`FTMqzeIau%d4^Q*FL8dS4.#euCwPP418[T =MN V)2*M?!5C$lWUDbE+x|~~?h@' );
define( 'NONCE_KEY',        '675,IZ)Qj0}m^-Dq-M6g^Z.Py<.mCd{}<$A;T<W[8wX.q!&{5r9LL@^B52}!]pfC' );
define( 'AUTH_SALT',        '7Jh8-O+37Gc1)x8zH`RQz?E/>cWyVXtQl3b,6ko3aLe]Cyzv)MhxTJ7XLmnu22(1' );
define( 'SECURE_AUTH_SALT', ',u7js[Rh4o=1a9rotAM$C{;U6Q_Mjjs=5l~J9}zjHr#$}BKT <D9H{&QG;s1;HdN' );
define( 'LOGGED_IN_SALT',   'WxJNt~ekQ>)Oa0}Z4TR24W>;:T_1;C|Won-@bfzuBI|KZ$(?XYQTn!|nHZfYn|ox' );
define( 'NONCE_SALT',       'UXX.7;UZ(a1HCVmM=40w*~T$slVS*2WsS<Mv+e+-N~-ElE`s&<NdEeJ>+8L$apRh' );

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
