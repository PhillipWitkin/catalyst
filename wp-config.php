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
define('DB_NAME', 'oldwest5_wo1413');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'jMvlbI-QKBv41K5x^wut%-(M$a%Nc_h+bU-;Er@})a.phN]-)%oHP]xW YR=HSV[');
define('SECURE_AUTH_KEY',  'X%HO;K`cG*56-7q}worOwY|!y#}o!TEB38<H{t^JbT$x{:c6AGC:0-{Eu;~-r9&K');
define('LOGGED_IN_KEY',    'O>zgp?QE?Rq<:{b#NKaSOUFkCwE`4rj1](Oo:kLA0f!V(4#BKx`R|>NDpBQ_|H->');
define('NONCE_KEY',        ':X2G-5@<EuHI+dS*Th}?ppC2jMI=,fBa5w}qQuy5~P8+r`uoOk3nz8+[X>VfxFXk');
define('AUTH_SALT',        'kHQ1;mIxgMDKwX8=0}+S^Qi(r)CH/$-2B+nAhxUD_g1eODtYgV}!^8`9J/Tj`FIN');
define('SECURE_AUTH_SALT', 'HsACQG$5q2lv]Ey&WH/5(AIhlokW^mi9/74(;6I[QS6Xr<`cZAtD%LA-Eg*iEfW^');
define('LOGGED_IN_SALT',   'Xp%_oo~Pi?udc/9|)-`1@9+UXhl]ysGLC/muU>9%R9S.mn9V+kVGbXW5wbqIawH<');
define('NONCE_SALT',       '3>s4nB?p Utzwz0.E&/e9r?`b%~G>`Af]OXeu>X[7R,PKo~Z-.`Siy*$Mh?<!DXn');

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
