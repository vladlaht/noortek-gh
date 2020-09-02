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
define('DB_NAME', 'noortek-booking');

/** MySQL database username */
define('DB_USER', 'vladlaht');

/** MySQL database password */
define('DB_PASSWORD', '3ThEkilysdnpt45l');

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
define('AUTH_KEY',         'HdTq8xJ6U?&^Tj$E~;5k-lioV p4O`h=7opawdBOtPMD2e+?UTr}KzRO$X Jo2(I');
define('SECURE_AUTH_KEY',  'Jjks]T}P<P&yb6/mPgvwy?y#cvb?(ls}KX|=qj`t<.o(kC`g)c.-&;6uX}ulEfj?');
define('LOGGED_IN_KEY',    'tqc4.DDaal(Z ^@ Eknb)]?@jqPT Q%l<8?mcSAy%?.YlLo-MhHF2;{2@@xs+GhF');
define('NONCE_KEY',        'M?q0]:J.f8zFj9ytv5bQ*Gk6|e/?,[R@XbA c0^RJyoz9{h3MTy,p(q?xz^e8L]2');
define('AUTH_SALT',        '`6oJ}ms/*0E>u5UVgiHn`9iOh[Yq-q!NVC9FyBfA2~+|VnMRv)j}I_clQonvz,&u');
define('SECURE_AUTH_SALT', 'iIz{_wm<t0Hc-=Fz;W*ii[l|Ic#aNFor,Q,Qp,=Fd%U]Cw+O t]*M6s(S5v`uV54');
define('LOGGED_IN_SALT',   '#W~:U#MK.AqXoN1/Mhk3QC~kE;mkNH<vwh?sYr*Z_b^<=$*Bf7WX{|!km>)_ihT]');
define('NONCE_SALT',       'v< PJG&X9K_E-`kYufA$<6s$t)b@1atC9 2y}|!2rAr[r>HyloH]/`kwE7y !|m&');

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
