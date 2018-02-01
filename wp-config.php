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
define('DB_NAME', 'woawstore');

/** MySQL database username */
define('DB_USER', 'woawstore');

/** MySQL database password */
define('DB_PASSWORD', 'XSW2cde3');

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
define('AUTH_KEY',         '~h.}oEw+1Db=%;cloFOw5M/V$4dN!t[0b)O:5jzY.YZq}}Z[3XH/Pg+*W>?WpEa#');
define('SECURE_AUTH_KEY',  '-0k18Wrnbu6d>xhsejX.X/t;xfVZEzeU kmMB1zG[.> LVyN<CQ&<QLR9#e{2@iK');
define('LOGGED_IN_KEY',    'j7}*[07Z=Cl[xtENwr[}~@r@B3!HhqBy2Z<t+#:C&oheJeZ*{;NV|QNy)|Q=B f@');
define('NONCE_KEY',        '~f`d3@d7}k5f0n24fG z^YjEL*MjIqw>JC5Hy(}A`<=Ab4Z{RKb.G-fY(~=sY~<o');
define('AUTH_SALT',        ' g,U0nnjG|&xf:.fBZb):[!~VwI3]llfPKF}Y#k3Sf|c6&?A,N%dLi+5OH ztrVh');
define('SECURE_AUTH_SALT', '<>VW((9O}e6Mp[nXQ0By:gW!7n8G8<T)Ep&R.Y,vGzj+c%lKj5f6#nZXyV6^>B&z');
define('LOGGED_IN_SALT',   'c]gp?>P(0~?>(wLtq19Xt[~C~[(4 GLnG4,#|6T7bD)lz30m&e ;0|WT:q;314G5');
define('NONCE_SALT',       ':*Qrt_k+a(P:y~)z;lPy[J,JJk6a8v9^y3RqsxH]|>C$)tGr3GBrG &<cn~hIwQF');

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
