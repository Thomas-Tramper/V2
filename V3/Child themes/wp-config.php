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
define( 'DB_NAME', 'child_themes' );

/** MySQL database username */
define( 'DB_USER', 'Thomas' );

/** MySQL database password */
define( 'DB_PASSWORD', 'd11m03å02' );

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
define( 'AUTH_KEY',         'u25t9,zEXR#7)8}-!&cs*U^pb$>f0U@04lhT>O;*os8jEA}Z_]!,mJUE~NHr&0>b' );
define( 'SECURE_AUTH_KEY',  'w*l[`UXs@YkcxtD75b#HE6esZp4PAKD=<n<qz@%L.^XIuig:KamS{MV$^4J7%,-h' );
define( 'LOGGED_IN_KEY',    'n.MYeKTl:_uCc88*qkD#^#g1Bhn)7T4x6P2:qsx@#sh/4AHA<D>Z)H?92Hc-`l:*' );
define( 'NONCE_KEY',        'd;Hsp-zOEMe*.mN^8b`ZT31A:c/3Mu^ajc]`:]G+VZ00q::TOO5PNV>.I;;*CeCS' );
define( 'AUTH_SALT',        'V7K3{OM9.`cO<&pCA`4+vGMi8D$G[^?@NS]zy,azkZYmXvp2CNiz}Ex$h9Sn{2k`' );
define( 'SECURE_AUTH_SALT', '72CaA,RGziO~fto}U6*?6~)N-78q:Hz_n+LYRVn(y.fN;=m$;A@J>6.r/@+ZeMDt' );
define( 'LOGGED_IN_SALT',   'oKlE~,] gYejyS<aiX.MvkNP%Zo2cnX]F*YhY_1b6fu:TzSPfg4+2+P}Qr?IurX)' );
define( 'NONCE_SALT',       '&nhvs&HcC-uA1YPz;NG}qo[_ ?o_r*Jl53#MDxijxIhE6C._ ;PzJ(Fbx6P^C7(l' );

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
