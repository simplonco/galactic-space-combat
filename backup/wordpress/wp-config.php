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
define('DB_NAME', 'wordpressdb');

/** MySQL database username */
define('DB_USER', 'wordpressuser');

/** MySQL database password */
define('DB_PASSWORD', 'simplonco');

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
define('AUTH_KEY',         'bY+|r^{xEAbj4V7HAdoQCriWg:_XGSYWqmW=V&VSgpX2=[%Um$agXEt$,T4/2[CP');
define('SECURE_AUTH_KEY',  'C*K=>zDn!VQoH8DT8;kYoeHl0^O2x}4]S1V{XDPFq*kR-/TBZl.;{@f([2,vfJJ8');
define('LOGGED_IN_KEY',    'lRGSvF]6KKuj8_,#gux&SqFiU=/P|Yc<qmQd;A&O%I8U`Ccguo&rS8;RlhA)Xi9d');
define('NONCE_KEY',        '}DQ7)?mN</C0}]%4gqI!W?gg{h0IBkHCn]IU>=iew8:^bGZmCQ1+kj!9+@t8 kB|');
define('AUTH_SALT',        '*k+7NJC=TXM`T>|7N,wHDlOmOBr;QRZ>Y#)q-H++U(a0nl&r>=$<A(EA!/@18]A}');
define('SECURE_AUTH_SALT', '1W6A+QvlRB~Fki8-ro5m,k2Gm`Z<p?e$eLB1_57)*m!D5b7:gB]UEsuf33/;umc$');
define('LOGGED_IN_SALT',   'lR$)eKnl{i0+B bG?]h7d6yh@@7+++:zM-YKKJ2BKJHEN`_$VO+x(Z&QY4BBH+JV');
define('NONCE_SALT',       'UpD4).0ccXj#94:l,TE)<wWD8 ]GsmPA*)_tx+%{^[_:=Oi5^WrI%9_Ow1|BP(o?');

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
