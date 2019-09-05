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
define( 'DB_NAME', 'LandmarkgoaVillas' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Ajency#123' );

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
define( 'AUTH_KEY',         '-1g[zwJoC)d:N{<XZ.3SU5VfMF(s@O7>DKhjD}gA5f]mF7h 62>)WQ%J2z:;osD1' );
define( 'SECURE_AUTH_KEY',  '>zA0 miG6z^_Z]hl&:#iGb<CF&to-!|z%Q9hz<AF07P&4`k^AfG*e.c5o8j_GoRI' );
define( 'LOGGED_IN_KEY',    '5-g~-|*Rqbr_VIPnVhJ6SBT[|tY@SG,n$+[3vlp7=D][qbrBhzjPqrnJ57!Z;H*?' );
define( 'NONCE_KEY',        '#VK^:],tj]:Wi?e;|Qi;jHX [7{xQKc`qC^o@NL7%f>[$52e_dr%RXCe0zA7~KU0' );
define( 'AUTH_SALT',        '_^0AwM(f,A1cMfXgGg{{xa;$1FLn|u7k>-hT5G_;vXnWJZa)XkL,Q!{%9b_W]&&R' );
define( 'SECURE_AUTH_SALT', '}3y~Z&YwutgZ5Eb-_c;9&RgWv`/S}-1Fu6gFU<^6NY74EQoNpP36B=]/aX.X[_1=' );
define( 'LOGGED_IN_SALT',   '-EtY56i#HjJ)0TObuB$4i,1Kw 2Y>aSNz0+Qjy.* uWu&iI$?+Ei)$.OQ6O,~>4E' );
define( 'NONCE_SALT',       '3eOPy>-%d%%,R6*/7:_mKEJVM+t,~=^{VCwHDR^H1CB{~g<82xf]t&>[d02!Eyff' );

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

define('FS_METHOD', 'direct');


/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
