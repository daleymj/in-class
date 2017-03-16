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
define('DB_NAME', 'mattdaley_wordpress');

/** MySQL database username */
define('DB_USER', 'mattdaley_wordpress');

/** MySQL database password */
define('DB_PASSWORD', 'qsUptMh2pNUZ9Y8N');

/** MySQL hostname */
define('DB_HOST', 'localhost');

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
 define('AUTH_KEY',         'qqH05{hJ5;u,7Tp{+Oal%M?D71kceXQNHOeL*+og-9h&*}QO%]M:tT|-2cp$lNtl');
 define('SECURE_AUTH_KEY',  '<cSW3Z>w(_zETk=BH++b3AUou$^]Bfhq&eSeNzq^us8f$uOsykS;3|f;^JGN<-@P');
 define('LOGGED_IN_KEY',    'E-s|DDWr#:)/~l-48E?o<QjI`49XWoo!h!Ag#^c-}t8IuRxjD|l5S];qZu5c`x2w');
 define('NONCE_KEY',        'X%n1{Yvt620<LeN?rB-<y;wLez[Z|ij)fO`}%( 2Aov!|,h}WFw[%y?8rh!BnF5-');
 define('AUTH_SALT',        '|VBq=U9pgE,JVUIC[R_j 0QXR2A^5KF58|rkyJ<{9u#$i4oS^[gpV&ge0hhYB(E<');
 define('SECURE_AUTH_SALT', 'Vf?s#&S$qg2&W^+2WY:MdJ#c$+e,7e=o:-p0}S>~7#rY;@:DTRS1]93+1L2J<hsH');
 define('LOGGED_IN_SALT',   ',z&wnzASDxH6#|e.7odTN4UYWpUbx8:Xwx{#9=;Ya*|1ZIK>Rl6Xq/7jqVo@p-j|');
 define('NONCE_SALT',       'M-^$;E| 8tw.=-^8_);sZToIV$8-OBSfn1Iboeu&#e;x.^XhX|)oU|F @(Gyq3H ');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'lajihasn5_';

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
