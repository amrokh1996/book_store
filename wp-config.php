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
define( 'DB_NAME', 'sport_db' );

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
define( 'AUTH_KEY',         '^vv,G5NNX#?eK%5,[#G <k&Be ^d^<=GED$M{:j3IR.@<TJ_1!,Lc191jPMsj:%m' );
define( 'SECURE_AUTH_KEY',  'Gp<dI3]Pv^84{H:QE~In!NA#mZAu- VJ+Lk^u<$P7i# $saYE:N 8l8Xhs`fRqyd' );
define( 'LOGGED_IN_KEY',    't8e~*~vVUC8I0H;%+(k_{WgTd:6%wXs+!8)uR3q.<Ke?z5`g4m|rb]7lA6GQY2<-' );
define( 'NONCE_KEY',        'Z7C3t1rEL&#[)|gff.05(HGO#K;Pu9Ip?w)[XzV#g~F)7&EVd)7%g~F,Kfq-o#`7' );
define( 'AUTH_SALT',        'N[+7cW>3r7TA4n%0T,f|4V+JP#^$KGT:xC}~$C=#}:`;.In#2L{Ln>Y=`xAlzS!b' );
define( 'SECURE_AUTH_SALT', 'G,Xz[LM*X%Ab7%}#6Jik%L1([&fx%qOLG4Xzt&#!tbr]#P@tL~uuHuk2czeY&Fx;' );
define( 'LOGGED_IN_SALT',   'iH#1R+!#i?S1OtCq+.i&U:z)g;=2RSmDy-(7SV[t)yt.]KVP84^%+HZ/^qE&N!p8' );
define( 'NONCE_SALT',       'w<uK+7e!Ya``Pci=K?3gD:&5X^q f.]{h}<E_4+MP4[}AUi/}3_}!yei(yT[4+{L' );

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
