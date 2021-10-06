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
define( 'DB_NAME', 'ape360' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost:3307' );

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
define( 'AUTH_KEY',         'QLtKjQ*BkTTV%|h 6j8P?TZc8<Y%n!Z5kX4gW;CLc;g:|Veq(0jh-5s}WjYc~_~z' );
define( 'SECURE_AUTH_KEY',  '7x=q)Jz9t^Wb5!(3AfE+AoJ]X{n`K7prS06py^9vXvqcx00*h;ncS-hkt,.x}6[{' );
define( 'LOGGED_IN_KEY',    '@:>0V%cSD>^8tTaaZGm9Bln[Hwo}I{3~C~)Z3Fy;.K>!7GA%0)ox6UT,Umzo&C7*' );
define( 'NONCE_KEY',        'z-~Y[Q;8j{C<0r1kwe&=~[}6@6;z}dU-4*lh5kY0Hqq!;IbewP@,P)^qom;Z%0;@' );
define( 'AUTH_SALT',        'yXaTF{nM DVZHsDFf<;&/,&n4V(BeK|n$5S`gr!D4#w$%wP@zA!eg6{Ho0{$/fH+' );
define( 'SECURE_AUTH_SALT', '?ow9yKD}AH9~&V>X2 a9?@%ZSx}hQ~x_h-~ <J3pc5:;F{<827o@4Qp^<vF9K?A^' );
define( 'LOGGED_IN_SALT',   '0boHe}JXQ|dT3Pu<,_-,X7T4P:xBA8VarI4DHrY7#uZ-=/A,+O_ MASb8PIo7W52' );
define( 'NONCE_SALT',       'lyc*Ueu*$E$ZS[PiC=r:znmMC}7DMD;Zx$D#L(|Tcu9c(gZjA.n*m$}@7m4#xPi{' );

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
