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
define( 'DB_NAME', 'rangsalon' );

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
define( 'AUTH_KEY',         '7$_Qr4#rV+>nsOS ?$@7#IIddJaBwn~{N0|!aJF;xwix-Vp:NOsaaePZ8ZM,.;NF' );
define( 'SECURE_AUTH_KEY',  'R2ph4)?rEXL#IC|?<l55sN)IgvB$ec@gcoHs,hLE<Y3?SN:?s?m#GKI:rX.U*}z`' );
define( 'LOGGED_IN_KEY',    '6w/-|S`hLluFO2kOAtyk<|e=z<mSR,iY^>o}0iypLcRV>80[s|&XwIKS8b-}@xG7' );
define( 'NONCE_KEY',        '7k*iK0XYCCIH]jY7$8BVS&71]N5)YUCJwlGg0c801tEd_UB&~_{8Ber#]-wheBp0' );
define( 'AUTH_SALT',        ']-$%h:,@3SJcC%@tYFeC?rs9/Emd*Yxmrl/HeTdU=VeqOL`H8~A=SGU]Gs=Rk=]X' );
define( 'SECURE_AUTH_SALT', '+>mJ OWNa9/6_#:KGV2RM*Wk5mflu[ZgVyjkHbp@.y:/!`d|=KBsM4zvl*SRQ*!~' );
define( 'LOGGED_IN_SALT',   'W?qIJ *U8yLGKww.viK)nKp`D~;}m8E0mG)/VNotwKQ6 V}?5{o@rk]nmZ/R8SRv' );
define( 'NONCE_SALT',       ' 5:O(mE)V>wql^v<lwm*l@bl]?^+2ywz:m]E+0G|JDh.1+nb(vQe@<k)A~n=&Nkn' );

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
