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
define( 'DB_NAME', 'LMS' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',         '_^UF?2B4U})!Db=YX7X)-Ho!ss)R5-@43,>_/p_6}JaznI0uYtFJi3)aG{1i$,?P' );
define( 'SECURE_AUTH_KEY',  'sHc4+)JtemLY47Qx&?oCQO+g*h5NyKhp*F&n*2(4Gr*cA{XVai#;?1V<VKAYDN0k' );
define( 'LOGGED_IN_KEY',    '}g%`:*TZwMQ(1MK^>#+j9-ifSkb~yO3#69[HjF#mopY.f<I.G$Ft:`1Lu+Y5A3T*' );
define( 'NONCE_KEY',        '-xai?/$ca5B&2)C{#P!Q/}N3+bHg/rPw`w|-pMN9H.h.;9h$| 6>=L4_r<<2N{^_' );
define( 'AUTH_SALT',        'aRS,b!D*7KL#vAGKMX`Vm|,aDv3gHOtI{qDn+`03*G;CrpQA4WHeWdEBE5;lYHrN' );
define( 'SECURE_AUTH_SALT', 'N.u`E^|C1RPg[%YK)r:bT#F>Tb0d.4vyLSPU2)lEu3xTGA5`og6wV2mGldoFn3I`' );
define( 'LOGGED_IN_SALT',   '9WqI=>~AQXg/;0Xm*#d*a,Nk4TRa,(60A[|X!Q_UD<o1N1MjvfyR0.?*>8Kkl/r%' );
define( 'NONCE_SALT',       'd@P}:/1C>RyY(}~A(R%U.R(ub&Pi<4mO?@ij2G!XRdc2HJa!tmW.y[fq-XpP&L$a' );

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
