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
define( 'DB_NAME', 'solugen' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         '}oym*?.s)CMjl9MHgL2p`qB:up(p,-n=Z)53<1?U3?aD<~)CH>MJb/V8sdT+33Eg' );
define( 'SECURE_AUTH_KEY',  'u7@uZ{liaXV~VSsP<?aS2FQZtN`xdXDQ+l-wTpPxK|rIYh&V#wZ5UeEm1+.[`+eU' );
define( 'LOGGED_IN_KEY',    'vxZp&Y{6F(bA`fa$5vfS@<C9;qv&%44nPi,rmGsgA02rN~kim{938m_r%f8>Lwu_' );
define( 'NONCE_KEY',        'vWS_&7r`& BR<+In!>UXG[Se`Hjk-5dLwJ)TS(CwtUy@~Aa4E,{*8vfYPWMRMk@p' );
define( 'AUTH_SALT',        'B3W%&<Q7$Dx.SmCK^c^21/Kuq/>?k3]W9$>13XoVOSi1t8t%~:E)A%Ww.dGO1i)W' );
define( 'SECURE_AUTH_SALT', 'd:}*MrmGQ&fRtESZegM*E,j.]3bCU3ZP%cj]Kv1DX#l)s_6r`h$q#~Yd@xjc!%FE' );
define( 'LOGGED_IN_SALT',   '3D_y:lx`d8T~CMfO.4BJRsWY >/ ux??g g;6ThR;__6ZEGto:Hx$yB .UGb,IbH' );
define( 'NONCE_SALT',       'pq<>Zkv{)qk@k,Hg*6x$efK_A9t60cI9B:7}=*wgWO!(}V2-iLGAkQ5168lR:b=0' );

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
