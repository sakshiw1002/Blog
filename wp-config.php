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
define( 'DB_NAME', 'wp' );

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
define( 'AUTH_KEY',         '_)}~fN p2WE6e;V*|*A,G}>uHa64CkyaJP|AJs_!kh8 H@uAy9IO^[hgJ_p 3bw ' );
define( 'SECURE_AUTH_KEY',  '!eO$zgiiz.F&_.?S<3ycsXa:5RZ7S)Fy@9[Oicz,]pkh2j7dbab>pupBZwz!pF{}' );
define( 'LOGGED_IN_KEY',    '0|)]}r?fR-hiV4Jf-rm?]VH`jE:u[f^OdH=NccX|_McTigc;[o_Oolp,bXW^Bi/i' );
define( 'NONCE_KEY',        '8-8=&mus]iwrF~4(>+WpKRn8=9xwWNW /5#,tvmo!T{DiKlEF&_~_*LESyU3|UuM' );
define( 'AUTH_SALT',        'SUFD*?M.FAB>fH9t.@UDsA,9k$I,S,qPkyZ UX|>-$z(F{G 3}9_p4M},2DLW+l[' );
define( 'SECURE_AUTH_SALT', 'LB31BWD(^*%`wZ^e>#N<4Rz07?%FW$xej|`QBZcWr>>4yp_vm,&<oVjML9H6K}lB' );
define( 'LOGGED_IN_SALT',   '/HTvyAqjN`v1w}4nK+9V)bkJ%X%#m(8#:44nuHdo1W.AS(_F-ol;k3 &k:)h#Luc' );
define( 'NONCE_SALT',       'IyiG*Xgm@FHAxe9k_&c2R(q9&i/ k6dQ`_;!rfWMjVWd<s[s@&yCTN=aW#km1M`G' );

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
