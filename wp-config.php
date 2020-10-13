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
define('DB_NAME', 'wp_data');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'leFk6e0[lX;{1LYTUn?BvFr_a+q}o|U,;Xk^O}8~{$_X-.U*!JC %b$&|^OV;7a/');
define('SECURE_AUTH_KEY',  'x5V[knXMtqk#6*JHd~@GU:Q/lKfU2Na)%=]<v,r@MV.5-m20mc6N]vcv}%W#5J^z');
define('LOGGED_IN_KEY',    'VAF#xoyH97!Rrwmi@#AUo4_(Ep75T4sgq}=rTa6WM=]5jd7SYy.dQ}3b(hrIoGYU');
define('NONCE_KEY',        '_E-{JQaP.*va/y@dk =D?C@YSMC<-$z$V!;]~zY;D$&G0(K<Og<:CR .{2~,>E}H');
define('AUTH_SALT',        'c]rteone8nFBi;%ZLV)=-.I8v*.b*q+i Swzb$TCv%H/qej$u0KCoxh4XJnKT&_M');
define('SECURE_AUTH_SALT', 'JxnPpT3]j`|]VOC9v>>F8EPa#w)]m+-Nv8~c2qM#3:PBlQKm:&T00-X+<nlbA~>_');
define('LOGGED_IN_SALT',   'Bz4 B5YVWQH|Rp.gKUIGw+Qx73<mGXDj{s@:w}[},$jVR.`k#$`r/[Hux7LJ4nEc');
define('NONCE_SALT',       'w$CptRU1g+?^A?SWVPh) FcP.{Ugz@TQW]icJe+fLa1g|&%_4<>rW>sW:Z_id77_');

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
