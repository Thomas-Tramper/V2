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
define( 'DB_NAME', 'Nelson Garden' );

/** MySQL database username */
define( 'DB_USER', 'Thomas' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Bil1234' );

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
define( 'AUTH_KEY',         'Y7KUX.}bEW2wnu6G?^jMLtP}PRmh%O3^I4WVC7w{sF[s<?{T9CFv[6XA3dfCrF<#' );
define( 'SECURE_AUTH_KEY',  '6 e[k7<UQMQjm0>&xKrojtKf_bx]JOnQ}dceDg6#[!V9U$k1)>*T[6=MxWY#t)rH' );
define( 'LOGGED_IN_KEY',    ' BQt>Nm2#TzFRJ{nzdw~YH=,.|`QjK%u;DO2Yoz-qxy3Ga-n_aVe*,/2-ca|[X|2' );
define( 'NONCE_KEY',        'eP@?a0T-:WNm`R:_z(^DZFIHc)%Q`L155y,+rv$l{.$+%3fWcq9!16C^W7^~C:1L' );
define( 'AUTH_SALT',        'gs2l90BLPuHJRUVToEI_r0BSdNJ$o*oX{kPi!pPPM|V`#39pT6t}ftg*FU<-@W]r' );
define( 'SECURE_AUTH_SALT', 'd_6vT-b~o9tW&GrZlLi`L8%Tc~=yQV3~3W}HT3*C!:8|BN2x2)LGj-6+ofpJk, y' );
define( 'LOGGED_IN_SALT',   '^</u@vS#S8woO0,9H^<50$SH#8qDy7{s`z)Owho6n>NwFDTiI56Wf,~i,w/a~X2%' );
define( 'NONCE_SALT',       'II0F-Rhwh[W8rzA~YmM[{TOy}6p5X$&fc.a,]P?ZC3O_*rDXrI5x6vMxM^V[<a:o' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'nelsongarden';

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
