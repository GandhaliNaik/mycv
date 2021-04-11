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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'mycv_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '-}Z?d0R*f?X~bE~2xNA_NexjB%aA;be-vBw f(A4P=U<V(LkvC}rZhMxr7}/i`)S' );
define( 'SECURE_AUTH_KEY',  'z #E`abK Kg#7q Ao}R}5 =[Z@CKL==/5Den[J&G$qFv&d:H`~vOLu`1!-stdT}#' );
define( 'LOGGED_IN_KEY',    '+7,)<1GbL[eX~# [1;!O2 0u+c_Prf32P3-O8$dpe{wpRM&7XWF,p/$6EM?_,$gQ' );
define( 'NONCE_KEY',        'e?TAcsS|tM]<Ycy>+%4lM}oJ4=G>j|v8t6liR]FCDkyB[5^Iho:~=};ev,W7Wjj@' );
define( 'AUTH_SALT',        'J]qpnO^XnLqkj$/.}VAl8Fv^v,QCz0HLR^!x1|^RCI;wPgZ905mtBrlOq3$7FXk)' );
define( 'SECURE_AUTH_SALT', ';V{+xeN$u0pQ6|3SasWMAHxZ}R,37,DVX)/~6*c?h74:B}<<*h:]<AOs+i0K>n[d' );
define( 'LOGGED_IN_SALT',   '@|}%k,}h#B@R{N!|4^ZpdiLZ<KqhPT:eBZc?wHiT^f@2Avt#,*kF>ay+ra(-U6;s' );
define( 'NONCE_SALT',       ',O{5.kHPpJH[`)R>RLRG7~Z[:^imQ)=]Br<z:EdYt!9@za/O+&Y2G?^l8PQV>VAk' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
