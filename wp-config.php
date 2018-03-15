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
define('DB_NAME', 'nhuhoa');

/** MySQL database username */
define('DB_USER', 'nhuhoa');

/** MySQL database password */
define('DB_PASSWORD', 'tianangyy');

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
define('AUTH_KEY',         'tAuxuHQnTB0L{@/F8zLBh/f$c,p7,}dR$gGY>`%K|se7}0v2V.VjcZ%sWy7h^1=?');
define('SECURE_AUTH_KEY',  'lj5j+?Qk|`XM-nq$dm~z`/T(j]H7#8Wj^a}Dl-8?E&Xc)*XrUYN^h+W$tU@8^&ox');
define('LOGGED_IN_KEY',    '}gW|2%*nOnkeZUVC[XP2fXA_Te_!oIzO<dgH4^2X{sfH`vFg+21K;ijsM8cebS4~');
define('NONCE_KEY',        '=qnq&/i(/~aFB%UZx[x>}4NhW;?g3xzXtY)0|syGq}Cs&)8xnhRmva)+#S3EydUf');
define('AUTH_SALT',        'Ur;!%h$kb^VI#RO10%m1P9.E[]X/~_|,*YbYy-%YE< ujtTm.A$8lbUUEm]T,FPl');
define('SECURE_AUTH_SALT', 'aQ(@#TdXi(A+0D_Q</[dfby  H2=B/:yCl~^f#.~MC9lre-N2b8WA }]`vArBa3E');
define('LOGGED_IN_SALT',   'hGbCZ)DVT[[^DFygIMb!L8Y2~Yw^kd:Q&+K+qknN2ruJ.vcC&ta,F?0Yjcb`$v7d');
define('NONCE_SALT',       'rvi]k83V0e~Y?J*;+^{4&9nA^H:DGk{qsSa&4p{|I|?8VQ]}CcUq0yD;!6GD9c%a');

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
