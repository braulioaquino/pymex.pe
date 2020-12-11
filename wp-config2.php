<?php
/** Enable W3 Total Cache */
/** Enable W3 Total Cache */
 // Added by WP Hummingbird
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
//define('DB_NAME', 'bitnami_wordpress');
define('DB_NAME', 'wordpress');
/** MySQL database username */
//define('DB_USER', 'bn_wordpress');
define('DB_USER', 'wordpress');
/** MySQL database password */
//define('DB_PASSWORD', 'cca4aa30f2');
define('DB_PASSWORD', '964d693d6f92c38ab5b921dfa1442a19f8169376cd0c54de');
/** MySQL hostname */
//define('DB_HOST', 'localhost:3306');
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
define('AUTH_KEY', 'b4a12c4f57d6d31c57bb83d1623646314ce58d4327c5c33d0557c142438ace21');
define('SECURE_AUTH_KEY', 'f5983b186079a75e97887a8b9fe502e218e9e3477b0fb7f847e977e43435ae43');
define('LOGGED_IN_KEY', 'a451935dfbfb84ba892ce2f11082228ec4489bb243ab387c96b1cc8c95dd6b1e');
define('NONCE_KEY', 'ca7d88e4738a7569b24d77e7ae3d5e8ad1e87079d1d6bfc25de4ff50c5a2f863');
define('AUTH_SALT', 'edc2648c854ddfb6215655f4a305bf0994a11cada52ab20fa1b2411dbfa50c5a');
define('SECURE_AUTH_SALT', 'c5d0bee5c58f3bb9429e4db9419be7c081df7a71acd0aaf6146886d3d8bafa62');
define('LOGGED_IN_SALT', '52215307b68643545df36194d0eece486312d0234836ef2fab221fa52b5b41cb');
define('NONCE_SALT', 'eb86b8f1c13ec7fb30786eccdbb87eccf6a865c6d1d41de042b29211733098b4');
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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';


        // define( 'FORCE_SSL_LOGIN', 1 );
        // define( 'FORCE_SSL_ADMIN', 1 );
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
         // define('WP_DEBUG', false);
         // define('WP_DEBUG_LOG', true);
/* That's all, stop editing! Happy blogging. */
/**
 * The WP_SITEURL and WP_HOME options are configured to access from any hostname or IP address.
 * If you want to access only from an specific domain, you can modify them. For example:
 *  define('WP_HOME','http://example.com');
 *  define('WP_SITEURL','http://example.com');
 *
*/
#define('WP_SITEURL', 'https://' . $_SERVER['HTTP_HOST'] . '/');
#define('WP_HOME', 'https://' . $_SERVER['HTTP_HOST'] . '/');
        // define('WP_SITEURL','http://xyz.pymex.com');
        // define('WP_HOME','http://xyz.pymex.com');
        // define( 'WP_MEMORY_LIMIT', '1024M' );
/** Absolute path to the WordPress directory. */
        // if ( !defined('ABSPATH') )
	        // define('ABSPATH', dirname(__FILE__) . '/');
/** Sets up WordPress vars and included files. */
        // require_once(ABSPATH . 'wp-settings.php');
        // define('WP_TEMP_DIR', '/tmp');
        // define('FS_METHOD', 'direct');
//  Disable pingback.ping xmlrpc method to prevent Wordpress from participating in DDoS attacks
//  More info at: https://docs.bitnami.com/?page=apps&name=wordpress&section=how-to-re-enable-the-xml-rpc-pingback-feature
// remove x-pingback HTTP header
//add_filter('wp_headers', function($headers) {
//    unset($headers['X-Pingback']);
//    return $headers;
//});
// disable pingbacks
//add_filter( 'xmlrpc_methods', function( $methods ) {
//        unset( $methods['pingback.ping'] );
//        return $methods;
//});
//add_filter( 'auto_update_translation', '__return_false' );
        // define( 'WP_POST_REVISIONS', 2 );
        // define( 'WP_ALLOW_REPAIR', true );
        // define( 'AUTOSAVE_INTERVAL', 160 ); // Seconds
