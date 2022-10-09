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
define( 'DB_NAME', 'school17' );

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
define( 'AUTH_KEY',         '48ps?WpKaZL&6_~2X=UTOTifD==E(=bb_hzT2>kARJiw0cjO|5,C&77iJC%+Xa6B' );
define( 'SECURE_AUTH_KEY',  '6446s{rS9/x)%%=|3< )U2PVY5r2-2z@x.l,=a9(;<An%B>aOlWY3HD@.y.&#fmE' );
define( 'LOGGED_IN_KEY',    '}kTPWNNv]rzxiwv<;XI*?z`J*L0h:QYNTeY5U6T!esVj0!y^gw`H/Fl`@g-8CDC^' );
define( 'NONCE_KEY',        '>A!qq}uT&ECh{4HQ^+}lxQP.d%eC^qOuOo%8fGyi+#VI;f:>$}OP;)$o5tk~@H1=' );
define( 'AUTH_SALT',        '29XHXx,TiQCmWPl=hzFlvJgZcD#hci-CO@hP[dFJ,r|?d-CJ*nr^5WNL8MvJ!j*&' );
define( 'SECURE_AUTH_SALT', 'PBNBBT_J}`A}mj(+<n<L05:vS_Gb=IRAlQugA6)>,z] JwR{5gf[gj5U9odr=_|u' );
define( 'LOGGED_IN_SALT',   'uQ!mH[FQC:j8397eHJu=YFYCNN`8)q@vj:)XIe.x,nsWBhIZ71)50EVxh6M-za5>' );
define( 'NONCE_SALT',       'La3JCc%wc~Hvnwc:a@Aw3S $u&Z5X+ptp=Dc;$]MAqE7hz8Iq@n;gnOVB{0@~(d5' );

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
