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
define('DB_NAME', 'themedevDBp0nty');

/** MySQL database username */
define('DB_USER', 'themedevDBp0nty');

/** MySQL database password */
define('DB_PASSWORD', 'D5DJgmrxpu');

/** MySQL hostname */
define('DB_HOST', '127.0.0.1');

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
define('AUTH_KEY',         'V[5~#|:CN08ksZgg@-do0z!RBJv@gknUc>0z^@|ovCJ}08!>VcFNYfIQ$,rrybj7');
define('SECURE_AUTH_KEY',  '*.2{6*<TAHHP2AmWe]2~##;x~O1929_;aiLSSaDt+els-dp5D#::5~OV9G9G]5hpS');
define('LOGGED_IN_KEY',    'gNU,n}8![>0@JR4CJYgjrUc>y^@gn4B,}07^>UcJQXAIu$frqybj7^<,nvBI{33');
define('NONCE_KEY',        'u*iuAI{26*<T2AmuXffmT*<qyaiOW_]t++hp5D#2]2+.PW9HL;6ip1-__919_5Dpx');
define('AUTH_SALT',        'ptWd:5~[1-!OVCKKR4CoVdVdKR~ho5C[08!>VcJRRYBJv@gckNV![s@@|ovG[07F>');
define('SECURE_AUTH_SALT', '$>UBIIQjqyb{2$.<;y*L2A3A.{bjMy^mt+em2A<;;6*#W9HAH{2emTbaiLT.muWd');
define('LOGGED_IN_SALT',   'KW#px![w8|:ZhCs-dllsZ|:w~|0z!NV8GF}4goRcVdGN-!kowZg:4@|07^>UcFNQ3');
define('NONCE_SALT',       'vF>44B,UcFNUbEQ$,nvybj7,{,}yFM77F>3fnQbfMT^<u$$.m6E<<y^QXAII');

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
define('WP_DEBUG', false);define('FS_METHOD', 'direct');

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
