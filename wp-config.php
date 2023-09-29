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


define('AUTH_KEY',         '799/lb7YgAgXQHmWcmjl14L2mJ2C7y+d7EbeR8bqXhf58PfLlgvMbE5oy3m++kN5kgOFENqvSCSzuJv3LwBgSg==');
define('SECURE_AUTH_KEY',  'NvCb6BDL6agctpRB/GirThZNjqUPt6L1OFAyGd3k4sh81xxKfc+mFTOFjAS60bd1jPwpFdgnRs8939w6jnYlTQ==');
define('LOGGED_IN_KEY',    '3OaDNZ8rldznvrVVUJ1G0aO6XFoUt62TVGtAmUvS1EnYea91vaRA0PfgWT2QiRg4m5Ekg84CitBqLEe7yDiH1w==');
define('NONCE_KEY',        'tX787bzvW7zVBPjs8yegqZNrRhI6oQrXsI2U5bEu4cZtm+VuP5YfI1AfA1xAlvpcZNyWbNWkzH+hUYyaalUvGQ==');
define('AUTH_SALT',        'Yr4Xs+FsP7pczLbWjp3VXIAi33ZvSFjdf6t+leX4M/SwQIZdtC1KaM+FGWDhSjm12SkK+fwfgU+JsLgDhqi/PQ==');
define('SECURE_AUTH_SALT', 'Pumwd4VUvdYPyggzQbdQYgMKHgHPLxAjPh7e29DdFzYp1WQYxPynxHtzPBOsgEQMS+lXnXGxoic18BEY5T1yWw==');
define('LOGGED_IN_SALT',   'udJmqFeFQNhvKbdTiUuAlmHX00+k3uPUsUqqJU82lfFPkk+27xo4aY3xYUplKoBn3R0B/dZ58Bhkxcjk7WT7PA==');
define('NONCE_SALT',       'KdZg9J3Tk/BRHRVebkIOZD8Y0rljzJJOQvQYfrQgXzBHtZn21QFLzRzKt4T8pp7hO0xZAatqfBiegkYPDYsjnQ==');
define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
