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
define( 'DB_NAME', 'local' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '9t9y+crGvIK87Mfxhd6FqMDr31HE6GKZllUElWZ1XvYzvs8aiNi3KL9SyD+Xw59YnOiB8f1+yUOZyTnwc6oJxg==');
define('SECURE_AUTH_KEY',  'j2x4oH2E2l5tuE3DfFrV9qCPEl/tQkRP6pSAx9BVnY0UBFyLr2EJoDFS+6zJDedwnV8Zi14YRZjmarNSqYbWJw==');
define('LOGGED_IN_KEY',    'vnqJYybmefDl7yhh0Eniz05sb4u8QjkM+sII/3QiPLYdCXT8UMwoaVL0lBDkALvolMAT8YSvFnrTT0Fo4oaTZA==');
define('NONCE_KEY',        'pchtiAXXkhdLqEBrJXo/7b7WDXKTb3Wct2SkK0etzR4aAzo8JAhioGW4Qgz92wTEbGlVE7VS6jStn/G52pWddw==');
define('AUTH_SALT',        'RoMan8s4W/UVzxyh/eRglkh7UDrPRZYsK1QXDOy7oH9ag+OcbFXJEsW75SP4zsV9VyjH6erhw1LYc+FtIzv0hw==');
define('SECURE_AUTH_SALT', 'Fm15xZ7sXwbUBDcFkpmjJ2kP5Uv8PXFpMmFIPKRhM9a87xPweW3Nz2/nweHnWXjwS2IIT/JP8u4VuZKK5g6Dsg==');
define('LOGGED_IN_SALT',   'y7tBn7B2PD3tQZnJ4b8fRpHE4RGoAn/3VVXXBfNH8Xohve5KTnK7cd6St50kf5lgsUvp9qeOFTHspNrxeI5Kig==');
define('NONCE_SALT',       'W9bJOzq0YbnTy1yAW6wBcf1QzIiV6k5BHAPfoFhHCTiq+AQbaTIwDn9E6h41e0xAGkM/t+OQVyO/rIVWeyNb0A==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
