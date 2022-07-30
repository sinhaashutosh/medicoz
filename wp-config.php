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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         ']OS2gVN8f1X~*q9$2g9&5!iJAHV|A}d0=D5LTU}]Rn w1m-OC-^?vI$2D{/,mG,J' );
define( 'SECURE_AUTH_KEY',  '9k1WRGbwvL6TCPc?C4P]|4rf|iK]-&ek)Xj6]/O>;{t Zw_|ia1l>vlTXVo0+&Nj' );
define( 'LOGGED_IN_KEY',    '[5t@+gR1aW7Zs=`4i>c]K3z~{BI0{rIpp>)u7#b~DMwgc*2ip{W;uep7M)AQ< f~' );
define( 'NONCE_KEY',        '0w52Sxi2RA#>uJ(A>4?HS/8Cjq4KaI:k<9:+JpLgA~T@pA_NDfR+a-Qm]cU?_b~=' );
define( 'AUTH_SALT',        '+_o{=K(88&j?Omco&[~s]oDc.-}K*HG#]}T GMNp$[3Az7[*omXRaZB7waWflZfZ' );
define( 'SECURE_AUTH_SALT', '=z2+khd. gby&W)4yGem$5dwd>zRqs}{+njzuL{[Wb(A&n(,jeI-|p)am%AJp_wu' );
define( 'LOGGED_IN_SALT',   'pJ;$n5,dAN>Rp:oRW$Zqs,mS^9[dL-Y~DsiG;C`E8`/f1fR;(E$o))JCwU?9?t6H' );
define( 'NONCE_SALT',       'Byhkp-]kf]C;q*:eDUg0{W>).V}o@S&^{E3u/8OGp}(%H?X)ZQ_ab#WvUx2%mN{f' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
