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
define('AUTH_KEY',         'QqgVWf4XuIvHz0r7TYMzSqnyauXN5CzUO2HxsvY3zEvxTI6uapmUfmf21McKzb/I2lnFJ+CnkEYJygT70I+wKQ==');
define('SECURE_AUTH_KEY',  'nBw/ELr7ayiVltvTVAkbuwztAPDgK9lnOOPM4tDdtvHTA9jiZU2MsrzLHhs675C4kzMMs9yrlBQIONbVmMnYVg==');
define('LOGGED_IN_KEY',    'zhlk//x+v0V0NXoKFytfkH75gRqxgoOwEYi2XSSqoJsraiyAPxD5wcW93UFxrp8JasL614lXKOEh8rdchHwHrw==');
define('NONCE_KEY',        'rLQCCJ+LMzpwy/LTxistEpNXPCcWf8T4MoHGxUkmaFp4oSU+v2zRIDfglX82zRBkx4v3UFq0Cq+a0b2LhbP3qA==');
define('AUTH_SALT',        '0LPtpwqAxFYVDNxRz5UUCVDoIcu0U4SIC7yt6/IgM6CXF8PIQlpl0b5jfSz03JA7ybBlPXG+vJ5B5ihsdr5b6A==');
define('SECURE_AUTH_SALT', 'Zo1nIxjG90UNeyMg1fCfdA6YdDbdApeyUhq0Zd8AnkJrfhbEx3QWvjZu/qF/LTvwbigWpyH3Jtt+g0yxecA9qw==');
define('LOGGED_IN_SALT',   '5NI4SqsOnNgohEW6h5YcJXrmLoPFW73vL1C7prHfGeiNytOe70imIxmZIv6R86nykh0HuB1pK3Y87sqh/hD1fA==');
define('NONCE_SALT',       'A37LB63F6he8qgG3mVLh7nFEsr4Tc47VlBZYS+ZAWmmFFOknrdG4sDSovjUrNioM5RoC68f0y2x/W1nh750fRw==');

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
