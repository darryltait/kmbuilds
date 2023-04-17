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
define( 'DB_NAME', 'kevin' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'q`%Xf+mr8=1%*,1,zAosZk)B>?<vhzL^tB>Y@~LCZF0mw=iZW^F;sNwC]RXx1U98' );
define( 'SECURE_AUTH_KEY',  'rGuPsRTXClwxI00?;#Ep;Jcc#b4_;I!0qb6pR|0)[K6gj;E~sL#T;}gi!53#-y-R' );
define( 'LOGGED_IN_KEY',    '?BmDz9I5z|2M<6UlhMe@nJ<j71N?-IY=`X&py&0M0i9OAj>R*Sh<?)=d0zsT^ae_' );
define( 'NONCE_KEY',        'F9fTz]c5=(/Mt=j.a{oBa]>:Abjoz0@f:lRrdQ(21iZ%5HjwQA/0(Vo=JsQQBU&J' );
define( 'AUTH_SALT',        '$<w87uM-i9)8*_ ^jZ9>%o3muVZ|HA>(tH~(FgB-N(I$;xTuA%zN=WD8P>M^sAaS' );
define( 'SECURE_AUTH_SALT', 'imESIjAw^A=gG~kzw+13l8kS(78*SNSimX~QcT`?DwA#<I7@n-DViXh?_.10I$f*' );
define( 'LOGGED_IN_SALT',   '%!xw;:<$d%ACI]Dch737*!h;8 n#9v9@eow56}ND+$w@)u;;P69BlM0oGT3`,@uv' );
define( 'NONCE_SALT',       '.y$V(4%~!|iziItIV7^;7[>k%b)=H-L>GE^*CI+3P^Pgwr8}f=g![n8=^Ee#$`K`' );

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
