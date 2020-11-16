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
define( 'DB_NAME', 'stockasss' );

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
define( 'AUTH_KEY',         'NbxL78(<eI*T1LoQl({O=#)w6ijUiVe6%{JZ*{1,PF,oA}X9oW)];AODvr.piRFU' );
define( 'SECURE_AUTH_KEY',  '(O>T+8K1G,`$Td#cq9nHH6R }|_Jx6wRUJ %H>Wy*cEqNy%VW@]!-A-jX7dzF3]!' );
define( 'LOGGED_IN_KEY',    'GoB<wsRhLEyIT<&XthqVt+u)i--qk<S?8tRRVVkZ~@3oLHnU6:!H6eeZ_So3o4Ot' );
define( 'NONCE_KEY',        '$L-bPD*fjFm5_T]kD%e)tF&C4S;hG#gAGYTKrzie*St.0:.}65x8rP>-pnT!][xo' );
define( 'AUTH_SALT',        'EP5@v2-6glKAJ7Kr<YQ{b v5-|d9zi9:Tp;5%K-7~%PTS.2hh3p2CT?Hi)>C(p/G' );
define( 'SECURE_AUTH_SALT', '*maFg5htq;$./Jq3F}*VJP`JLXcU|~s0>1>;dGlP^/CH2) wT?]#?N)[Pqr79+tQ' );
define( 'LOGGED_IN_SALT',   'YO.9<(Bk:Py:HWdrS2tQ,ebftbgI?!nfcW~_2/1zdcV5&}>q<CY(~)_:@>MS:,+u' );
define( 'NONCE_SALT',       'bV`Nu8r1Yxf6;2rY7pYcIMbj=IsYg20<5@Vn$0RZqfZZOX(vfU9.x{P=u`_fRGBO' );

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
