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
define( 'AUTH_KEY',         'eL9[+WC#V-5$wt6HXAUL8hntRa>6/rO4$Ah;t9N6T<87!Z~p4{]Oy28ACcx5/,z{' );
define( 'SECURE_AUTH_KEY',  '$SmjiMx]-/I/k;/^?*+jP jlvt82&P%FL&]rv`*jKW7Bn1Y?8PV6#2n#x$JmI~7$' );
define( 'LOGGED_IN_KEY',    'S[XVR+S|~2KFL=e~qvC`kt=Y<QVC_$OK%ybqFGIVA!~+2Rzgb<O!=Gmy*_-+ujc>' );
define( 'NONCE_KEY',        'v$B(j$Zg|hL?:6jOWB+*q c=Ad3icD7l0yO!Zd^~euic4#;eiMWyM4F(Jia0w*B/' );
define( 'AUTH_SALT',        'UbSL~cB1PtR4SlgS545NWEH6_mUgp[Yj-jwTS*K}>bhZ#Ek[o3C$W[,:jhu9Y!CJ' );
define( 'SECURE_AUTH_SALT', 'Mx3=<A;%e[xuc85Yu.o}$w=IFSzauQs70f=.H[c 1,aY)zF$:pF#+-U/dqltL&C0' );
define( 'LOGGED_IN_SALT',   'hSL@gd4f5W##ACT[51G^Y1bn`.LTzRlv$0_T3~9bzX{wSDDIqCpXQ x`.r7jQ*#v' );
define( 'NONCE_SALT',       '(]@IA/P-yT/]-0L-uhx-1~Yg/dfIp|i?2R*|qyq@kP<c DM}BY$aR#2hl6/=Tu8!' );

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
