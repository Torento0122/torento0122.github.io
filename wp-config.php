<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'torentosbiking' );

/** MySQL database username */
define( 'DB_USER', 'torento' );

/** MySQL database password */
define( 'DB_PASSWORD', 'batut228Aa' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'o(Jeq7`2N2;#d5?se=_D@l2GI)j[LflH%)ipx&R7GeB<MAr_^]rv|zv0U1F99`p,' );
define( 'SECURE_AUTH_KEY',  'B{osH~+|#Wn{n)*%@]>(#E~uxnvUu~^x}4=]id1.TM5T<B=C(IMKiMfZeC[M]_U|' );
define( 'LOGGED_IN_KEY',    'I(7YuX+Q>mDK^A}`gYF#]xLttyK+@L?7I`f>9V9^dQ1H.`bU@{Yx(sz57?b:4nKo' );
define( 'NONCE_KEY',        'q}9g;v0t7W]wSS+?!r5/b$GRVh6>*N*G?,7z`|IHp_sPP9/BW8boxD>86iS{0GIU' );
define( 'AUTH_SALT',        '/{BfY$]|$PVb%xNhk<[D;RmFhidh$ArrH.l^T9Snc[E0E7mDZ/BjAp+bIi$j1:ek' );
define( 'SECURE_AUTH_SALT', '9ic#8{$lu0)hcy})2>S&SSnf$Nq.`Ean)2#J(4QZ_&PQ.$[E95a6j[u&XTUbz[rC' );
define( 'LOGGED_IN_SALT',   'gbwv3.<M][8CE9I{ `+d!QT;r6NY5j!-/nbuh~ow)5uy*%IsKlsU]J2U-3LZTJXQ' );
define( 'NONCE_SALT',       'j)M:)bAUc97*_H>gYu6%{~,St:z!D0^.JTxOsUsLzKx a@:VF%75xRR/^JftROD5' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
