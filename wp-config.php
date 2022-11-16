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
define( 'DB_NAME', 'nextlevel' );

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
define( 'AUTH_KEY',         'V2!X)e$L_0b[ZRq@l4m8_!(9}>Kr:3lNE-/_=B*k7n~]s;@sV@__)5?%1jEsLM01' );
define( 'SECURE_AUTH_KEY',  '.+no^s>c9N?)Yt-E6EWZH#9&E@aIGfp)*J<qLN9f i1[15O_JT8I9iHL4{D#`2//' );
define( 'LOGGED_IN_KEY',    '^]6O70V&z6]s0us|m2n^>lj5_IlVUg+mW+Ajo77Mpu7AF#/OwiMV%-C7O:mX}{BV' );
define( 'NONCE_KEY',        'Up)LR/(pp/>v@lpf(;bv2X~eIoREb<qA9Cw9}6-I/j|K?1]]6JbS+l{FZ>pY/0{,' );
define( 'AUTH_SALT',        'OR`v3yMwwZn*2o7_6!VD?I%gM1K^h5(#u4I&Ob-Xk1|qm 0Y;Xyclk&dBn.NU%DS' );
define( 'SECURE_AUTH_SALT', '~2f_`.IqI5](4,M$I!b/<m15O6!mnuWONw_!EMdy`g9[{Mz)C2dng0gedESA_zVD' );
define( 'LOGGED_IN_SALT',   '>.}w0.P*_+}rs/~trZT<Tc9._5B+h:judusnSv0s 1-Iqh}`]}^NVC$Xm/s`AM?F' );
define( 'NONCE_SALT',       't5$dsu Sgg3DU B8~;PAC0-PhPtgFLuDUMXltx_mm$8gMUID]CigGj&YIgvX)n h' );

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
