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
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'ujjwal' );

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
define( 'AUTH_KEY',         'nRm{s8_GYe^rjMWs9KwGa%aLKA<CrdlU!X$t7A_*&r:FG P<2ohXu<ET9S|mx7}r' );
define( 'SECURE_AUTH_KEY',  '7d-A/W07[zYh.ejZI;wEjcX(T).}A}F*Fr)y=D>QlqB8|pC:m^kOHMaUb=-kKd&9' );
define( 'LOGGED_IN_KEY',    '(=#/tj~E,*lw>?z*a=i0rOS90boz*u<F+5lSa_&%oFsy^S-RD$65*,}k]sE@$o/k' );
define( 'NONCE_KEY',        'p(C$|^o.)wI>9[[=N_M34E;ZGgH=;q?ISg+r=9X2b~PR:9H.OBW*_Vs=jjU.5hsH' );
define( 'AUTH_SALT',        'sbkp#ZlaRZHEo_%F fH7qqr:Ll kQSP;eWy+R^NO4-@@N6>PX;U)|lK~}2Tef@K)' );
define( 'SECURE_AUTH_SALT', 'AKMIri#geD^&#n(7`}Bm@|3H#&Mp8pg.jVP`/TeBwh8~:nM.Y@^WwB Z)O8v]RdE' );
define( 'LOGGED_IN_SALT',   ';c$b63e?&e-h8N,-%p?zw!:]?XWq#<tGT2}m=L6U2l~<^w&=/TcfY{9$g)7=uWFS' );
define( 'NONCE_SALT',       'KXB99,G:!MhPx?TuEO^_^(HqOs,5@Ab>1%sr((qIGx,[f=3$?=#zU9Y{h,>m>:gQ' );

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
