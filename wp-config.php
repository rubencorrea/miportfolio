<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'miportfolio' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'YK#QI9NhaQAJ%N7ORKQsnb}#Te#n%8tioQ_WMpM_8WL,.k+|HtH#1OIuo%!r7|xt' );
define( 'SECURE_AUTH_KEY',  ']~l/3ptZ_$zXE?cFZu-vX.=GtXa6Fy2|t3+EjKVT:4c1YRcO?cX-sQU8Qs<` LU0' );
define( 'LOGGED_IN_KEY',    'Z?kO?!UP*<a8|IH)$%k?q2h&?N8GNV8:|*q(?/2R<RUC1L[<(gN,tK2@=o-~i#=T' );
define( 'NONCE_KEY',        'f>p5Ian.`iW!&8E+HlFi>l_n@TW]u(dE}!PY*KDE<}%NxfI/ge_)t{k}8L|fAFf4' );
define( 'AUTH_SALT',        '9?KXQj2qKDR jl_fp37 !qX:UkzOz]mK8F6)g%c6fTPI]e4;,Q.|Uc/1svV9?LF?' );
define( 'SECURE_AUTH_SALT', 'q(W1/wZrKnMyWlPN-/E}o|E7X&dpk]`9*tZmiwqeh0TMQX~WK=4QUHuM{4=ZDh|L' );
define( 'LOGGED_IN_SALT',   '@gGGPaFX&S<W?XHgc$qs`!}NrcbrGTpzM.fff ::q,WE:Uhg7u~lhd.i8@_Ziv&0' );
define( 'NONCE_SALT',       'njsKaB_I5;HZJW4tK}P+;BcBA^Fj#i68qmP #QBB];Lr`ZCoP72;d9+Ftju Jez;' );

/**#@-*/

/**
 * WordPress database table prefix.
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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
