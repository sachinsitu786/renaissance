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
define('DB_NAME', 'acropoli_sachin_renaissance');

/** MySQL database username */
define('DB_USER', 'acropoli_sachin');

/** MySQL database password */
define('DB_PASSWORD', 'Admin@123#');

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
define('AUTH_KEY',         'RqkNhyhi$>rP8)aQd)Jy1| @1y$H%YNExCI,{T~s{g%cte<E:696J+Id$2zqD=-%');
define('SECURE_AUTH_KEY',  'HHh2:TqtZs66z-2eWsnN_G@0TTMx5My#9% {5X|.yS5p0qxV!MW4TeT*QfYr(<E.');
define('LOGGED_IN_KEY',    'y&?}WLb|;/<;t91x<l%:ahwhFzTb]m}e2!{)kmpa;5Zu6OdB!1OGamwQV1WI:17^');
define('NONCE_KEY',        'CnXVccy#c[&4&6]gT9(``h,nHw^2$!#Tos@l4UAInH)1;Ui]#Q@W1Eni!K-/^Nty');
define('AUTH_SALT',        'b>Z0W5+!a`:8r:sy`=Zzyu1|OCf8su:v&81E4ND,/B2Qe((iZ)z%xmeaxX6@P`H^');
define('SECURE_AUTH_SALT', 'V~k4,myzGkTH!D0avJ_k]mP{*XA{IAvO@.CSOg.A^EmRd:I)Fo^O`y+!UTE/%c7e');
define('LOGGED_IN_SALT',   ',=?3HK2$jq[7/oPnZxyEW-YI>B$Dhu0z[35wQY;5?CPyoxnlKskzzvLz;J14yYVY');
define('NONCE_SALT',       '(cb-q1ttaOCn?hx;5Vk!+=Kvwu?SH:KYy^7!x]jCCem[nRKzEB{n557Ymj*F;j1m');

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
