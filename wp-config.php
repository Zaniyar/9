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
define('DB_USER', 'mariadb');

/** MySQL database password */
define('DB_PASSWORD', 'e2b4eb0c984c86e7');

/** MySQL hostname */
define('DB_HOST', 'Dokku-mariadb-9:3306');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/** Server settings for Jetpack */
$_SERVER['SERVER_PORT'] = 80;

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
 define('AUTH_KEY',         '0T(g6:,+i}):DPmO|>tV=T!{;Oc(7<):3tz5yeNe+yw)5nqSpfzJ[^eC*Yiq]4L#');
 define('SECURE_AUTH_KEY',  'RHd6|191mxEH+yU+%,+E!%Ci/DF<*i%*?17Wy&Qt(WprJCtN?4fHbIlc Q ;)g{1');
 define('LOGGED_IN_KEY',    'nQ:XzJ@A~e+E9^^|poO|{4U^!8N||ZIRW#KIv;pa/@Un&fAJ$0k3Hv(`YVCyvFiB');
 define('NONCE_KEY',        '~&>At`S<G=7|7d,xnWCWWx-/BGhXl:~AmH!NmYSQ-SwB{QRv`|#+~c##+V-s(~8P');
 define('AUTH_SALT',        '~GJOkO+A)h%;5Ex!y_7T|u;aM2Dg^!!c$,X#>t$$cV9y$hZ?EBO>T<SyEUOr3M#0');
 define('SECURE_AUTH_SALT', '< 0`iewSoX-3zf-r,V:dPHHDN76CU^beT]#DbaV|uH+/Jli_0WaLqQcc+|8Ju+hp');
 define('LOGGED_IN_SALT',   'LDAf?/__CvvH`aAOP7+qD7Q)Q5rEi41#]g>EKq,4(31-LImkSQPGel=Gk<gn6LoT');
 define('NONCE_SALT',       'v#clB1jVCr2i_@+Ur|WOsK.,v^Jo6FL)eD~7BaN9/c#aJ gpWgR0uDuW#G<E,YpK');

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
