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
define('DB_NAME', 'portfolio');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'youpla-Boum?');

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
define('AUTH_KEY',         'dP9W,W$~>/+4CEO:-9T5(Bb+JR(E&oY<`n^yPdw-BsAa?:<uxS0d/}=#B%hDV_v$');
define('SECURE_AUTH_KEY',  'W]css#*(E_Y^wiU0y.l8s:R$!e~XLeBfU0]Yeciu|!}<eT)k>^d&aX=-vZuKV(2l');
define('LOGGED_IN_KEY',    '2(`Z!IX#mz$0rT+nPq2Ldnb6g03z>MGx~m=<;2}wVT.#U2 JUk`!/,}iSCNd+Otw');
define('NONCE_KEY',        '07hp|1SwD>:H+>m^-a+/:v6dSD9ZHx+w kqU_|[}0u9AL?$bS2e6F)B+Rna.&&8F');
define('AUTH_SALT',        'SM+KMFZZaU=|i,+)>`M-_U~uOS&DA]RPOds$dDc30g-P?-TsF6]+>]HMX. 2N`t5');
define('SECURE_AUTH_SALT', '~dS8-gk@) L(ENq-hK7tH0fzif|<];u$U]0FqKu:XAw9QJ9FUdYnTbl2yg+(f96C');
define('LOGGED_IN_SALT',   'k<48Oq0-PjhgxS#G(^rV+^$%~v0)r@ hB$ 6 V[Pn_xSVC$9;Q?%2XrR7rAt#N o');
define('NONCE_SALT',       '<+O:h(,G3^D0hw)b{9jdg-.6G}Eq^,Ua38 R<&9aN4k):dzyO-Q7Gx7h<+;;%u*Q');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'ptf_';

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

define('WPCF7_LOAD_JS', false);
define('WPCF7_LOAD_CSS', false);