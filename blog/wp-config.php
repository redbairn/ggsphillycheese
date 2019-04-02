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
define( 'AUTH_KEY',         'i~:1$2iaQE-hio+pg$>%[pg<5{Gr2jbKeB1e3O<Upu=q9} pxtdq]f.OmM-U9F0!' );
define( 'SECURE_AUTH_KEY',  'n6AyHQ`e!Wgpc2F~Xb{`y<6dg?`C2RB9|,cy3v<usx t5dgQOU|G18~GE@~G=M{&' );
define( 'LOGGED_IN_KEY',    'Wo2v]L>T5s(QOpo- pn>93yMEKgp{git!uagCcjx6Z:dFQktq`~i#xu2MpF~,Fmi' );
define( 'NONCE_KEY',        'y7!HdjZ^]ur$K+{-Fx t`qw5 gFMl}T5Q+!8jt//@m^wn`5ayY@j?~/F[r`$9+`v' );
define( 'AUTH_SALT',        'XZCQ@9ABWPp#<m l$9cOy^FG[4(2>hr=_.f05VHO8ZN/G2~%8N1wy9T(*?7nCu9;' );
define( 'SECURE_AUTH_SALT', '&!$M-jt;r9gWJjIqO&#w@qNDksJ!=wD(uN>e&WSXzL+7&>r&3^ +*v-xHq.hu-Zh' );
define( 'LOGGED_IN_SALT',   'NtLQe@3+;lyg!!X--[90e^{3:]2QF.58IX$a2<z[saV&:!KF/cIG*D.n%deq:Wyg' );
define( 'NONCE_SALT',       'WQrf99sDUm@BUFPwIsn*&rqap:Fr;M;p)1OVU`C!8+b$V@7!%Y,k|q>9e_ZARTnD' );

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
