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
define( 'DB_NAME', 'ggsphillycheese' );

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
define( 'AUTH_KEY',         '5f $^P$Yw7ir!0x|4pVc;?f3e+{39*P&E/JA`3L49Ce2`?gAs`)J@IvFcS8$slcx' );
define( 'SECURE_AUTH_KEY',  '}TjNg)?Qgt|=aG4zu336TjQvMM*3W #5f 0l#;* @kPgH<$/3@RU,!X=JQ<h<2Ig' );
define( 'LOGGED_IN_KEY',    'G-HN7cl,GH,9^^<A@q%%ZbO)-Cz),+^Y_+s6/5k7b5.ugSPyX4B3BeqXUn;!b+o)' );
define( 'NONCE_KEY',        'Qkk)Z*![3>@!Up5cY=8]eNiWDUD4`k=hJFgcw2`%BDw =Sj`+Qh799Ij2m&o>|X7' );
define( 'AUTH_SALT',        ',p =@SF9Gm~6)2T-WoMVec)x5obPC67 fIEV~5SYJ{L7ic3{?(gXx_HAf<=8j4od' );
define( 'SECURE_AUTH_SALT', 'L7ou,C;[FBo@[ip_;qgL*vR67UkSBi(X2T>;NM.w;%,8cz>mLW3Ahd=`_3*1j9Hg' );
define( 'LOGGED_IN_SALT',   'A c9x`%$tc$GPA_k8W0G||sle][A%h@`>`8JKQEg-0s,DS:G=f+gUPM/bxyk1C(Y' );
define( 'NONCE_SALT',       '5(%D(,:~sJyw>+_M`@vF6uag~zQb;Nj=+`-X9eC`*ngFxCmxW6M$clN2j@)):cMI' );

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
