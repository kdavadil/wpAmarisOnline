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
define('DB_NAME', 'wpProject1');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'usbw');

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
define('AUTH_KEY',         'pZ02=$:9fk@G=nY*1y&@5}8,%^wr_O4`3--x/=hEbNS8e$-Ac;z~1>f!?gytMvNL');
define('SECURE_AUTH_KEY',  'aFrDR]l#o1x_6tE]2=G;%Z.X|M?_GhjG=5P&/.G#Uph3N/./5(U(Wg%;&1D{>JcS');
define('LOGGED_IN_KEY',    '_e>nhn>).ueSsH P8W*xHE-cPzPy6ZBT=ogL07G-1g.=~Pr%Z_|qd)&n7QNvF!`8');
define('NONCE_KEY',        '[JQ6/iprw/[4eLB$_Z}#Bz `#Qj%@mjyR~]!eR7{v2^>m|i1wQ}{H:^R,Zl8Y>iV');
define('AUTH_SALT',        'jOFW:+#iwK+|bTXU=dvc/smsJ(K 1>@_$|p1B~t1KMYn.U9l`${~&>aseTZT,(%E');
define('SECURE_AUTH_SALT', 'p6xz3Pzbr6*8&p0]{bmNfVd-Y]XGUwDm_{iSur g-vug|t,.bMR4tQFs~(,[ji-#');
define('LOGGED_IN_SALT',   '!U;mf *9 lamUl-6=/Pdr[3!@~dW7mU18mil#DOPxK{I[HW9?Iufn>8_/xZLi#>O');
define('NONCE_SALT',       '^T:/~{Pe&G`7),?VrP9TS_!{MrfpCDYSoE?1ji]ad[oion&tI>+fbl;>3W)u}YX{');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_sample2';

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
