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
//mysql://b6211076bb7a70:2ef209c5@us-cdbr-iron-east-02.cleardb.net/heroku_86c3cfd93193036?reconnect=true
// define( 'DB_NAME', 'housing' );
define( 'DB_NAME', 'heroku_86c3cfd93193036' );
/** MySQL database username */
// define( 'DB_USER', 'root' );
define( 'DB_USER', 'b6211076bb7a70' );
/** MySQL database password */
// define( 'DB_PASSWORD', '' );
define( 'DB_PASSWORD', '2ef209c5' );
/** MySQL hostname */
// define( 'DB_HOST', 'localhost' );
define( 'DB_HOST', 'us-cdbr-iron-east-02.cleardb.net' );
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
define( 'AUTH_KEY',         '4$mb2K.UELJ)6hXEh<q$p+)5M.M@YZdy?S$0oag{I*VbT%#5RBoY@f69]l{~bX`b' );
define( 'SECURE_AUTH_KEY',  'X):uAchT1X=5t(^MKyZys~)`5ZjK_LGC#t<>ww+PvcIB/(G<|5z47X0U{e?i6*m4' );
define( 'LOGGED_IN_KEY',    'vMS(6Ib<~cJY)XL!2BL:WXI_tfAQrScD;xT]~w}!InRxm5O!u[g`k5}Z`FF *h)4' );
define( 'NONCE_KEY',        '[P}viJSX`MP2j|5U3wT=Kv}r,bGTW[P/9j+F+*1|{qJjk,^b9WX%dbOW~c{6e6,3' );
define( 'AUTH_SALT',        'rPu76|WRIZg1M7re6y|H%0E~f=<K$DZ$XT}P)I&WK^5R%`Z5sd?ya}gLsJaA F&6' );
define( 'SECURE_AUTH_SALT', 'ku!{#gF1G`+]P%.>|LwvM#$,eHlDWarwrRv*i m<BccFVU<Wktk>an}S#>}>Zbnw' );
define( 'LOGGED_IN_SALT',   '@z<Y%Ol&-Zn2WShWRl>Kk-?%?:$YJWWUo1|`Omig7Bjs4*V%C|)9&z)vuI]GrS5-' );
define( 'NONCE_SALT',       '~D51] EuM{)$X>&48Gk/:f>?rkA}hkvC9BptNp]3k)*$XN5p`J(:-C}@@tp28|&+' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
