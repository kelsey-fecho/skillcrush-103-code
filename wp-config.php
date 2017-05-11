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
define('DB_NAME', 'wordpress');

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
define('AUTH_KEY',         'L6CB4~{F*R0do{vo$%S_`t2B_@i~xd {9sOMilXf^);JF<KQMNqzw^B%dYD9|Rd#');
define('SECURE_AUTH_KEY',  'AJq%ZRZPn0H=^t%_)-}jHLiS1uUyC[LQd0Zw:ynW(Dq0bTI$BzE=vxlpUTX{&pHR');
define('LOGGED_IN_KEY',    '|F/mvw)eFBFRF,{R{7aDD.1yEc=4QNTF;!-)t/CuqsE1$9^^3rAVA&7^=T9 }e~K');
define('NONCE_KEY',        'V49k=Gcs3X{i.Jul8x{y3.>i;n$W}dZ/3z_W,lFY u/pB,vg}A%H}[,`)*Uo)q40');
define('AUTH_SALT',        'fUz+8EIUb~xkr)-jzS|{ vDT`,}$g6gm]mg;5)1>-9D{54Q_Gc$r$QS|&ch.<kO&');
define('SECURE_AUTH_SALT', '7ex3@3sqnpquW_y(!D#%12R_9<s<R#NVG}B;wUWeWT[Vn>58mQ`0Wx10dOAgkssL');
define('LOGGED_IN_SALT',   'y9TNu1OC+ZgM!1Y)H8kP~[7_]Z8%|%7cOE-Mr]IY~Dm=f{I.?s*~.z9NUsHn#d+e');
define('NONCE_SALT',       'A1p]CAE.A]~O/XecUV;e{s0Vg#&-G](+K2zxRDv7cm?JMgUw_`Rt;=fNSK9E8v19');

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
