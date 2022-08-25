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
define('WP_CACHE', true);
define( 'WPCACHEHOME', '/srv/disk1/4152215/www/testingfield.getenjoyment.net/wp-content/plugins/wp-super-cache/' );
define( 'DB_NAME', '4152215_wpress769e536c' );

/** Database username */
define( 'DB_USER', '4152215_wpress769e536c' );

/** Database password */
define( 'DB_PASSWORD', 'L3jYU0lzmU_vIa8EQuZoCS3yjR416OPP' );

/** Database hostname */
define( 'DB_HOST', 'pdb56.awardspace.net' );

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
define( 'AUTH_KEY',         'Mk:D_>C}%rVok#BFjh^7c)v]mz)<uSN!^SZ)sICf^jX?D.V0=Y#l0%YiFN|6mK%*' );
define( 'SECURE_AUTH_KEY',  '?%moe9;uc,CwqWGU%-)^&Ihsd2)K,&e86?6OcnHNomp<._K9e%mtxTA.H8<yG{)i' );
define( 'LOGGED_IN_KEY',    'H<p0E%niN*{^fS5U/^=FzZ+s BtQ@^C|FN@pBiv&%A(!T<@X9?4;m2pm_=|RQg~z' );
define( 'NONCE_KEY',        'z.0M&60@:qtE+)U6!F =@/nrB.+6kD*Ls$p<w]T&g?ENMQbK|2e6WU2Mh6ezSI9V' );
define( 'AUTH_SALT',        'KY68qTDjy`$r/z;/sJCJP1 V9K]u[zK]MplPsW$:wII.vGKvYGR(i?l]u*<=|g6;' );
define( 'SECURE_AUTH_SALT', '<X/IOcgJkK5hC1#-*v6kC+MF:Qr.x@7|WbWf/01]j|:Lk{{`!|WdUbk/co>q$Ygq' );
define( 'LOGGED_IN_SALT',   '=;<djxD_[[QXv;r3K_J/6$%nSPy9=dq}77/MH?$yNwXK{y=mX3eLKCn1nq^]OgD5' );
define( 'NONCE_SALT',       'r14#E_T]ywz)`J$BNRJn^hF:HLf_uvLwA;NQ[+e?+GM)P9p~&AGt4t5)Qs-7l,^[' );

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
