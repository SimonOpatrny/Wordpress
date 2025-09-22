<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpressdb2' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         '^#M-:-d2l,F?*<buvr%//Y4~Z~AyfSgZ&gk9iSLD6!tVKKwhnsl>0:j`D.P&aV[I' );
define( 'SECURE_AUTH_KEY',  '?Ftv}EUAA64juB/r7nQ%ehi]%:}cR:</&%Yucu+VAC4P~d.<@J7DlB@MvNcafE.<' );
define( 'LOGGED_IN_KEY',    'mWI}=.09!E_4Y~lV,Ay(QtJj{+!*1|H^L&<Vey2{C&y3^iV}pvw>L@){* MOz$L1' );
define( 'NONCE_KEY',        's+U=R6Havjuf3xTlJYT)nwzBH;hH7(GEz+H`/ih{!#lJm+YFDn.A|K03PRn0X1}c' );
define( 'AUTH_SALT',        '[K5at{TIKFv-oe?t/Fs]KEPo0X9poN$jGSPpRMS_qbv9R N[`H($Qq__Z>`I>el~' );
define( 'SECURE_AUTH_SALT', 'r*n@rF&{*}3kA0//^5s.?G@Xj,rlJQBYGO>e^;&5Jb9=-,O(XPP*k3JnsJ&!FHZs' );
define( 'LOGGED_IN_SALT',   'fPTgR}E:kOa;^a[h8TC!X2::X6Bi[C.K(sc<:sm8cD1`c*r7xjxw4[3iUq6vv.07' );
define( 'NONCE_SALT',       '9`d%K [451g 9vK(`_CiVx!h-CEFcf(nDMJmIim*]ACEx/8ToV/D}-K<5|(=_`3M' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
