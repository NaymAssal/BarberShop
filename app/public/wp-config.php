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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}


define('AUTH_KEY',         '9c4g+LrQX4KkDXJwGDRz2D8rs4K8qpngpIrSCLBp4hi3TTrEGkASl3rGJzLoazdQlATnjvj8JoW6KJTOprKZmA==');
define('SECURE_AUTH_KEY',  '3lzXK1Zys5nKFh9ltx/NXJt4F7JIa+qNZgEFYdmqVRLRJXg3PoOkf4M88L5hLaNl314gZyp+aSwziSd4x/ftyA==');
define('LOGGED_IN_KEY',    'AQbfzmZwF+QpRYZXsaXE4tez02TN/L/tPm0zcjEQTVXOXec88DPqzUMxTmtsYemAlmGOly3F6au0gVBGGGkfnQ==');
define('NONCE_KEY',        'WqK6SbBNr4OGv4s+T1uYCHTmWxrS6/6HsNv8Kg2AxgAzx8rCZPRWMzWNn0m1TKK95CksZFQJQP2M2t0S6nyoPg==');
define('AUTH_SALT',        'JO7YAaZDZJ5aSKRvbZ192+DBlXs3Jw2pUzMp7Zf8U3diNJowY6SRxcbuOl8Eh9awLUplk9U+9CuX2pVJ/ufG+w==');
define('SECURE_AUTH_SALT', 'OT/a1KoWnqcOJnDkAk5XQUQsVzB4P4ZZs18Y2cLexj6JKvVdC5J/koDJTqvsDwlXDqWIoCDMApJVqbdZshXvsg==');
define('LOGGED_IN_SALT',   '6qrQWd5jmy8Gnte3nDusvquYKSlqnB00fVXNB27px8JMtFf+CZ6ZyE5G0yiLK+ZzcJDka2ITtEY+ylC7uC//gA==');
define('NONCE_SALT',       'I4rIYdjY/yb1JLUZv8YWFGVrBUWhIQBPhdFdny6lylqUJmOMwn62m8ceiwR4gFboNL9oGnbSikCk/ei8n19/zw==');
define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
