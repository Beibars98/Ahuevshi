<?php
define('WP_AUTO_UPDATE_CORE', false);// Эта настройка определена WordPress Toolkit, и она запрещает автоматические обновления WordPress. Не изменяйте ее во избежание конфликтов с функцией автообновления WordPress Toolkit.
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
define('DB_NAME', 'p-2239_wordpress_8');

/** MySQL database username */
define('DB_USER', 'p-223_wordpres_x');

/** MySQL database password */
define('DB_PASSWORD', 'nOp1$m9AH4');

/** MySQL hostname */
define('DB_HOST', 'localhost:3306');

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
define('AUTH_KEY', 'j@DQc9z[&_W1cT|@tza532bg!o9b8]dA41-4CnUUtn%+@zR_R6;)4~8EZ6;Yy5h&');
define('SECURE_AUTH_KEY', 'X89H-6gVO4mVzGZd33vwv3#jP+(s]*i8614;yJaRfHI~Y4Vv;!L~fV;CK;H)K4wV');
define('LOGGED_IN_KEY', ':N5t0w(9&2*e|04|6dN9~p@Yr@oDDN4h~@k!M42*DQn8Wq[)wU75ton55(SUOCnR');
define('NONCE_KEY', 'jBJ41nT8zf@k)b@jEH|U]dra3d@%9#gyQyaJX5R#ilq%3)(0bww2817lQc#v)wN@');
define('AUTH_SALT', ')Xw1+bQmlw3Q!;;9d|%v4LY5l2!Ll80A~v2*g5v36WH511q#3EzxZ:e*gB4M8Kw1');
define('SECURE_AUTH_SALT', '2Y910TWFLNcM:U60r88(351SP#30ZQ]O+dh/G&i*|&W7Yq5[4y_0+&zukoh&z6#;');
define('LOGGED_IN_SALT', 'm4]v~2dC9Y3;161!729n_K&A5f]4NleEN9nt2Ev!H&32P4nW3Ru1US+++7O0j:M-');
define('NONCE_SALT', 'gHu4-zz/&v4c&~04dOE1m@;]CoM!2666_B%uO(]dYTGp14tK@LiC7JiV3964NCv5');

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
