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
define( 'AUTH_KEY',         '!qNPiW[^3j!R=w&,sZm`&h.z$f:F=O@$oT_R_-G@V`V^{M[=KFm74BLE31%e%,Su' );
define( 'SECURE_AUTH_KEY',  'UimVaS;s0}$&-yK2!9=a;%fbD-.-/z!Q-]V) R/jc2-6gH`>ZTRWK*=ia=w,/_m<' );
define( 'LOGGED_IN_KEY',    'vsq_glB/pac`Y)EE]&Vx WUWDpl!p&PowKXM#rgJ8`KDdVrw=q#g{jbrNW3eL+V0' );
define( 'NONCE_KEY',        'g7vg}B;@4]]#.1XUC<XvotV,mESXNF`,]}{y nmv8)}{9+Y@l8eO>%>>oNdkDjKv' );
define( 'AUTH_SALT',        ')]P;Q=4%R-w.9HXn-YG1n>_B}m_3&$;QI8/mR`hf<j`(9ik!~8Q1;0u<J{YKo`mF' );
define( 'SECURE_AUTH_SALT', ']Vz#dydeF8e~-EL9@gN!Q/W^~#U2oBYsx|3`3WvJjN%:^)hg| (<Nndm})[[+p<,' );
define( 'LOGGED_IN_SALT',   'GF (waPVkf7K.29k)l%fUJKn93JrnXUf-YTvvq@d3ml0C$R}LL!|HkopcWW?ptIP' );
define( 'NONCE_SALT',       'WPf$nd[4payuH(L]{+U;FsF[%TFG(U&Y:}Ze@)jJOhj*B.^Tv[|{TnCes[?nCSL}' );

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
