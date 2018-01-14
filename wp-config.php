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
define('DB_NAME', 'personal');

/** MySQL database username */
define('DB_USER', 'enrico');

/** MySQL database password */
define('DB_PASSWORD', 'bg5351991');

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
define('AUTH_KEY',         's)L?|ee ;^MwFY_mZ)}#X-!%hiZlpJI=a~Kl=WoG6}vlHApvZHu/_eNWY=Jh$1u_');
define('SECURE_AUTH_KEY',  '-QG112V*1nOej/3W>>h?qH[kj&0G+E[d,(2>H<6;B`}51]W*0U!0,,l+rCS.0Gw,');
define('LOGGED_IN_KEY',    'q9#/GqFL+uI>L9S0<Zb!T61 wH$AH`GHTYdg7$hvqrdLlzAN_4nROUh[=82Kg[]C');
define('NONCE_KEY',        'u(C@lOnvdY<8Kc_Gz;cnzGF`(4{rg`s2-cD|w}Zk.+d(]vq-]Z}w4IbMZ O,m5G_');
define('AUTH_SALT',        'Z]kYwB(K+Q]ybk~@`M`sWH;tB[TM]3_hL/<>r&f`LC@yV>tD*RMz)o0917##H*w3');
define('SECURE_AUTH_SALT', 'u&,DkC#.DjYiUg]tq3QseWni`B(r3(i/oZ_|YQKL~Hw,;8)Fd3cC?.>#+w}`k%gX');
define('LOGGED_IN_SALT',   'GP3ODaF3Mh@t}J3P]Gu eZ(*[ VGl6DLAv5a)QSBs=~e)CN={,VC;]Z3Y //mK6m');
define('NONCE_SALT',       '~5z~kn-Bv:]d>JtUEGB>FNY/]}@-s!(6leABbWcpr^9tc9TI.GVT|Yv {#Ju^%n}');

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
