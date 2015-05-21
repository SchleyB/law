<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */

/** MySQL database username */

/** MySQL database password */

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

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
define('FS_METHOD', 'direct');
define('AUTH_KEY',         '.e<gGeUDg|$CcFtDL$T|2]OpO0R*<fBmD0FXvI>l5ZW 9*HH Z`!dOJH] 5%%i6K');
define('SECURE_AUTH_KEY',  '6QhmXa9jYLMf-A6w1C2+*$|dza]#+PKM[sz/tX8T,Hk![+[dj5*<&i3[/ B9110Q');
define('LOGGED_IN_KEY',    'lIs<KHzh0$EoY6PGABD4ChpW-R__/}{N;_)HfQ-P|k#2A4ua{KxL{r@IX:~%/.($');
define('NONCE_KEY',        '}U37-sA7rekfZ]G{DSj|s$#e%(X1#%8d.53+=p;|mL7W(@.cyr/K0/Jva.bUf(+E');
define('AUTH_SALT',        'gmcw)|R2rL#3)>|5:J(B;Vd2@wxL4Xm3WE`ux0?/c5g:Hp-Jv`MwgIV`wd{#,2u^');
define('SECURE_AUTH_SALT', 'o8i_E~Lt5iT%vBHKt>m 9x9V&?S7$qb9LY&2iHRQ%^pv,i}oFNEZZQZuhc%7>J@f');
define('LOGGED_IN_SALT',   '2ATMI:#hJYC]7 L{57{)E&ih&i-X/x+K1CgMbsHc/l<G&:/fx*`Hib:d<EE9-%T~');
define('NONCE_SALT',       'T&pC!Dm0%HW3[IfzcH{V8,WlvB+u>zBuxzAE>s:C/V/dLy(<<4g7lt;DFMA]g}!h');
define('DB_NAME', 'wordpress');
define('DB_USER', 'wordpress');
define('DB_PASSWORD', 'i2svRP2Fps');
require_once(ABSPATH . 'wp-settings.php');
