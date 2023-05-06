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
define( 'DB_NAME', 'kwordpress' );

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
define( 'AUTH_KEY',         'A. hzE0VdHdG;jB2?5R+7n.,/Wh0uS~k8l_Tam3h;S/boxMTm#AVv#{$Qaf_NsyQ' );
define( 'SECURE_AUTH_KEY',  '<<[]:9-8m_jR&*.Eum4_I0{;j6-JuUUN`)3[.#TYX_E!R!< qqrO1taj(p6v0s p' );
define( 'LOGGED_IN_KEY',    '*AozT]m(~5Dc@[j>x9L-w7F+y8?A_dU2h47d>*f3g$k#E%ul|kW7ly<<V`-d/yOB' );
define( 'NONCE_KEY',        '*T*^veD5a0-{!3.o(>aXlF}Kp[n90oq:x[TmnvAiZ*5;*6ne~7GldBJuQ<RP=^SP' );
define( 'AUTH_SALT',        '^HG0eT+WSkI9Dfq^Bb1/V=~w@WW#f$VTL72G})Ru] (g|g]^5Du+`d-r0eBl2#A5' );
define( 'SECURE_AUTH_SALT', 'c}Z(&d~*R6s3sB?kbPd&=q(4n.qOi2[xnnmkoh$a/n!=>h%d(I6 4D]5dxCq+z+c' );
define( 'LOGGED_IN_SALT',   'GR{-Zl>G37eBBjmJ(],KI2%:}V@#j+MtKSGVd|#PZ<u[%#c)x?X}t.cIdwSCljJC' );
define( 'NONCE_SALT',       '5a[MfVE&DYMbvs/~1R6H@[WLGx7=(B4%{D4voV{NwC2k5Tb|)UJ*a~P:$55P9+9[' );

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
