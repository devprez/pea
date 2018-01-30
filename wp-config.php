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
define('DB_NAME', 'pea-wp');

/** MySQL database username */
define('DB_USER', 'esports');

/** MySQL database password */
define('DB_PASSWORD', '5andwiches2');

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
define('AUTH_KEY',         'B=O[,>^kKS#U@xnBv=Tp{)Q?&c:2>bu3xi)&el/TesT$t!e`YbB`9Q.%W8h)tJ=a');
define('SECURE_AUTH_KEY',  '`otd(c,IJ>c+)q:GW?k%8rrl<oAdG$!X%&rKfxA$Peb&3z!p~T#B4jD1jH1Z>;jI');
define('LOGGED_IN_KEY',    'k8x5ah3]Fe/!rG|?ArY,l.ie~m(7_%.9><cr~#6]>]zBJRph:Bb;J=rywGJZG(@)');
define('NONCE_KEY',        '*^LKFi<rP#lP[K8YtH_:@>z$ZE6#x[8GMTH$}Pk|b-x7@[5ox8_N{1xqoYD1H)c2');
define('AUTH_SALT',        'H?q6n}dst*#65ZFwo:JXH5YCoL2<?}} L/UE>2^SP9Ql|(1_%xxIa@u=-Lji,avY');
define('SECURE_AUTH_SALT', '!esOE;D8x 2OM|mX<wJO>^S&Q<eXrdqnAR{,4kEo glu{>{xx-i&+Rd/`:ZQt92&');
define('LOGGED_IN_SALT',   'fPQPF|J_Bz,rilh;VW,!)EO=h[iR,~S>>p6~6%zEctVnzL4Yz/O[JeD)H$)<~Sm2');
define('NONCE_SALT',       'yY3}psKx8{U:4 (P,_^0;Yv#g8U_(qk.E}f?ujdH,E<dXtb~Cw+=%-U3em!OvAKb');

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
