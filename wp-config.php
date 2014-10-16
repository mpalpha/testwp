<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'bitnami_vet');

/** MySQL database username */
define('DB_USER', 'bn_vet');

/** MySQL database password */
define('DB_PASSWORD', '911d76033e');

/** MySQL hostname */
define('DB_HOST', 'localhost:3306');

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
define('AUTH_KEY',         '46dbfa275e4a0c853e7daa71369aa3308ca59d08852922970ee9f52517c454da');
define('SECURE_AUTH_KEY',  '8840c12b2eb9145697652cf0ff2ea2bd69474b09feb7308bfd333c3c33149e1b');
define('LOGGED_IN_KEY',    '0ac25be929f78be468c5b61ded87dee45de6312e72ea5f6290f8cbdcb39a1034');
define('NONCE_KEY',        'fa946261f2408460af1c136e0bf6f16210744f80de503783ed375b44329f3fed');
define('AUTH_SALT',        '55342d8f4dd668eed47a8260a34302033a8191067d43273d411cf704e0b4ec34');
define('SECURE_AUTH_SALT', 'ef7540597c78f83e61b86b06b1f570ef472256d83e0105d75962a2d0edd046a9');
define('LOGGED_IN_SALT',   'ae1295eef785e38d42153981ba33ab88d08ac22d9f39673cbcee5bc277c3d5dc');
define('NONCE_SALT',       '3db1c1515f7441ec7b0d6d788956079a0a45f1c407b7901913bb7eac5906714f');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */
/**
 * The WP_SITEURL and WP_HOME options are configured to access from any hostname or IP address.
 * If you want to access only from an specific domain, you can modify them. For example:
 *  define('WP_HOME','http://example.com');
 *  define('WP_SITEURL','http://example.com');
 *
*/

define('WP_SITEURL', 'http://' . $_SERVER['HTTP_HOST'] . '/vet');
define('WP_HOME', 'http://' . $_SERVER['HTTP_HOST'] . '/vet');


/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

define('WP_TEMP_DIR', 'C:/xampp/apps/vet/tmp');

