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
define( 'DB_NAME', 'cvmc' );

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
define( 'AUTH_KEY',         'eOnqC5TW+k7-ue.Y<^YEa&J4ut;[@w|DZ|xi(3)k1@FGkh#-}~<hgp+::.fcL$ka' );
define( 'SECURE_AUTH_KEY',  'v7}hbdC7H&ZPK8n*x8L{r8s^)J_o>B~pgZV!_Wk>=,_TTz1LK9]X.;odr#kj5/n;' );
define( 'LOGGED_IN_KEY',    'X6~HO=H9p9juG1AIt(!b-#~x%^C`65|rX5+-0_uezRa9y&b80NV#INrVevo%&c v' );
define( 'NONCE_KEY',        'N0H[O>pBj.h$[jb*eR,$cv^-kWo4hV8j1j(xDY`dp{t*(Q99hK@N|rr:zKL[@4+Z' );
define( 'AUTH_SALT',        '1xL@Q<YH6Zge~Shwf(~Rni/kNaVVb29)%tL;gjA?U<uvLb[K6yl__Ry>|!4`+AO{' );
define( 'SECURE_AUTH_SALT', 'TB=oo3U@>47w>]a@i*q@logHYLbd}I?9+gZ+Gz2d`a%@-TZLqB6VZxMC2H2S~/3Y' );
define( 'LOGGED_IN_SALT',   'NQHS)wjjG$mYoMoPw5h>)m/%^2athr}gQ#WTO`qrLt]iEnJJ/DV~N!{PA]9P+ZJv' );
define( 'NONCE_SALT',       'a2?rS]0f*+!MQ5lky69rlY9TbmpGe%iZ0dcz|%+&~{FhpPD[JM.:A/dr5oXKh3kY' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpff_';

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
