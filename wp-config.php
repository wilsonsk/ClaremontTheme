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
 define('AUTH_KEY',         'k?AFY[*)q!$]x_pJ7Z4].?IqY5}]t(I )AkWVMajWt]i#)H@RBy-s2xao~08b7%i');
 define('SECURE_AUTH_KEY',  '6n9uZG.G?6`PV^j9gfHJEh);VxQT~xq-<<{,v|9=io(> cN:su1T=)L7kG)>Lo_|');
 define('LOGGED_IN_KEY',    'saI/F^=H;|-P>[uM:-h?j#;96]]4y{{;Mof@R,lb+E#[fu#kRyp@/&sq_4 !6Q9I');
 define('NONCE_KEY',        'Y+K5g2h?V}t(+8lgHSv^wzU.^-V|]nvyp84,[;x[;%FSb,$&0=cJGAMVEKw0vE2-');
 define('AUTH_SALT',        '-6n]@kz3M^;1-tw*|F_,K6`R*:kc1-/>]X&|!JPlSV;I4UR5SG%q-Jd!5#6w<+-7');
 define('SECURE_AUTH_SALT', ';,|{oLTB[4*w`+}<Z->E)]7I3^BO@}|D3cJs5>MQQxcTjO 9/JCFe8<jO-hwb<+A');
 define('LOGGED_IN_SALT',   ' +-WV6b [(hD!@.v<6Xy]@JI%U[TKHC=Rn807Xl!6F+)swxQ5,lZ-VUVfkh|g{)M');
 define('NONCE_SALT',       '0Z=Idf6Tc]b6lt]gHT>T$Z4&ASd1FfJtD>Xq}_koh s-J_L%sfe3qA$k6L`{i/;#');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
//security measure:
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
//debug is set to false by default
//define('WP_DEBUG', true);

/**
 * Skyler's OPTIONS
 */
//five minute autosave interavls; default is 60 seconds -- setting to five minutes reduces auto-save revisions and therefore, db space
define ('AUTOSAVE_INTERVAL', 300);

//this option saves all database queries into a global array that can be displayed on your page
define ('SAVEQUERIES', true);
/**
 * to display the query array in your theme, add the following code to any theme template file to view:
 * if(current_user_can( 'manage_options')){
 *      global $wpdb;
 *      print_r($wpdb->queries);
 * }
 */
define('WP_ALLOW_REPAIR', true);
//log errors: create a php_error.log in root WordPress directory, then turn on the log_errors PHP option and point to your logging file:
//@ini_set('log_errors', 'On');
//@ini_set('display_errors', 'Off');
//@ini_set('error_log', '/var/www/html/php_error.log');

define( 'WP_ALLOW_MULTISITE', true );
define('MULTISITE', true);
define('SUBDOMAIN_INSTALL', false);
define('DOMAIN_CURRENT_SITE', '52.89.243.4');
define('PATH_CURRENT_SITE', '/');
define('SITE_ID_CURRENT_SITE', 1);
define('BLOG_ID_CURRENT_SITE', 1);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
        define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
