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
define('DB_NAME', 'cybrosolutionsDB');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'G4 +WyP%<IW0%g@!4&~$N,md/@4%TqF>b.6UPaTU[W-7xoge}HbM`L#:^:,3u9}@');
define('SECURE_AUTH_KEY',  ',8(H&~.{In<KA|ev0s1?nnzRXd:MtLV+tyz/58l?IF2cB4yc66Hb*4 #w[1_>c}D');
define('LOGGED_IN_KEY',    '.g&81#8UD[m{+G1R9VzW+tb$[ut]x[wnzC*)g4n* 4Z]VL3l([j|rEHs+p9nn+C_');
define('NONCE_KEY',        'B|sM, vOIrJO:G0`|l~h12,+/yc1BvT{2Ch<;I8:ek}C5G^{(j%}phi(`.NprzOS');
define('AUTH_SALT',        '4<&)2*o@%-j.7z3Gbk-X;-,o9inog53o1AX]RF^S@bbd>Q.F((^ZKEPxYxugjx|[');
define('SECURE_AUTH_SALT', '1WS7XaL:%;.O(u1dJ:WpiQ}x_8o&*5!1(s1fDHh|>~-;NJ-/AREnhJI=;2/d_&a7');
define('LOGGED_IN_SALT',   '2e]Glq0_exmRyexeI2BuOZu$|c_!^+:%vE+E,c<dixG{=(ip+AQvxO$v)AmY!{Lr');
define('NONCE_SALT',       'bp-zF6s{xk8/w:YX:_uTeZeTEm~I3$m{]XP /;lk+RK|%[o<}w?YIBrfsY4b4}7j');

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
