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
define('AUTH_KEY',         'b29WQZV8O9AEZh008iHlQbxP6V86QenZVmkpBL8o/M7uSWWwlT7JVfVR+Eb756mPZAOQREEroid6m5TmNidI7w==');
define('SECURE_AUTH_KEY',  'XTMeCImEQzm6GsVk/UE3NCsXH+Q5jVsXHYtCWTXZkNawZEsEMs5xd+eR1bY0xDUbgTId6k46Si8inxaAxIOfcQ==');
define('LOGGED_IN_KEY',    'subGaWIGZ0ox/RvBr/Jpxc/OTHdhuzD6xmiljSxRMZbBPuUxvKKF0IH37y5G6j24rtP24uqA85H3N/T2iCYRUQ==');
define('NONCE_KEY',        'BNVVD0WGp0Od7uE/pR/VoVv7LwE6qdF2pYVqsSQ0Y3YE0s9x9nGh+MnCiIpkm/I5xKFOoEIac0nHVdIEHagjpQ==');
define('AUTH_SALT',        '2wKzCWVrBvwQhb+gCSMH8xcUH6Rf5ZsBHOwwTlpCdQhrikg/s9Ljr5AxOtvC04yAqx/s4OgOmf+LfIsdI5BbAw==');
define('SECURE_AUTH_SALT', 'WwRjyvD7Sy2mFNNwKkMezupKOeiCi9D+hxF9MjXtU9OV3eNITpRFji9sxQUcfQlvvknnHk/Jg8fqxt6qheZtBg==');
define('LOGGED_IN_SALT',   'PIWvaRCKDCP3wyYPtmAiggA84YLrIR03B9p3jxkitS3CG+HrjqGBmEPIs3qZ/D7bKnjQdeqYs+GQUhmJNb8t0w==');
define('NONCE_SALT',       'Q/isUEjvHySmJxtG9l/iDYFdpzgRMnzfyTpWaNuqwsPPGNgjFg8pBj/seKcCeHrvgZ5ebgY8L4hNjhkggqN4Ag==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

define( 'WP_DEBUG', true );


/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
