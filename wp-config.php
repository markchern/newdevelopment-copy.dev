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
define('DB_NAME', 'newdevelDBvek0b');

/** MySQL database username */
define('DB_USER', 'newdevelDBvek0b');

/** MySQL database password */
define('DB_PASSWORD', 'ovTVNnehHy');

/** MySQL hostname */
define('DB_HOST', '127.0.0.1');

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
define('AUTH_KEY',         'RrU!sGwd1!cJ@oC}gRA{jXM,uMB$mA{fQ,uB}cM^n7>f3^UBzjTDxmA;.#+pH6;ma');
define('SECURE_AUTH_KEY',  'a_sgV}!ZNCzogF4>gV}|zRF4kdR[~sK81odC0[hVK!wkG4[B>gU}^vNB3ynb3>fY');
define('LOGGED_IN_KEY',    'MyQBrb3>$;.xPD+qe6]*aS]+pH6tiW<+qI6uiX3.yXL.xmE2<eTG5[dS[~tK9:sh');
define('NONCE_KEY',        ']OD+pA;.aPE+qH6{peS]*WPD+qeRG4slZ1|dSG[@oK8:kZ1|-OD1pdS]~WKD_wlC1');
define('AUTH_SALT',        'U@k4[@VJ!sg8:sgV}@VJ8wkZMAynb<bQE.ymE3qfP<$MBncQ>zQF3ynE3,bQ>$r');
define('SECURE_AUTH_SALT', 'QvgU}^RF4sgV0|zRG,znF8}kYN|zmbT{^uMAqfT2<fTI*uiA2<YM,ynF3{jYM{^X');
define('LOGGED_IN_SALT',   'i<uTD2qa2.aLAqb3<bujI6{fT{*uMA:~tK9xla;_hVK_sK9:lZO*pH6]iW;.xWK9x');
define('NONCE_SALT',       '-8whG4[gVJ!wNC0hVK_wOD1pdS1|ZSG~oG5:YMFynF3>gUJ<$UI7vj7,UJ7vg8}!');

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
define('WP_DEBUG', false);define('FS_METHOD', 'direct');

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
