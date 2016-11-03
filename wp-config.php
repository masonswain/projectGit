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
define('DB_NAME', 'wordPress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'mysql');

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
define('AUTH_KEY',         'QCm576)G17d K)vjajFBX}b^J{yE~~1x##Qg0U1z{-<y?HeClzi.2$nm$e6E=Z[r');
define('SECURE_AUTH_KEY',  'ia+=.o=`Pww{<tr_L62L9tsjz{q8~O=E(84+[,yioC=NR?--.SfXsfwAX2ro/rU[');
define('LOGGED_IN_KEY',    '3Azc!+r&BA!YE ~>w?!F:x]y7[Mv+j2vWPfRs)^/6>]e*Y_IWux4_M.~/~(kCM3z');
define('NONCE_KEY',        's*^) ~NAfH(?BY{f~T<N+pf[.gkNQ~!5gWwAx6E?jq#-CV`@`r$>znT1bs:Lj+gH');
define('AUTH_SALT',        '<vk`#+8aHx)Y;pX6.,nA5X9zwb?>-CpLEuE#9.^n79bA!<d A.oq$t/PLBdKggm<');
define('SECURE_AUTH_SALT', 'q4j:K _xo;5ButzqmR(JeL{6T3&afuJhrxHr$%tmD@{a!T(iK<Y[lv@/t.(ZjIh6');
define('LOGGED_IN_SALT',   'fC}|[ _[M](}BR;~qd9p{YS28nVH_pXcq!%2SG_|xM+8YXA>r**[oX0`Kp d8:3B');
define('NONCE_SALT',       'EoQ<rHB2y;c5N)aT]oi`vpzr+Yb;j /ydEIb}!1q}Wj.2L1zYNdLfbC{$eh.wnb=');

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
