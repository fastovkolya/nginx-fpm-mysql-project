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
define( 'DB_NAME', 'mywordpress_site3' );

/** MySQL database username */
define( 'DB_USER', 'wordpressuser' );

/** MySQL database password */
define( 'DB_PASSWORD', 'MY_PASSWORD' );

/** MySQL hostname */
define( 'DB_HOST', '192.168.144.2' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',         ')G cmBTy//wt&Ijd/fB?_v[!Y_wZ2](U 9I;;B)>b-$?Quf+rC&2|K><cw0BITb5' );
define( 'SECURE_AUTH_KEY',  'i!O-w|zOksF<qFK?95GQo={37HdSG)`T&i8R;^G>.7UaJmX(!XK|7I2,5nem;5Cw' );
define( 'LOGGED_IN_KEY',    'S`~pf0:C]W*=2*FLSG@jZw|{8$Db<,x~^._I=z#Y>n=S=drvleDfewoG:|jp2k3B' );
define( 'NONCE_KEY',        'D8S*K+|PSuLE60k^$fX@6J|_c{J_q+~IfhlF]?sJn_^.pFV[:y gl2mFfarMHBvM' );
define( 'AUTH_SALT',        'H35#}jmBmA]S$5Nnd@658K~Jq2>qWDz?wgIf_?reSCtc_ ,1.gRoB+X-I2!-FXSh' );
define( 'SECURE_AUTH_SALT', 'u`:e59_:Xf>>j|C5YEa^w|BcJ?;X>cBmlrD70TPv@$-|cbX5>2o-voY+H!ZJN*,%' );
define( 'LOGGED_IN_SALT',   'I}K{l^PGbgTF8k{T+e,eQ;!owxOy]a5vU9G&eC($Dc{!A*]^|m}Gp]McxE![_nx$' );
define( 'NONCE_SALT',       'E]=y+D?,!UFqo6SCO~G@+fzUAZ6kxGho~4(y&Fj#[ABmCsPmaC^F&.2ro33RefYO' );

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
