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
define( 'DB_NAME', 'advanced-wp' );

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
define( 'AUTH_KEY',         'GczTPRO?5i!QOatSUoD*lzfKvu&T$!#HJeWRvJ$D9+QPc$X 9mrH~Kemq*.K33U2' );
define( 'SECURE_AUTH_KEY',  ',$|?X)hI_o;q1`zoj>zrV9+/daK1zJ7X!1$AD|}Pwa5KRfDZ3^F9u0|XW=QTup=m' );
define( 'LOGGED_IN_KEY',    'U:*Zr]vqbRFyxTL;vYQpRLQwvUtk^LEuL<8^l})D0m4,V7^=}V{Y>y~vJ}l=def+' );
define( 'NONCE_KEY',        'P{2i@{FuJreUe6we*1@o.1qA#WDi+]mD+3SmQtHJhn!VV@:b)3vg8k@je6@Ui.|{' );
define( 'AUTH_SALT',        '?J?D#&W#bIJ9/%bjae.tM7-YCwIc}(r23jVCKubi.*DUJ l/v~N4zUrFGBz9gWOe' );
define( 'SECURE_AUTH_SALT', 'F0F~S#.PW)En!sj.+dEN%|%ik2d$NU#y;WM$$`3CT{I@sF7Y8@()=KC_Nu*B+i~S' );
define( 'LOGGED_IN_SALT',   'yhKG[W5k(B+BfxK8s/dE|t=Tlr` J+i3OEB81%fYF2wB6zzi8W{zS4)lB79W0>UN' );
define( 'NONCE_SALT',       'W9^IQ>M,=bH6)|rDBj`2{d.r>G4;E]2_L$Q+b-xj!6wa^S=Uaca;7L?@8S7tQ{v~' );

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
