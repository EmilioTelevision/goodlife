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
define('DB_NAME', 'glife');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         '5+mvn,!PA!3wt) HUhZ*99W`KW$Fdb78Ndo8G`u;z~hPy2f-s *Z-uq.]|ya8X>k');
define('SECURE_AUTH_KEY',  ' q#nX<DHLOT3DyZeb#mDc*tDu%g^M7]%`&7$sxmSp?<w;KofPpHFYT|EKY`U~eou');
define('LOGGED_IN_KEY',    '?GPOxzzNMjiWwp|gRpN]Xbjhfp=Z/ak7n|HDl6=eJ6%Tc#e3[${7^hQX(8q0T-UI');
define('NONCE_KEY',        'CW(^s:,;/S=:rNpHP1=mCo=^zcx~UOg.JWLTR@%YA-<Mikv@KXMv@6FEs7U)`nJC');
define('AUTH_SALT',        '|rjSB26W}|ET~CD>y-.`*p-q[g#}2DM@/&||`-}#xwG(1-[rMCpw!88g!Hx(5.nh');
define('SECURE_AUTH_SALT', ' c1OP9UC4&i`HeUJ}<pW>|z;&bsc1*:K-c38q[M$u{yuEA*gJqkKsbjLsj08GfD~');
define('LOGGED_IN_SALT',   '8>nTH|BPq&(>%>d7qhwSu}kj/3z~MC63 [2 466-S,1*yj}Z!jsX&)c?e1?rJQaL');
define('NONCE_SALT',       'dtt&#{+(9L/IoVo-*JD8/:CuXo92<W2QUk*S+%6u}g=Qdnt.Kvs:?4P{bdj,#9G;');

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
