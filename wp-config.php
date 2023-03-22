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
define( 'DB_NAME', 'dardos' );

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
define( 'AUTH_KEY',         'FbY|R_f8]h{]YeLvQwg*YavCHfq?5>D 5kT/YJwhw,Pe:TKQ8XknJ<M)DM5p*DKS' );
define( 'SECURE_AUTH_KEY',  'b=lM5Mqrx(YL%ragBg1]2/|Ko/#]az3h47qQz#LOLwEE>[&I`DYxbZM]}T k:@kk' );
define( 'LOGGED_IN_KEY',    '22>gf>8yGakUKfDFAsS1iFn2>CxkoHZP*/u,9p01XaWl>WmW7+VC6lk`akOj[yt~' );
define( 'NONCE_KEY',        '~d4~du6xr-Lgoi-;o_^o|rs%S}%qG1 NepShK=y;G8q<mB}3[V]hR:I]g` PNS[A' );
define( 'AUTH_SALT',        '=TEz6/.xrw69h4UTTpQ8&dut+2JDQrsFez zFJ<9M!3jhGjh)fo;G;%,H`fOXv`Z' );
define( 'SECURE_AUTH_SALT', '8l|xd E>xm}}sN ,dsPwU}/.iq^ZMA*r{A5$X6ib6%WE*z,b)f.(&O[W2qdfq&##' );
define( 'LOGGED_IN_SALT',   'aXY7E4gX+908c7KnR{0E9&Jerc}1 VjbvG*t#R0FjX>LN._RF[-QjjrHHvyT(*#L' );
define( 'NONCE_SALT',       'keQOr-IN(s~&X{e9>8&1LmFs>L`8pm|1qdSiID2rc#3,$#GNq97gZ:?[hA}v*c`B' );

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
