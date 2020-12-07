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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'tovinothomes' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'b<!P<Jl+vZg5}JRbACb<dc)xGvp5.4bdJkH:R# :SJXy8^~tv!~L>2:Ja>:&]VI$' );
define( 'SECURE_AUTH_KEY',  'bcxy,q k0E.e1Sc$hcYvd:64Fe8(Y+tc{`BAw/f+$If`b@+x!dYboW2*7&fw{3vU' );
define( 'LOGGED_IN_KEY',    'jLySEt^ aaI/T/n.Qf+nf ?OK5e9h_IiXi-Rv?LL/o1a{WRvYjxq@ub~.nCBQ3[z' );
define( 'NONCE_KEY',        '[W8T0V~Wo;M:>hjU+.8=+<**VgTKX9{`&>8?;mO}_@ 64e>HO?L/Y%uP_n#hUhx2' );
define( 'AUTH_SALT',        '&[>m?Y}[({=(n7FSeR5*h[R:h/*X+u#<X-q 28p1@R$[4*KFjEulEeC)`^6E,2S&' );
define( 'SECURE_AUTH_SALT', '_;rUi%qPoq}8;47V<Kjrh,o-(XROSET=G2r?r_;plsV-9^znRcr[_y<rt3;o.g12' );
define( 'LOGGED_IN_SALT',   '9l_VF9@sH(O4|`i/j>L94?t/Xrn()/b]/Ku1&|t0;u+6~0nEnBcI_w;;37O*c~-y' );
define( 'NONCE_SALT',       '-uJGW:OC[{ x%nI$+^W:&4P^T-]?mTE)eJxm] Ee*TsEZ}Ws7FsEizwog$)W&Ctq' );

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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
