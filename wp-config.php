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
define( 'AUTH_KEY',         'ZCZWVG/l*.&JR!G%_t*sexfg?}rM4M0+04A5@+fD$#H4TkGUM3Ke_&3 ,X{Trd2V' );
define( 'SECURE_AUTH_KEY',  'X@pT&#R#Q3M?_lZ](5UMQB`[fItV)XOE)g,`)lxVeeegbQWEm2f ~W,VX5%O;JCX' );
define( 'LOGGED_IN_KEY',    '4U&oK{&}0AKBJnJyu`5L6`)jyjA,frF;&d5NE$Sloh#xfsV*kIB$RgL%soC`g[Dz' );
define( 'NONCE_KEY',        'y tD96kjT2#efq)?LybSF_>0)wvg,,@e<>nuguO-R MN%~7G:,t%n`1hok>MRJ-{' );
define( 'AUTH_SALT',        '+FNFQ#Ildz+5ey+zG:Y[,&V.j|(|}(#XGh(vEez18iu}{*(<m(>GE{{f>qihoN>&' );
define( 'SECURE_AUTH_SALT', 'J9+J-hU&)NKb`7d0-H/j}dg_!TRS#LLrxeC/Zy~#PmHXP8Z;3pX>y3du}SUFNRiY' );
define( 'LOGGED_IN_SALT',   'W_~`wD2^_n&HBtaoQaHm{^G92Ex8w7V-86-@,qfH/-?#Ea}&B5aBf/=aC6CN/,3D' );
define( 'NONCE_SALT',       '<{E%eoCsj<7Bl1XzE^Eqz5H^oI2iX={ ),=27;+>,wUUp+W}NZ_#E2UDIYTT(G_;' );

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
