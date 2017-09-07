define('AUTH_KEY',         'dx_]y+l|>*.t*BvdeNcraC~CHuCph}ljV?gU-)p/Q+&]nkRu/(c p(CZv|+~D35%');
define('SECURE_AUTH_KEY',  'eE1_)?X[f=Ax>l]c=#TR_mq;Nu6id9c2gT+~8PmPa|fk1;z[z4,,<.9DZ4||-h;o');
define('LOGGED_IN_KEY',    'wH`yfH8$E;&u`y,tV<(Io+-[PhQ/,M@:=t4}9*~ZC[k|F$,|u[5UOC=#`qwQ}Lau');
define('NONCE_KEY',        'ZC0+O?.k4`>u+S(1:H0CjkB]Vc$@)AqwAgT>n@og{lj8G|1[GB.+^NEmq@mY?+s`');
define('AUTH_SALT',        'U~,6;)HcvLX`m;KJQ^|E-;I|Iu.(.yT`y@a4x8U!SEX|-]{hwN5Q@=RQebiB=SR4');
define('SECURE_AUTH_SALT', '7]-t40E=$QzhmMj{4F+KE!,~/=k7.<Cd^dkZoB!Rnh&eeep!a~^jIWNRLly!g0&u');
define('LOGGED_IN_SALT',   ' M]B$0OVZuS0gGWt;K?ZhOjG-j:) z$hZ(@&+//c&G@^}}oTB)CJ8@H?lzgMil;q');
define('NONCE_SALT',       '/HBFi+`--B7||zd7Pbvq6Zf7;V)SXH_Czx7UPDVvv!3ehb_e*CbyKW|4h{^PX73l');define('AUTH_KEY',         'dx_]y+l|>*.t*BvdeNcraC~CHuCph}ljV?gU-)p/Q+&]nkRu/(c p(CZv|+~D35%');
define('SECURE_AUTH_KEY',  'eE1_)?X[f=Ax>l]c=#TR_mq;Nu6id9c2gT+~8PmPa|fk1;z[z4,,<.9DZ4||-h;o');
define('LOGGED_IN_KEY',    'wH`yfH8$E;&u`y,tV<(Io+-[PhQ/,M@:=t4}9*~ZC[k|F$,|u[5UOC=#`qwQ}Lau');
define('NONCE_KEY',        'ZC0+O?.k4`>u+S(1:H0CjkB]Vc$@)AqwAgT>n@og{lj8G|1[GB.+^NEmq@mY?+s`');
define('AUTH_SALT',        'U~,6;)HcvLX`m;KJQ^|E-;I|Iu.(.yT`y@a4x8U!SEX|-]{hwN5Q@=RQebiB=SR4');
define('SECURE_AUTH_SALT', '7]-t40E=$QzhmMj{4F+KE!,~/=k7.<Cd^dkZoB!Rnh&eeep!a~^jIWNRLly!g0&u');
define('LOGGED_IN_SALT',   ' M]B$0OVZuS0gGWt;K?ZhOjG-j:) z$hZ(@&+//c&G@^}}oTB)CJ8@H?lzgMil;q');
define('NONCE_SALT',       '/HBFi+`--B7||zd7Pbvq6Zf7;V)SXH_Czx7UPDVvv!3ehb_e*CbyKW|4h{^PX73l');<?php
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
define('DB_NAME', 'database_name_here');

/** MySQL database username */
define('DB_USER', 'username_here');

/** MySQL database password */
define('DB_PASSWORD', 'password_here');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         'put your unique phrase here');
define('SECURE_AUTH_KEY',  'put your unique phrase here');
define('LOGGED_IN_KEY',    'put your unique phrase here');
define('NONCE_KEY',        'put your unique phrase here');
define('AUTH_SALT',        'put your unique phrase here');
define('SECURE_AUTH_SALT', 'put your unique phrase here');
define('LOGGED_IN_SALT',   'put your unique phrase here');
define('NONCE_SALT',       'put your unique phrase here');

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
