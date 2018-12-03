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
define('DB_NAME', 'news');

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
define('AUTH_KEY',         ' <J$gvVy7N~psl_Q.?_B3c.~6eT[_yMv6hZ!HYh)0*!7n>7_L;K{dajrfQ]*?w +');
define('SECURE_AUTH_KEY',  'L8bbzY]Lb+;6q C%}6I=|CR%U.&TZp4p%^o>uW93m|x%w1N$1r;`ky(K{,9B-MG!');
define('LOGGED_IN_KEY',    '5?[2AN),dWkC,&Gy$T4Uf#c+c}p1N*|%x|%~:Kv/=/JGk?#ctR>TuDmA=(s@1co7');
define('NONCE_KEY',        'r~e6*2.N?y<j95>n&}G8(+.7=6`:7}c<ummR?if_H2_d}HaiZ^Zw-qpRLIrPYp}-');
define('AUTH_SALT',        'yyKD>0H;zy3Ar`@?J&6g|-xLbLG|>m}B%ym]n2/]T{Ey2# #QiyBzwpD5VR0^asf');
define('SECURE_AUTH_SALT', '1(#1;]/xBNX`WmMiL0D1Wox[4G6<sW:QOLDi=nI.D~/[3bZc*~TJd6VzDWJ76C?J');
define('LOGGED_IN_SALT',   '-K(mo19niY_[fkXZ=iT$%%mpRAZ:5!uKiEm1|g1$gP/OkLCrUW4i)`{=2 $E2e]U');
define('NONCE_SALT',       '$w$Ikq,tqBjx`belOug!1|5~BBHM J0&[^c{U8V|x_vBIuh1|(2c%{UwIo3J)3-c');

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
