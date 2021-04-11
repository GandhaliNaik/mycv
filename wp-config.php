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
define( 'DB_NAME', 'myportfolio' );

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
define( 'AUTH_KEY',         '$K+&?eo-V< >V>76yzsoJ1_xX7F;RF]FeBro0pCumxK{r;grQ%4RNwd^Oa_DZ)GN' );
define( 'SECURE_AUTH_KEY',  'UqXIOn%WI_5R$[iYx.MZ%-{X.:_.S,V&q&At?euZ =DdVI.6.`&J9~B^#;i8=]$~' );
define( 'LOGGED_IN_KEY',    'B5.rjG[>1-G6a`J)^wKAm,X6pA,|22,8[r;H7%|U+s<Z-u!yB_t5c%6L{S29+ahR' );
define( 'NONCE_KEY',        ' fk=.CeI%h{xGM/0w:1IGT0|[ ];ZXdK4UfPf,x*+ ,htsBQ>#xBjzOf5Ic~ToDw' );
define( 'AUTH_SALT',        'x!Wh5{x]R&sz;!Jo5m({l^y$em[MAvSxB&onLBk;H>d63GrUB}Lv&1RkQ;L*$m#4' );
define( 'SECURE_AUTH_SALT', '`H9PgLocA//P!b3hiUY`p4F!FU]6HKOrEDSdKK1^]6Oj<VPeKu$6}2gO+9(pq1J[' );
define( 'LOGGED_IN_SALT',   'WvRvv/7T$|e/_={&Ym[(`c+tL* Zm4s>AJR]pup!}4IEw4x/~0AV_VmG>A{>E@b$' );
define( 'NONCE_SALT',       'RO~%n$76J/8},}%%*2Es)firRR)86b|xw}8LCS=?}y_abL0?ziOy_+*EXQ1F_FS6' );

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
