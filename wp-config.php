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
define('DB_PASSWORD', '123456');

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
define('AUTH_KEY',         '*bm {WZ]3i+9MD^[eH>q9Y5)Znoa1tT{|ui|.L_0RD/szh$tQR2Y[1#@*IC{]%|t');
define('SECURE_AUTH_KEY',  'j#J:0jX+U!Jb39<|1&`SId;,.29MwZNv0&8O*,~+(yglU@HF 6;nY(t_gT <7i*>');
define('LOGGED_IN_KEY',    '12AVKk>!*`h0Zo]9o1N>{!eR~0$jbflzV8NikLNhey6qej]*lL!Rk[m*Iiqu??l$');
define('NONCE_KEY',        'ZqEvER7jN`l6s} .Lm7_;.QImpS_?t.e7V;FBJ1egR_!G6!R`.=B-/p`htLlBq,*');
define('AUTH_SALT',        'xXyMusm!^5B@{tUJs5jJ9_&7/~vSY;%JZ_|kD?0al3gi4X,|qN}XSIQUu=l,bqlb');
define('SECURE_AUTH_SALT', 'zg6E#YDp*@|vqu50a>dVRL,]$tUYgrTad:{i8>W Db-=3T&80W>}*SSs*9^sqNlp');
define('LOGGED_IN_SALT',   '2s2Pr75}}-b(uc,p?SjnH|s*otv[j7^1b@`q,h7](1*]ci00S8.|4WYM[] U?i!I');
define('NONCE_SALT',       'RX u9gIhmhS7i;1Ih~k6?Z0WpP$c=z :v<]Y`YUbNee~+2HLu60MP$`^{(Y7m?X:');

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
