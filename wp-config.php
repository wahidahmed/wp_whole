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
define( 'DB_NAME', 'wahid' );

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
define( 'AUTH_KEY',         '7o:!YU|}jD*SC ;3kg{Vz<lXK<@tdVMm,hF:?n.tk];t[2Y2ookmg7.+_HMRO`mM' );
define( 'SECURE_AUTH_KEY',  'ap-53ykFsa4?X_SIuo[Rc0b17S_9Q?<fq{q0jYK<[O1c5Dx7cjlnz6r<:^ X_ezo' );
define( 'LOGGED_IN_KEY',    'h2Tn7%11:2$6=t]eT<WExfz:X:B$MNP(^@SvYW {g8lFm2`#/Zz[.VxF+=rI>KnX' );
define( 'NONCE_KEY',        'lgPQygq]*1rp?+vcF=>U-G5.7<pMOsgPQ>g[S#vK=qF-9Gz@f28+ci9c^8xnl<7^' );
define( 'AUTH_SALT',        '@fe$n*DJ*.KFcla$>2g?.yx 4XNzpR%8aq.j^^O*Q<^H??~O{FH=9kWg1wvu`SN#' );
define( 'SECURE_AUTH_SALT', '2DY{?Uqaz<u3Th>6u#3 DJ>t$jUch$cPko^t]ekqrS=K,/6x7/(6z_B5Qy7>S*N:' );
define( 'LOGGED_IN_SALT',   'HZl7kYFPNVpBBG+#*Oax 6x^yJ$W}&m/Kdlk)%]K,A6K:l2.~JsQG S(r)jZ~+pj' );
define( 'NONCE_SALT',       'mR._q8O~SZV;qIiZ%EQ_*?aeZ`wDoIT7mp[y&=X4+7Zu~avBqBka.IPUQzMF0)Br' );

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
