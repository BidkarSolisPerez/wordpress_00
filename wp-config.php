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
define('DB_NAME', 'wordpressbase_00');

/** MySQL database username */
define('DB_USER', 'wordPress');

/** MySQL database password */
define('DB_PASSWORD', 'wordAdminPress456$');

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
define('AUTH_KEY',         'o3A<<=:sgClpgn~>_}Vxxj~ES|$.H>JJK&].?M3yS<}^%zxN&m>Tgf`_b sb*KPe');
define('SECURE_AUTH_KEY',  'XqF`lmQJDylEy[kL++{JUCUeZaN&$S7RxYg8gsX}9cA(kcf.^Vew%|#:?#M`z!5D');
define('LOGGED_IN_KEY',    '7@1F$!pq 4K^9F2o8qF&Qdh+i>ea`8n-yPvM=ieD+^>w:|unLcRpjsl^5r[7u1bp');
define('NONCE_KEY',        '|CuD+4>e[Gpcok+<u>)e<QQ!{LwcR/^NZ6a3L3;#<5kN]przq`%P;L.FI*)S{mFV');
define('AUTH_SALT',        'gc.7%>`DL)r=@!Ge2N(rR5{WaVYLe&z[=oxc:xm&FjM>3BRfNDM#T4?m)K8)R[SG');
define('SECURE_AUTH_SALT', 'cM(P)#Y~[z(lC`ZR:=w= :Oa:(Ak~DudZU=Z6%W>-dwW,RrzL+1j@w`M[R#LG/d.');
define('LOGGED_IN_SALT',   'dx96FVB,:u:/wruT30*#Vt`:c`fa/KcAh8Kuyme$8_W&:~`@Um<30=WNM]A!+&lE');
define('NONCE_SALT',       '.E,>x/x<?.uql ?|*]aM%>tx5^hHbG0r,$jv1s5YaAd5t8^TIf4*yX0i]C)-d:$3');

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
