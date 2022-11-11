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
define( 'DB_NAME', 'sos' );

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
define( 'AUTH_KEY',         'Q7`_?D%OG9T@Lqf3SO<-]>psP)oyw*/kH6M6uyou4{[e05sPiS+a}]7QKpT(1sUz' );
define( 'SECURE_AUTH_KEY',  '7VB_f>_@P?-7Z8V;_&wU20DDbE{>f]YUlxIR1[VQy}-p|0K(%^#}jXt`Qft*IZ)B' );
define( 'LOGGED_IN_KEY',    'x$W,;vC>!6IfPlF>wXU2!&c!#]G.?/m#^HX)h|rmg4GnK|6Zycr^o@5b>F2w/dZa' );
define( 'NONCE_KEY',        'B0AR,]18Ax*M*RJPW3Og_G)gVL3l9drg^I1ZIk`XI&pZ?R7CnkGc9bz#D]N}`+(j' );
define( 'AUTH_SALT',        'VkYco`FV`(#N9juTA6H1CFeRfdO_*9Zeb]bX+ki]M&gb79I/(&O)H?x7Ru)|6Sky' );
define( 'SECURE_AUTH_SALT', 'xRa7g;K,BN,,Hx:4/uhsQT 9Xf&H/BGA>a[.H]/Hl<(tly#EwSsFkRC+EtgR#ehx' );
define( 'LOGGED_IN_SALT',   'zrps_M!BVzNpg/:f.`rS54KQ:ih0?cN*a*ra K( G&!%Op;jY*&^ :sg-_~3A~Dx' );
define( 'NONCE_SALT',       'wj~a2C&^lY{b}*0vfj|]3g0:*PJ(cno:+m{Dx#+ZW[&.1BU=!!1WC!N]X/25s@Eq' );

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
