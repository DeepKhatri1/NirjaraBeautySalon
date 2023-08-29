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
define( 'DB_NAME', 'salon' );

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
define( 'AUTH_KEY',         '1xk^s*7#!;]sL-36=)IO?t?FqifolJ|Hw}qi634&5EpBy($aKk*,DC}m+Xx+XW;s' );
define( 'SECURE_AUTH_KEY',  '207k4,Z(+[-K]Z9N2{xRVg#DjTMyj@@f/f<SS3oSy+A^I^@PN#%_G/XcRXbEp[OF' );
define( 'LOGGED_IN_KEY',    'ct[qN!39W0#f2glv8.7WV*kl7WcMd.XA<>t-jbrxUP/FahwZEW@ 8?-x8iDfEaO`' );
define( 'NONCE_KEY',        'aazGu-oT fMUX-vUl_kDNK?(Y`P~j8P!Uf*$XyJsfnyE}.X8XU/8IY^4-^N3dRp+' );
define( 'AUTH_SALT',        'Gx&6C*G]3wC~EbS`j]Rp8$ASK(s6]@]UU>-Y;51n~^cN%^ia4`1hwi)JNb`e)*w/' );
define( 'SECURE_AUTH_SALT', 'GW9.G[E`r?0R-+hh^dYDj&37?3|xl{[*{X1C?:CfB}YV6q;86<-nBaGvNRZyYg3g' );
define( 'LOGGED_IN_SALT',   '(E5)=GN5F[O-(8b(*y`R.cnBwAyu814Ma@`n!+WVW,+Az2(WKVgAD&n{bP4gEpO^' );
define( 'NONCE_SALT',       'H@p$Ih_3`A$|_)VP*O@@s1nh^LM@^9QG:lNp.uV) CW/(tu62%KX>4qe>uLMu$ua' );

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




