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
define( 'DB_NAME', 'iap' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost/www' );

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
define( 'AUTH_KEY',         '5J,gg#<V0YcdS7cNeIG]JaC*3v9He=;?0k8~NdHuQ.)6Qn-cjkXWalp1mWrvsmX.' );
define( 'SECURE_AUTH_KEY',  'a?nSVGk[O&&Miyei|{CCsd$jkjzi/s6%}MY#Sg-Qa&em_P6Pw7XXI4Rn4Xj8G<X<' );
define( 'LOGGED_IN_KEY',    '?~&i}/#bH5nVdg,J!N%$&db7pq5(iT$Xne2W2e=.z}AY$>!)U*u9/vRNTyef=3tH' );
define( 'NONCE_KEY',        '^>nSq>e{8i m6.9O.h_8@W5*x9}JXWT3ju&99lV}5zLfF1q&8p{uHSc*n2%zj/@$' );
define( 'AUTH_SALT',        '/`6f/nPa);IHPa)UW[kxV,-H:p4OjB8s`vwFL,pTwKwjl[= 1!{Z@j~I0&]r(<jc' );
define( 'SECURE_AUTH_SALT', '-+A^L=, uT+NxHpcYEWqdmo{uica+GC,}*m#{S/n6U7s31,OR=;_OnQ@M|F/lCvV' );
define( 'LOGGED_IN_SALT',   'to_m)4`=D,~~uH25fo.xMeyQ-Xs((:}~fqHX:iuu?L*m3=>xEW**!tV/O2sDRXYx' );
define( 'NONCE_SALT',       'YmW/e+{J`w 5l_=h85NZU]<bTS&,`dIh3Ix0%XuoDQ:ajntOlcv`OK4W?q^&D6zI' );

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
