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
define( 'AUTH_KEY',         '2CY*DnM,>E7|QDGsaAD`sz,MN@r<blQ~V~RmsK%<40;io^4Dy{z tBh&?g+j8cAf' );
define( 'SECURE_AUTH_KEY',  'tIiu|SMowyRJ!?@|Us|hKp(fW!,D(O23UmD0,orQA2).eJQ4rzQ6k[f,T:hB>v!?' );
define( 'LOGGED_IN_KEY',    '_{uNanf}3m92rQ%m!rq3;Q-B$t=17>U}Z%8)]1[^r+kNlln yuo{x+BtpJ%=^sfh' );
define( 'NONCE_KEY',        'foj?K@Ffw]lv$a+2w,H=Rb[G?nqS~Aj[+9ZMVIw:]zG8J,p`#Oa2ZJ&5n!Y(ZEQs' );
define( 'AUTH_SALT',        'O|!K/,DrJ(#cs6VTp,=5dkY>b3ov/:Lt!/+%w=bfSqSD@j*1jC^P=D!n#[q2eCU4' );
define( 'SECURE_AUTH_SALT', '~fgCvbw*#cg8 A(jK_@`Yb -HQ2=;Z$y9L5`8yB(-%?^8j:/CC0&V4Uryl+oP,#F' );
define( 'LOGGED_IN_SALT',   'vUoEae]?#Bv>:TLh2GDDhSR{~2|rTfZ%W*^JG<0:;WhKb#?cA]mlG-XUOQ)trE6d' );
define( 'NONCE_SALT',       '3xlXr1LWoSzAQT1tV=q&p-{FI2~V>VNmnylZ:3M4`%L`)5`S0))%Y{:tK~FAFFK~' );

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
