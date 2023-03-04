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
define( 'DB_NAME', 'saharaesports' );

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
define( 'AUTH_KEY',         'B}Y4]`CHpa(M$rgf4G(k(F7FL[,QX%K;cmZRI]J){8u4/tLAU.%|lr}60l[-N}`t' );
define( 'SECURE_AUTH_KEY',  'foX<kLIg&`&Ld~iF2ul/=lHyA]U/gVg*8*l=)?} m&e_9vK9_oF,VfoC_fVz!%un' );
define( 'LOGGED_IN_KEY',    'D~V!3VSuT2B:c2Wgz=+mi>Rip.`>AHcz.^{Jd># 2EMag!bRdd9|e|Fx$V>;eONt' );
define( 'NONCE_KEY',        'nE.l([BRMaBtU1E4yRUQ2^a@LC]u@H<&_}>P7*8@uGv^s98[za)y2!yNY&9Mcfn3' );
define( 'AUTH_SALT',        'dR7FYPj>rr%FZhcWTRWZUw`lTV-lCSyd[/X^%^h06=3Ct2_#^2x<[Y6yyDWFCToA' );
define( 'SECURE_AUTH_SALT', 'v(9;j2D@>e1jHk`|zN6xfOp~[#@&7-H4iY[OF(_!z1Y6k7@o&KerSP= g8Z[ziw?' );
define( 'LOGGED_IN_SALT',   '7FEe{>}KH Y)b+^B7Dly0kq_q3|Jn]{!+$tRjf/MQElId$7?erAFH8CwXPS%>& K' );
define( 'NONCE_SALT',       '~NZ8xm([Wn JBEd/,d>v$dMNkgB4i|6hgInM#x&.g6&Jn)e`wK:etP`q@3NQ!NH@' );

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
