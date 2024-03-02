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
define( 'AUTH_KEY',         '+J:6z,Y.&h%QR8u+r1:m|L(/3d7}=ie8Uqe|ujbU}77jY_4u2;~<0;e25QQ#)0;(' );
define( 'SECURE_AUTH_KEY',  'A+EP>CXT2|DO.1_O9#!4l&aPB8_XX`K[,We7eJV(9+<GEF8LFZb/>2<$M(yCCNn)' );
define( 'LOGGED_IN_KEY',    'jO0iudC#/)16$A+1=DEz(|YJh.mUerkt)o(.|RICnr-t/>n-)42fngUsasvL4n.r' );
define( 'NONCE_KEY',        '##I/$1to[]FsjTk:*GS({gP>h!/U&1cp*~njG#Cf0`Ya=8V]koN@E:GUDxW7Vq1Q' );
define( 'AUTH_SALT',        'k{iMuYK*xY;|{:YBzR|ai|6A:{raY{>8n=.[AK/To@@S2^fKnwjp%hs,!YT9+)^1' );
define( 'SECURE_AUTH_SALT', '?{:&J<6)@CXL |rVLh/T,lhP_.0$tNunGdu6UP6stEM@pyb]gWSFEc.EO[UvyD9A' );
define( 'LOGGED_IN_SALT',   's+|W|4AbwqUce4@R^z>|tN z*B:z6iMPi; #^bJX`/],@[25i{bSuc8bV//K06Ok' );
define( 'NONCE_SALT',       '<lm%[PL.Th[;.gQ4EBpgik!z~~q[$4~{X?BnOD:!v-ZR.#[-1puRa[L~z2&2N!^M' );

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
