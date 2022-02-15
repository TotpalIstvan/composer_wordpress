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
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'wordpress_user' );

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
define( 'AUTH_KEY',         'gO-(69DaR2~5,^K{Ds,)8LP:yc~x dH|y^C!Qslp$m90xw!gLWz:Yd.1>2XQm>.4' );
define( 'SECURE_AUTH_KEY',  '{3!hvo1,`m3Z&%.E5t<,j@U@Uk3!5&ZO/PfPJQb@N9_Dc}S&BLt-[.>~wu-&c}U.' );
define( 'LOGGED_IN_KEY',    ',rc*eejQ+4e-MeF2sLf2OO]nuuV_tuFh=XAB_Yz-t]#hPN>D5^0P*~5vM:Kz5h]3' );
define( 'NONCE_KEY',        '#G<:gDp+BM,NxJH9DQ9I_ )5XqA0]=v@GZQ`JCyJp{[|X3hHN:qXM8yHgi$2=F]T' );
define( 'AUTH_SALT',        'rYx2R+hn!cZM?e/g{1IUf{Mvwi!ZxwQ]l>R`nR}](T%={4zefLf]KkTg.vlu?T!9' );
define( 'SECURE_AUTH_SALT', 'p;fgDDFXN.[x_!@rN#v,Fjd:ey[rnyx>(JHd~aI9d}lvlc`B+ek@SLv/e3#?p?B/' );
define( 'LOGGED_IN_SALT',   'bY9_|KxSo*It67[ZOWO)D`{gLwA(t3DCEDFn9C/FV6 {7=ZdSe|MRh+3BSm=Zsb5' );
define( 'NONCE_SALT',       '-x6;H&>uj)rP]*;wqw$^dTxQ*:EtkXLV]n8FoE6y`G]3k9OBk{O4X$hDuCZHhOUx' );

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
