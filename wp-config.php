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
define('DB_NAME', 'sunlight_landscape');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'Ky.Ez?Bw?OF{hD2+l/TR8N_-j-$P5aS)~zb ~<2q-xORVdu*3t6gY{@u%S2AP>.Q');
define('SECURE_AUTH_KEY',  '{i*T*MBoG9qi)iLf{;<Wmjq)4Mr?a!Jco$cqK=*)r$praGf|p;gk/|^NsBjK!Gqo');
define('LOGGED_IN_KEY',    '!Aqf%1*f 1$2+hbma4&l.@mBj2CFvZ&dq<tXLVp98s8XFmMsbZM[Cq>eOGYt>p]b');
define('NONCE_KEY',        'z%fb7+_c^*T5[}q+ogRY;Bja|hL =q,I+0ScG{D~^*)||bZ$b<&QM&a@_h8BHY[o');
define('AUTH_SALT',        'VQ]+Dlhzg)?YQ+JB)}= xI5xzM@*SJ:Z0y` nwojO9t4(MK3ChdsvP(SoO7<Cyk:');
define('SECURE_AUTH_SALT', 'd^k(FcHhu   %T^2Jy?=#{i`jim.@iNw2b3oQ4Opl/!lej+3B)MIb=bQL|~L971A');
define('LOGGED_IN_SALT',   'ENlorwl)[Ry3rno9%DbI:<-!dGc3wG|sb*-LI7l#|^nq^r,QT2eY$y#!<u(w9dCT');
define('NONCE_SALT',       'g/(]81 mOT{ZS3E#T{)31WgwG~w[];7ul8gusrj5zQL+-`J/j2092B/s4Yjq:G>+');

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
