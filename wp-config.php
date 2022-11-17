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
define( 'DB_NAME', 'avantdb' );

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
define( 'AUTH_KEY',         '0O*2bj1x~K%]V1SRO&&0/Z+B_{|T6c}~UYk,c?2BD:@!ph?| E~UmNQ&x@]l4hsR' );
define( 'SECURE_AUTH_KEY',  'uXU~jD-RT)f]DeAD4yQ7~=|#.A-YHHIcUJX^p!>e8/VWvD*g)Vfxl_/TKBT<ocTk' );
define( 'LOGGED_IN_KEY',    'ZEaDm[^-V}~+m6!q:-xesW!@^UO/>/` 5bV;qRb&dp(H:6u#S6~o!Ex>2g&i[=}$' );
define( 'NONCE_KEY',        ']YB`GCf>KvAA@<o~6)fk&^mreQ9hfYK%!0b7b{CSu6$Bm> VF_%Zl7A`c!/=Q]=4' );
define( 'AUTH_SALT',        'C7M/{MW[LT$f{/T-Dy?wownHzUL+iK@&?fan8viYLZ@UYu}Ml|)!{FN)f$0dJB>c' );
define( 'SECURE_AUTH_SALT', '?+X|f#9lmF0;IbQ1W$//EQ)PoC2)K!=S@XO, Y(!PW}c=/i5}lOY>sFPd(L@j1oL' );
define( 'LOGGED_IN_SALT',   'i-}/F OdOk{ h?d_s+ !`SqCeFs=qbkQ(mffeV]1[YP0[<*u9XMiq2T!>q4:<ync' );
define( 'NONCE_SALT',       '0Q$L]|9hu3Pnu:!gD$$VL2t>dVFu!]Jbf1a.7{D/f_*Idh=ALz#EeTS^-%0_Cy^V' );

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
