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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'innovo' );

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
define( 'AUTH_KEY',         'KD [^p&er9iA1vG:(<>Q;te>zDxOF Z6F.p_S%DYn(B1|ioi^0*JlR&R66 `$SPN' );
define( 'SECURE_AUTH_KEY',  'QXyy@|i.``=.UL9BcHL_lWsi:u!f4zv2bu*kF>nLS;KD7i<D%}1gT7nEa%%2nAwj' );
define( 'LOGGED_IN_KEY',    '9@Td.sWJHWW`M^#D;I%4:T[-uFu$~OYuw%L=Q!?m(*#^X!nB5A,N+m<3}Z2aTK?F' );
define( 'NONCE_KEY',        's#Tvci+TH>bX}XQ!{CE__cN]QA%L|Q+)78a=.xzu _qE&R+0FT[E~9QspYaJz?0^' );
define( 'AUTH_SALT',        'M)%590o,vD-Y5E,ihfYnHc?v``H+/3_/C81YK9#gE4@Z(2v~UoHhs;%Y|Vf{nRV=' );
define( 'SECURE_AUTH_SALT', '/u:J%aJA2=-4r{t*])]mIawnL<:gi_Wmw7_9Z88e6[X{ObAYMhFE4SY}cg IsA/Y' );
define( 'LOGGED_IN_SALT',   'xn:qYb.&/F<*UfIsQBm}W@AcTNm7)DCqypI?MtL1d|B[pDkJ+M&cyq`NJdo3M_lE' );
define( 'NONCE_SALT',       'yfbrBnbWE*j7Y!j4rp[OW_/VQN/,+#]yGm`l_m7OZ[tYtZSSVnvy!I,,K(F7]),~' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
