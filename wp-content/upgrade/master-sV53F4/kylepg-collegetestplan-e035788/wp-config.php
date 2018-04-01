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
define('DB_NAME', 'collegetestplan');

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
define('AUTH_KEY',         'r)*%gOXmt{@z5fq1f)Pn8O?w#]0Uw&#q[8Mn`A5m(X_#aYW;.Hw4lm{aHNBAep*O');
define('SECURE_AUTH_KEY',  '[ !o]?4Zn+)az-&?E_?<*ZylQ]W*W%i:.mL6?B2ku:NVr`;3}~ k]|n)a)2`jp6b');
define('LOGGED_IN_KEY',    'm[$f8)c62;tuC/ET,yY!=J?np!f4:-kgq=k{_CL4CJva UX4]:rx+@t{kv}( _Qf');
define('NONCE_KEY',        'z3VDdY[9?U= rXtFPkF^4~^zB37}z +jKcP_>Sze#Fb.YtjCkN_oC9A/ oZfalG|');
define('AUTH_SALT',        'f,O|TEV9=#xza4dX3As/U,Ho}^`Kr%H_QL%3YYGEMM7AU]#rC:1GcB tnTU>3RiR');
define('SECURE_AUTH_SALT', '(+>QMf]Od0k&]iy17<SyTSR_52R#}|w5b:Gf>2nL${6s]pjxv_,rxDR9xcZ3Mzo^');
define('LOGGED_IN_SALT',   'Jlu-4m?FG+`D|TrIfA$X_(a1]}DbJB%e0-e5O s},_y&ql-L >1L8c!DK Mlm[q#');
define('NONCE_SALT',       '~7yBK(JI`vD0l,u!T$},;Z(tpWc+Vd5Utu3LqU<T+fbP*Kh<=SIsKrCx!N@5t0i9');

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
