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
define('DB_NAME', 'test-wordpress');

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
define('AUTH_KEY',         '/sb`{1~}5FXh5w&+SVdaT2Ng9I9.48aVxC$V{S(k,g&O1H=I[fsyYSH!U)v//]e6');
define('SECURE_AUTH_KEY',  'p?dmBu?Xe;~-s<LxuS%j?P~SU!|O57[T?6&Ux^Y.h-y27u/$$?]Mv><+zx/7UO?O');
define('LOGGED_IN_KEY',    'BHl)MMEp*iE1*G1f*h.v@q?R/MLcw7k8#B<N&zO]l=`E KPysW[sP^h-F3)N:x6N');
define('NONCE_KEY',        'X<@Bvw!::38VFS+/U|Xr0Q*XFD(/W`>yN mN5X&{C+stvZJ@y*p:E=T&Q2[QnS6w');
define('AUTH_SALT',        ' CloU@@]KOeG+X<#9b:1Ah*Jo9~Iw/B!sz(`7XR$9woh=C>+*u%1Lex7#^^ iT]D');
define('SECURE_AUTH_SALT', 'W8*K(3T?m&It:RH7IbmaY(vyTty<rH/).p7n[(z7Nc=Z<#%,QgT?DK9ufJPX&Ge1');
define('LOGGED_IN_SALT',   '=~v1%:xU]-(=|64ZjC<PEL}h*-V2zcKHzOQC&R=,fJ hZ@j6[-_F&*4B[@4~~jJI');
define('NONCE_SALT',       'xY!xZbmBJRG=!u1_4HDeYk*>S5]~/vbD2XE>FN2;]<FgB?>dc%ftoQU;Y|6!IG~Z');

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
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
