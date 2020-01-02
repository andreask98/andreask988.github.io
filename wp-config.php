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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         ' k7>A%5rkQz(r{&;O72gB7Pu CM%otTxY10-;G_p`.F`Td{*G]wMJd}da3L_/:PX' );
define( 'SECURE_AUTH_KEY',  'p{@vUd!XDJ`~1AmRBmGL=Hm56bg,pO~ym?>DV=9Ma#oW2NVi:gCb6H0Q6`T|OKH[' );
define( 'LOGGED_IN_KEY',    '>V/`#Sjv@_Zw_u6Jnf4_|A#i6lKzt5wb>bov?gRe`*k)`yj[So)6zVlNve}R4h;j' );
define( 'NONCE_KEY',        '}`W60_;]g35Q+*A43>vgpb9}9bouG>#Jpti0*x/LcM/%8TNaIkt^KhoXC%OB 9s+' );
define( 'AUTH_SALT',        'H0%8J|>R~,@|g6W6V1]$ieFSD/*Pe{>I~E/cTp2P-*V5yyh:2{g@2 ?SbzeR85{P' );
define( 'SECURE_AUTH_SALT', '^|5v2R.cWV<7!1!s;E*xRE$bNc3r?N.92RuwNtwfIUDr%.8I,[-P2hBI)):[WJ,{' );
define( 'LOGGED_IN_SALT',   'Z<fL(oBHP*N,m3<T.ldTwj*%@{^RqC]69q>s+xTqU[JKpOplC$3R|]uvYS^_E+$s' );
define( 'NONCE_SALT',       ':N${A 6@}+MVU^ov0os|CUA*(%M}z+6>4NK 47VFN-gbbW|A#S5X aX*/Xd<;r z' );

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
