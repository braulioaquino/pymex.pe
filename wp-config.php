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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'wordpress' );

/** MySQL database password */
define( 'DB_PASSWORD', '964d693d6f92c38ab5b921dfa1442a19f8169376cd0c54de' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

define('FS_METHOD', 'direct');
