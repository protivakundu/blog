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
define( 'DB_NAME', 'blog' );

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
define( 'AUTH_KEY',         ']mtOZR:,78e#W#-U);{q%ROlpwq3Tt,da}j:5 (5bnH!tR_4^z206Is|A?8H8D7(' );
define( 'SECURE_AUTH_KEY',  ',0$oCGMz+A%O*8V>pdalcF(H9DKh[kwC9o!`5|*J*:n0yr9@dw0u;l=+>So]0.#;' );
define( 'LOGGED_IN_KEY',    ' cLl8_=ut9p$cKa)I84c^wo}{:uPIxG`Bmz>u7G44^=v;U.PSG<2+E1TuI,[^z<b' );
define( 'NONCE_KEY',        '_DWs%QP)1fpH;SKPr(^e02Z!r_#^()Orj&Y P>6};mBp)8GIKoRuu>m(v8=C.cCb' );
define( 'AUTH_SALT',        '?HJ3X$l@9o]g|!}[*h|*H0sZt0EXrdbhhN$OuGf_oJ`ZOgfdy4ene+|qRg/E{p`N' );
define( 'SECURE_AUTH_SALT', 'h/O9`bhsL|U-?@G.:^H-imPOGiX$=dI,Rw^d5tafgK1J&IgZ[JkLjq[QfxB:h;OV' );
define( 'LOGGED_IN_SALT',   '7m#ri|V-bmjn4pN]A5iPa(.zw1Ki7^%6n8VNA.YLfQkGL/m&Dk]ql:!~g6Z=U=*M' );
define( 'NONCE_SALT',       '`wf64VHK#/P^e6FOX?RJ?[/Bz)v-Vm G0ds>5e)( QupJTmia1ct>mt$F0OS.JA+' );

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
