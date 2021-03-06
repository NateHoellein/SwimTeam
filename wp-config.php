<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'pinegate');

/** MySQL database username */
define('DB_USER', 'pgst');

/** MySQL database password */
define('DB_PASSWORD', 'PINEG@TE1');

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
define('AUTH_KEY',         '*KJu@U6?i@+zfnwI^l=V$yjhh+pw_;<oI(c:phh@_^>_(XaH`~G}|eE]L&oiU.0{');
define('SECURE_AUTH_KEY',  'F:U;PO<Q=Wqy)7;j{!L!0>+#z|Nh~c+w>KW*`ldPhfu+]NMtO,gUDWh&1@IbFy#_');
define('LOGGED_IN_KEY',    '>) (LhNRzAVBsi>n4^u7&Pl}e7l]|64KyfYT0|3bJ&lo`qg.Q%2Ov/Y#y:qr{3-O');
define('NONCE_KEY',        '7k[D3asI.9,}QmY-~d.HT5BkKP++_:-0-#VCam$Ii9-jVr?9eeZVNH@LqT=p/%(F');
define('AUTH_SALT',        'O#NG^`!]h#v`&2ipTUdL|tIbt9,h=[Y|O:e&KsllD O3:,|SSISFL8mj~vDgkW[~');
define('SECURE_AUTH_SALT', 'N-`U-R,xx]GFuy9QRn_`Vs^kZ#+ f!)Nk2N1Ptgx;<I|q~xxXhgUFc1o^<j,6%Q!');
define('LOGGED_IN_SALT',   'N+>):!,O6<FX_*]8H DnO.9RTJ!E}qPQBok2:7SfJp=@;o1bxk9,PICL/ti](7M%');
define('NONCE_SALT',       'Qj*`50fAz;)D$`iTT!J6.l@|,Ot,.31-$<4b/p8C<TQ,Y~|>pl3CmJp1mr!=!?Dn');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', true);
define('WP_DEBUG_LOG', true);
define('WP_DEBUG_DISPLAY', true);
define('SCRIPT_DEBUG', true);

// Disable display of errors and warnings 
// define('WP_DEBUG_DISPLAY', false);
// @ini_set('display_errors',0);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
define('FS_METHOD','direct');
