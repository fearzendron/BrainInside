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
define('DB_NAME', 'braininside');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         '4O<nWPC~zCd@JR_t_8!})/[w3M2FS]cZcY|A]F$T31{19h|c{Wu;[n|>lEA`/yow');
define('SECURE_AUTH_KEY',  '+r8%|ypC%~!Z9vYgEs2HCH+_h#y0@-*$rR>zN+UQdMHK=0ib7|ZM:(<IPNpcqw|W');
define('LOGGED_IN_KEY',    'OCV.o]E@F*h6*De$Sr4NB5Y4M@C%-gLzec|$T0dlxSg>FW)){EitsK+;z5n#xMgB');
define('NONCE_KEY',        'NxQXd&$L||@KMJSahM/t{skIi$ZO x&beYFtM+DTe?-!]UkX;~c8Vp#.E|M#V_kz');
define('AUTH_SALT',        'KT1mt2q]+6|LHS.(vVuNJ!J[vdv#L}qf4u)/rb,q#s$/>jYqt okBS@OqI~7.6:n');
define('SECURE_AUTH_SALT', ';?+W=G#_xc+nF<0/s_q,Wzgff[);rXc|LYTg+&%WSI=&|>?o(y]{N|{(ES_#e(C$');
define('LOGGED_IN_SALT',   '[Mu-`|><)X@Q#j)zB_N>#+-vv@e$Dv+-,a2!<W6(N$bX|6~^]4x%[,!7vUcfXHdA');
define('NONCE_SALT',       '}4=!e4?q`yelur&@gQ)i+0Qd8EOqLa(sUhicX5j,g(Ii8$+BHS+:9a=RbMhJ8Ewn');

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
 * Change this to localize WordPress.  A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de.mo to wp-content/languages and set WPLANG to 'de' to enable German
 * language support.
 */
define ('WPLANG', '');

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
