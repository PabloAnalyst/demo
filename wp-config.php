<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
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
define( 'AUTH_KEY',         'G95ss_P9,UNY9!qCh<-> kJwhhnNy6Vgs@o2th1h<$S&2DaZQ6e_e~9{m|5&D7_<' );
define( 'SECURE_AUTH_KEY',  '#_s=X|&tVds*;T.eA_*#4Bp?I2hM^r*gNesfHa/B9`T,0}ec!P4:p sYyp76H-lc' );
define( 'LOGGED_IN_KEY',    'wHnmNp*pS%;!$huj$oX^b_/c9}D,< N#VPZZ7wVyRX)MvA_S(xkbl$#nl?cZ7j)!' );
define( 'NONCE_KEY',        'EV/X=_k2I0]Hs$*EH+2w?lE<oA?OEN.a)$aTZ!:Ft3)f8SX#nTo,;T^gaL~kt[>P' );
define( 'AUTH_SALT',        'sif$M<Fa/su V<z,`JQcqI)}AL2T|{N,%m?bJgM=8`nYP}e,<oJu[%uW2n%&h|*M' );
define( 'SECURE_AUTH_SALT', '9vhz:tt}51(|~?t5F8t6jWm*X~Y8~IytN^HmvM,(!/w_=t`Z2#U.|g)0`.``=O^z' );
define( 'LOGGED_IN_SALT',   ':|1v-%Fts8:|*-e=k; ,)cne;KHy( }Vo+20p{h (/0Qtm];g$.5)rX5 vS7HC@N' );
define( 'NONCE_SALT',       '8DZUL8S5M:Jx>LPkgDuG/W`FVyPOvQv,QO5UvVVQNlui~(ofLLs-N`cfI4^JhYxy' );

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
