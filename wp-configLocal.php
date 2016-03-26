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
define('DB_NAME', '9');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         'gmot4P4pPY5>NX@G<fr< ;[2AATMA!|N7*v/XjC~<lk(OK_d|b%!,NQ39EYB/.5!');
define('SECURE_AUTH_KEY',  '5_[T3+@&inKIBMJ721e/SxBqs@yFd)e?kT>Jq::C*!I:Y$u9qp(&QB0HP_OHQq3m');
define('LOGGED_IN_KEY',    '6=G2yu@ht7+SqDMUO4!$:<3gukh3HHl#tdnMk~I|Az7Adi<>s90{fLV2r#@8nyKz');
define('NONCE_KEY',        'h(<DS]FZ0?/*ciwx!@4nv`~m?|P KSSM]ftb $Q2Lk@$&n4d x}mgE@/6zma5T5j');
define('AUTH_SALT',        'ypH4xQAx{klrv0 Ij{[tOCLjR{ rIR9MTw]=.Mp~DeT,| H1I<;1EHh>CG!h[`R!');
define('SECURE_AUTH_SALT', 'jG8(C6yqGUUI0Z@k/x2r_FMUP@Pt%W~dM9WdunshomH|U&otS#f7N(VkTU6a}St6');
define('LOGGED_IN_SALT',   'SIA>#=at0]xxe|8zTQX!x5Hmy2>L%f4w8Kz0 Hv{Fug^NU#.*tHAoB08XxnGz3).');
define('NONCE_SALT',       'E=zKZi{s) ^.Hhf]9gxrLa_B@&jY}iI5VTXYvst%``;d)okUeH .5H3RTQ>,rbvk');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
