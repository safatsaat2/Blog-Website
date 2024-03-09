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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          'Z2OwVa:{f{kw-F;_VVu+3~KYB,{nKm2(7r.[%d?G)S3GnE<#EI`27^`Z[$Kr|2#r' );
define( 'SECURE_AUTH_KEY',   'mYRm{_P&l8hH^04oPOnu+;|Dg+Y&L`^zVYF1$m)?s+ZV*Y.`|pY{I(S0-Qiv@la@' );
define( 'LOGGED_IN_KEY',     'Q+`Cc.%=[$X|fI{G07RGH ?^XH?me_[T9w}Xo:v(|I[0<ruFA{K8FD54JJ?_H$Fb' );
define( 'NONCE_KEY',         '%P[_ufd6PNl^hzwCub,SrV3A`x+py52yeh>diW2?2TQ4yWDs4iQ(f*VpWy0U&<m3' );
define( 'AUTH_SALT',         ')32iBI_W6X=sxmU*le.5q$_gr+Ow$;9`kR{v1djK5w0N~o +XU|Eh:5RoFYuv|S2' );
define( 'SECURE_AUTH_SALT',  ':V)L2To03fY3zGw#jvn >z=lw%=~J;=bdHaF^|ePD@Px@K`u#)rY,uUz/}p(Xjr{' );
define( 'LOGGED_IN_SALT',    'j2%Mr!X:?[JjthJ$fROqUC)NrQj>i^C.=.u-Q?yk7EZ(6M>)aqO$o?R&nw-v~JD5' );
define( 'NONCE_SALT',        '}Kk[?;ovE$S!E?Yd0_Gx$fA%s8ep|}pRe#$)doU!F]sg)D0jIW2tg5M6XTE{8,1n' );
define( 'WP_CACHE_KEY_SALT', ' *C!k`rKT1^ 5L]YT).Bb&M bGhP&Khm ty*@ER* RR}rn2A_~I;mwVC$q}kYFR@' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
