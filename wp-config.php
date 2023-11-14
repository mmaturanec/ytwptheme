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
define( 'DB_NAME', 'yttutorial' );

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
define( 'AUTH_KEY',         '-T2Kyp3NVaIRhAd#CTrb2s[*=@OnVv_shF&k,z@!O{LbdPb7U^8JHvhf!O^p}S8a' );
define( 'SECURE_AUTH_KEY',  ' UonSF.hU|Vlory htR[opw:5||t*]h<,mNlEh,A`G}3Qx)4ut`)wbj%U>+wywZn' );
define( 'LOGGED_IN_KEY',    'hP$$=I7rF|l3^ |<U(C|!h$ssbpm2Dwz-`t&wh%:hIR-}(Myr]N@2<h8{]nU2g3f' );
define( 'NONCE_KEY',        'l-L)|[+g}8>>166bBkaEU:DS{>7]cLUGEof3c5B]t;rsheD14!GQ}zBHPH@=_S(w' );
define( 'AUTH_SALT',        '~#D*:!(6&eWo~Eyk`qWlz`MyYY4[w3k8 84Zd5-LwZ!w&xATU>bWE9#s>9ZCp*R9' );
define( 'SECURE_AUTH_SALT', '.TXt;++)S9S~gri}gx:K Yc|29?u.k(T_Za2/kiG9$V_XmL$#hJ&b!3C*&g;5Bpl' );
define( 'LOGGED_IN_SALT',   'tq1JWz]rxiul@7<M=Dc-;!@=&Ed<ZIj0J3pCiV-C7B=RA=lr n@D{L~]I[:S dDl' );
define( 'NONCE_SALT',       'D[v%|wO+J;PXjC]s[9wkAVY7L$t*if&Fqi6Bk#{$k=Jce*nU Dsn]A/?I3oZdY-A' );

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
