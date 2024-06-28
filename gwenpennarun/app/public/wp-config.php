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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          'rIza~<s8z0<eGj-?%+<,eD[#T[n[/NB!1) Bd}u!eYN>XPq,Lm]Oxv^,`spNv6YH' );
define( 'SECURE_AUTH_KEY',   'kSu:/VZ(w_N32_6:N~~9JZqIv)O6O_=*3<H1%c=$gwFm{SOwTIK4xBZ_A?x%:P|H' );
define( 'LOGGED_IN_KEY',     '@2 #oNUG iWu:vt,it^}Ed<6IcoK3orClHh72yd<vBZ#&s_j:wrV[_xCB?C C$oY' );
define( 'NONCE_KEY',         '*uYyQ|`TMp9ak9gqu8;c[d[a||B~8:+e6QRtzcp8r&y]:+vp>|3efh$ltOnIr|Z1' );
define( 'AUTH_SALT',         '%*it_Zxn+w5j=g$Xj+Et~#[>Dz-R g;5tZEf]g*#*<.cGc1%OdP-JovDHs/LgKrP' );
define( 'SECURE_AUTH_SALT',  'V  T*Vq2w<5,O#- jQaTTZ2Y,Rl|fSMl$sjx0!QYQ[Ni&+k(%vdx:@ax*^4eflEZ' );
define( 'LOGGED_IN_SALT',    'T:*+c||Nv{nr~;hfb5y>}uE(tIUb%wb}$VtbBHSf_k+P<OUrha6aNpHkqb<56Vg*' );
define( 'NONCE_SALT',        '0uHGmaJ,r8vy|-eg^$#.!C>CWe?Ql @LcWb KaSv)-GHv:6K(SAW.5^p!:8ynq6]' );
define( 'WP_CACHE_KEY_SALT', 'R)6I4)t/c4^^Fy><OP7b7jQ&rxd%*>3~c*aPIz@Klf?:RP-kHl}yI_$`&37*k>^(' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
