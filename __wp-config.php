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
define('AUTH_KEY',         'mADJ-iv &T{-`sE#nKuz64Ak/Vt9T=b2|/Lg4jVX_@<gJiG3J7vHEI:<C-Cm 5G{');
define('SECURE_AUTH_KEY',  'h`qz.wUi}WSHr5q)~&@-V/?W+ScIK~ZK{[c:b1N)FlOiCSuw+ovybV-J-hd;(L7$');
define('LOGGED_IN_KEY',    ':C$~Cux)32jeHUO%b94_/BV<I}|Pgn5*-#|s&pxR?.#Mj|V;/)((ozZC(|~?%jK}');
define('NONCE_KEY',        'Tx)N[x-OQ@J%% L+,`?~@c!!gvs}S5D)&On#3ywZMX@qUiVIw=b:dzE+q1SQdd+L');
define('AUTH_SALT',        '%/bmp?}D|E|cr#%+/[gGxrI2in]Ff0@JO$8nn@~[v]KydcDDumD^l*>3^8{u`gPB');
define('SECURE_AUTH_SALT', 'BNk__.@9UwH17{3)1zeT)GW/0lHgAV?w|Xqqd2?*;Fa[6~ivi7eUj1:)Q>QPaxb)');
define('LOGGED_IN_SALT',   'Q9}S2;(dDon|i[0w{E<-<H]HM<:(Vql|/r -~CIIn|^Nc4-&!K8dYJZ#L!-xV^![');
define('NONCE_SALT',       'k_?xF:&4KVW1!{Pp6hV(*Ko/Fxr|0iSR_bQkXa,`hBXI[^.})CC&61+,cK ^KD2^');

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
