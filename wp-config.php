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
define('DB_NAME', 'claremont');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'baylor24');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'G|;JWumcPA|}.-FJI}t&a,<G:B}N/A/wU=7 `P1bo%20Id(g.G kqiEn|Oa~#r+*');
define('SECURE_AUTH_KEY',  '9HhAW4dkWD-P,io=LvKQ=_{]m.~j@VV4RGK?.-liZfM6RC}L)C<XK|zYAB3oa2Wl');
define('LOGGED_IN_KEY',    '-e$z2)Y95-D*HN8wICZjxXO&2HP+[s=z!VA5FJlzUhHfclXRzsk: v:msMo[k!2j');
define('NONCE_KEY',        'h_++ar(BXy|Csq_g9+c<t0p{% Uw{.-{d2JzQ8m)C,S>y=3NO^Wt}>57(}=+tSJ$');
define('AUTH_SALT',        'j5N70H$j-^XfH(`Ok!+ 7KJ|LVC+*yZLjc>#kd=DBad-4JL;$`RhF=,}0:<>;5wn');
define('SECURE_AUTH_SALT', ' ;fP4Xgg H1W.G:?{tx<*}37?&ArH@}WZ-0AYM~1w-qKEqJkj|`xR^Rmq+?kT%d?');
define('LOGGED_IN_SALT',   '<cWJO51UJG{@FDnhiM3NBJTw%a9bKVi]_l4vc]KWHd$`5Pv7M@t7zyzfT6#o7O+S');
define('NONCE_SALT',       '0@C,yqz5QesM&C8717$Nf|^c:SB&x&a[m^0DKB;G|J%T:e~VQ*eqUCubWy_1%$di');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
