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
define('DB_NAME', 'phongkham');

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
define('AUTH_KEY',         'lm)c*7qw wN(,}-ed7aCKoINIm-S-[]q3HH:iJ`9SJOIvr+)%nS>foH_91+6$PO-');
define('SECURE_AUTH_KEY',  'ns-]YS= Cn80;Y:KExHc K<)79OEdYv|l~Hx+K$dn;cU#zEZp|8W+?F1uSXW?TD}');
define('LOGGED_IN_KEY',    '1_+-u81>+G;2d7#hW{CQq(Ic?{w]:u~%Eiq}82cbv]=aeL3=-[CKqIVN fUezR7*');
define('NONCE_KEY',        'B>keVyiF+zLr.0](KBpnq!1fjhXe>9J~M96X?QbdiEed//w?I,zJE{I6r$yc Lbn');
define('AUTH_SALT',        ':<<P36N6@lQl+4nca7rp7I`:pHm50Xe;||Sfx%-8%spY{&nBwHoY*f+&.^bd5jh5');
define('SECURE_AUTH_SALT', '&%}?#r~Q:##jh_09]}$.bc;k*0@x| _sh-@9R@NWpXkQhzJHk^QNKk$vF70k9+wK');
define('LOGGED_IN_SALT',   's[EZ+Yn;J]aj>b,%w8rF|yWX]Wljxw!FzQ-H a|: gW,ApwMQ8%VVtDzb|$F3[h)');
define('NONCE_SALT',       'iTZ-L~N|iH <A+M+$*$4T7#eUh?k*u-(cB4_b6~_f)zho9p2H)P^L.EMIG4Wup!g');

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
require_once(ABSPATH . 'wp-settings.php');
