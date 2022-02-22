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
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1' );

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
define( 'AUTH_KEY',         '}&#H6m*{h$zXK*wweCs^YtmI.W7*itL4[-P91]A1tJz`vz^sj-CCRXD5+#^l*+_)' );
define( 'SECURE_AUTH_KEY',  'bK/l.Zhn=^<tA!eY7;CLpCh~e`6eg/MBZz84fJW:DqVhZvkVy9BIb_a1S^=L%O8c' );
define( 'LOGGED_IN_KEY',    'wAdD&lyl%=&dWY]sP`IHE>~PoIR=LV`i/YzsRqu{Zr7]4)0dQ#vs3Lf&2,LUgq~[' );
define( 'NONCE_KEY',        '-~-Xv}l;;DhS~5]suVoK1TH,rV3^L{(I^HL^}vfF1L1`U[E7PuHBhVz0#)~pugCg' );
define( 'AUTH_SALT',        'SeDSFJN6tWjU@YP8}]n,aK.oUy?pmRCw$2$}U,[4W_JjCHVtAn%jmDqosxT;XPPf' );
define( 'SECURE_AUTH_SALT', 'B!KPv$C7G#o^%~=50n;f-wzRx=GV}&!@S_P(Lgvjv:~SHgmm*Lq%yy$B/$+hR]Q3' );
define( 'LOGGED_IN_SALT',   '5uhRK-DFe?M4[O^g@&(I<)T@W`3Ir?y [zy%UT,-,:l]Ba?kxS~<qK/Un[m4Z~gq' );
define( 'NONCE_SALT',       'aIh K)o7)DK._)go7jo>:6HR*P]+8A2[2rdd6w^08FXKF,z4})-&;7o56!2)ei#W' );

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
