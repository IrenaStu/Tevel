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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          'fBc+%-.6AP9hoj[xj@Wb]Og?!k;fh>r3:.HWH[(Co`H/NV_h-T6I7QnH:%o2#_{5' );
define( 'SECURE_AUTH_KEY',   ':@9^NVORSxv*qbeTjV~5zHW:HjX0L(mK#f]l)J 42373Al^JH[B<U&tz?~uw<tr1' );
define( 'LOGGED_IN_KEY',     '8 Jcze*~1|&Q$b(mEoCb~9/b?:fJ6wKtJ!FGd~Mi/(YK?n<(0Z6(yFw=X*A#>N-w' );
define( 'NONCE_KEY',         '[Q0q:&a |TmJzmSm_cnAi3`5U}qjseJDIVxF/YE*..1~IGF;y,#P6b@a7j2[ac~0' );
define( 'AUTH_SALT',         '`6df*@vMLI_i*;Iu9<y<zCJ?a.NDZ_:AP`-l%g,1RVKvA9x?Chbpf,V]Ota|JFk{' );
define( 'SECURE_AUTH_SALT',  '9q-k/QF;hF=+637Q)pOhI%7(=Z]l{Zuh&E1yslvx.Q~ewV7?6wBo9Qr[-}F8@AyM' );
define( 'LOGGED_IN_SALT',    ',FK v}AzaRn.z><}i^w;p8191>}8!12EGYnhHEx4>TyA^jC7Sc5jCstyk?_-.z-d' );
define( 'NONCE_SALT',        'JhbGSlu (UU1)]U.I~vsdz:G=}dZ^-bon/S{{B]d+v^J`p oOM#UqJD4>h&U0K1 ' );
define( 'WP_CACHE_KEY_SALT', 'yRmI9: qSi M@,b3@>x^}KAB_|3-A-g=M]n2y~aK6UfdKR:hy}(4EFNooAt5Ny.v' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
