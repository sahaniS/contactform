<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
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
define( 'DB_NAME', 'form4' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'Rq,$pcX/2F3%S0Yk%Dr{et&fsHlRY,j={:sK,$@WgbaxH{`w?m^^M<4b[1olVAyP' );
define( 'SECURE_AUTH_KEY',  'F:`km-DC?f8}+&R6A-=PGsb9]9NgpjPM}zx.f|bfCNM=DeW_6&vz:|{i643_zN[R' );
define( 'LOGGED_IN_KEY',    'sFx~kz_(pSt=.0N>H0BELdr,$|$[c0cP3T5W`_=Q^1u_iPUsA`qI,[~f40`L:]v|' );
define( 'NONCE_KEY',        'X}p<vX?U7U/%GbMHyMx`R!CeGrfq!=6je@z/]x~HJ_ bkf/Qj&1I2,OFPI6y}G /' );
define( 'AUTH_SALT',        'biC{~2t(iUmGi)GBmfN3%<tQnixS(J7Vtn-Fy%f85202Uwuk*g Xs&k_`IlDdA#(' );
define( 'SECURE_AUTH_SALT', 'KAfH*}$#CU! -9<%?y[(uCW:2%-ai.)qV3zb=q-qXU6OdM>n6RW!Oo;$dr%+C8 I' );
define( 'LOGGED_IN_SALT',   'Ucj!gqC6(4Ol70}=~W3rSHSb3u(J=U[}+N5f5#&1bEMChR70bZyinZzfyM/1K,66' );
define( 'NONCE_SALT',       '&LOaar=]>Da:|~AP@@vDhU1TwC BGi}v~~xsqXZp!_>CV-hQm%Jo_+?=a}5swB62' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
