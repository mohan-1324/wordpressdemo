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
define( 'DB_NAME', 'sample-wp-app' );

/** Database username */
define( 'DB_USER', 'adminuser' );

/** Database password */
define( 'DB_PASSWORD', 'Admin@1234' );

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
define( 'AUTH_KEY',         'Bp5i`SX|^l%D7qO8NTW`LdV@-%-T aT([#mmg:qcNRK8(JD@$/xDPdNq6h@`:,kw' );
define( 'SECURE_AUTH_KEY',  'kEoH=+VlAgU`LKL %3z4CK7t#4eU/>|dk^-|zIx,s#(TaNye+x55~-c`(CRSz|[=' );
define( 'LOGGED_IN_KEY',    'xt:$7u?(&/}6jD]=sd+vd9Noi)]V#,5*:H@doj@z]=O5@S#+Uw]6RVbeEen0}vp,' );
define( 'NONCE_KEY',        '8|0fU-F^+s-M8CDDEFS0HLvec{;A8kj6u<}RJ*4R]gL`uKaxvd;^3jKum4Wg(S4~' );
define( 'AUTH_SALT',        'In7^Z:|GJ%3(3,B6es0du3q73<IevP6P*q:Vv;#j]Gm<eoV9c_qj5-].KLx~=2,j' );
define( 'SECURE_AUTH_SALT', 'VGXr5m7Z_e-mMXi2@+#A=Sie9:8/*`@}0?2y$Q1)&-UKT]:>4JcE4M~=Rei{=V0!' );
define( 'LOGGED_IN_SALT',   ')L_]=[R0z7E#KlaRz-VNi%>Q7]^+6P^Pi^T-TSNRy+G]d97k9]inp>K6@}N+d8O-' );
define( 'NONCE_SALT',       ',2cxo0SeyL~A70/e)VSO#bDpiyYL0iSm3)<v!nQ3w<>9Rgci}Xp?^+gZ2U}We$$@' );

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

