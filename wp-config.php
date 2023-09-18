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
define( 'DB_NAME', 'wscube' );

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
define( 'AUTH_KEY',         'wc5I;,Jc^jzuHt%!<sOCRGW13ZxLUz%V{Pr[V{<v6*f/}eZ^J*()te{F~`fc)zhm' );
define( 'SECURE_AUTH_KEY',  '0l/`R,pGXwHHS8iHD[%G|)4moICDSHFn<kY!LFyXM.uvDQ-CRapM]rc}eyq3j?E9' );
define( 'LOGGED_IN_KEY',    'DFXW4N;x#RbeIiFGiwo>=/$~,D`^2##MG6us]rQPjO]Q:/+)V=/QVj<IcAYTOyr0' );
define( 'NONCE_KEY',        '=h_YKmR4q8JXqmw0O%T-1{<C3e7-CTGG)I&4EgZ<X5qQ/hey+>,>IH/,LSLf/H=+' );
define( 'AUTH_SALT',        't-9%bPBN{E+]Sl<_*YWs:_kp dlv:zeHJsQaE^+!Mp]`V rGu|6=@0$}!qsRNy5 ' );
define( 'SECURE_AUTH_SALT', 'bB2,am2t7wtYb1R&nf) 4Se:463W|<V(_%~}OD@[t*.hhxi%R1A:?%Fz/YjaaQ[u' );
define( 'LOGGED_IN_SALT',   '8~1)d>S&Mf/QrhC@F1=K@],xn4#n~$7-Aroo?+[6z3VkIhI)eE>_Klk-X1gD#%$[' );
define( 'NONCE_SALT',       'GQgnt5>CidVMD#w{{%ASg<=NwxfR #e:j(_8h8p}%Ndq9sB6(7u9dqhw{*3K +C,' );

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
