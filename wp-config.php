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
define('DB_NAME', 'starlight');

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
define('AUTH_KEY',         'r ,aSk;M;[HdMuhyDQE!0oS_0rd#j&ct:.]xi298H_K$pn71f7.i)yp+[nLUqXUU');
define('SECURE_AUTH_KEY',  ':Rq[P8&qzgorAQ{>q;&*9/z9Ikh$xx<kM~n4LzLI!$9}^buJ20.!eHIxP0*d|Cg5');
define('LOGGED_IN_KEY',    ' 1n7,NPySq0]=vO.Rzh*78EXZTl9/_+86F+:lZte*tU fJx>wp]+](yyRt^en>6+');
define('NONCE_KEY',        '3IEHJ4z0I2A?O:aULQe&uXH=8Upr}NUITG8=NXAl&2G@,lJg(h]#GGZI)TmDq.`l');
define('AUTH_SALT',        '4J;&wyC)YJ%P3CD:%*FnVcJGv;O@q*#hl([mw_KXC^1H3Ul&6&-&(C5&>%C*mF:E');
define('SECURE_AUTH_SALT', '4QKZXeer^y=Vj{_<$$ A)7(<L|7aP9pb+KN[#NqqN:=~p<<~i2/6u@~)g8[tYmGr');
define('LOGGED_IN_SALT',   '7K4*/MiUk(W)&)RL)v{59GMsc{>St191Ln5Pvcv8zFH|+Os9HTs[-N{/c%w/~ng?');
define('NONCE_SALT',       '/:%k|63trI8^0InQjv.}V/U_:#Gn]0gCq (&E{n>Z~RNqq]x*^f%V44$/exhdhb8');

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
