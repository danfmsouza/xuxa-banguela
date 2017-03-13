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
define('DB_USER', 'wordpress');

/** MySQL database password */
define('DB_PASSWORD', 'wp_db_password');

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
define('AUTH_KEY',         'sZ~sOw&_ rk^y>L3Qq:9SZ$YSoot%1S4fLWjCA/$8EV*kU+3{Ghph:/]V=eK)/U;');
define('SECURE_AUTH_KEY',  '?Gpto,g0Pb$x@^qr0S?Sq*H`Q]CsIoT7m4T,[SF*yQnm&2;8C;|oh%Xv3P.}XUs9');
define('LOGGED_IN_KEY',    'cfhi$fP PB+12m-`X4aq89;{ ~=o=qLZ~VA,v[MZoeOuYb<yol+WzB%n.a<qs lg');
define('NONCE_KEY',        'W@:yFvE#_<j/{su08@zz][h`9n/(D6P/[:ZT{1{`fIOg`MAJr&?Sc~;rJQViJ-2Z');
define('AUTH_SALT',        '}^j9^2;dVQFJyT_1+xB_Pl/d_)%}.2,}G91t,OD%x)%M^~xW@&^Yo]pS~{{@EKpd');
define('SECURE_AUTH_SALT', 'IuA`|=+=L{_^[bu4S5}fBaSG4dP7>Fd1D,=`#FP7B#El gy8<+=YxyW6aapnC3T2');
define('LOGGED_IN_SALT',   '}ETlQBhe,s}W0![!!0k2cZw@-V A.-.8x`HY 7j;jdQ(=t~t>sw2INdi:~ogoD99');
define('NONCE_SALT',       '*w0)7LNZ.D,AE4Zhibtrm a> h }/8v`j=enj*?El|:VnjS9~2,H-M{r^4tF#WhB');

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

