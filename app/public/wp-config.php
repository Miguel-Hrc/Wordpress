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
define( 'AUTH_KEY',          'P!8f&Cnt#dX+^|ZAZic%%tgb=MTZBZz4|`FQQ?!=~u~aK;C& pk:8Aw?,lRS{GO~' );
define( 'SECURE_AUTH_KEY',   'V4VoLnt39nnt3@+Cv L;O^uzM^[jEO_2%~H<[veA5;prxiLTPoS--1<67e`9hyU5' );
define( 'LOGGED_IN_KEY',     'jgUeL@@?MhNEv7iVaI!R,`;LuAR ,7?eATO+:`^lF=6*U#-bh){z|C(<X[yJvJjn' );
define( 'NONCE_KEY',         'SIrhu!R$wmnfpPw49~Pbs.=yS7hnO>+2{K~+9DvJ7?!-VZ`ui<zDo7((7#`Or57g' );
define( 'AUTH_SALT',         '=OyW8ch+K6|Kjm9m(5W5MNs*Lv4QK>Bl3]+f)TCdSFd[eoc2kU=BZ#6<{gbW@g=.' );
define( 'SECURE_AUTH_SALT',  '0$2KV4x`5UO(wJO%tO0rJ$Nu39cxtJ[>W]}g.!G81K?<t N@0nwjSZk1lRv07N(G' );
define( 'LOGGED_IN_SALT',    'GGBHG8gr/cE?Ms.<^RvnNXyPGSKr)Qy_8a]D*0YP8s<Ph.qVoeNu[.^AiN!rdzEu' );
define( 'NONCE_SALT',        'o,s`yb^@z4!.y8}Y{N|/g(]mt 6|{S5!Cxv]$J(Gm1LMosUf5H4=-X05JKpf65fx' );
define( 'WP_CACHE_KEY_SALT', 'j^DLOyND &An)u_9a#xQ16In.IK!=@!q7gsa/qG)l&h(LI;QH7k?1pfNp<$L}kHz' );


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
