<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'brief' );

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
define( 'AUTH_KEY',         ':UJZV$9fi}jEf;))q4H%:f37u];8j5nN((jq(+pJn:n#UQ6oonW,lVLiU9+ru?}H' );
define( 'SECURE_AUTH_KEY',  'Wc&-B&]gY%F-uM0(|6X #F./8}}ge*2W:je^PP%OS?O;4aq#aM& D?X_2nJK$SkK' );
define( 'LOGGED_IN_KEY',    '~CvG<3C*jqs7Z`.0/z1Cl@c..)SDD}6SXB1?FC>K~,=VIz~ (t0Svb8qnGyD<I{*' );
define( 'NONCE_KEY',        'tRm60H}dvO]O}}WpLl^1t&I/9{v6L xvY;=(r?T)I,zDR?B rC=!Q7.1&JP.a Ff' );
define( 'AUTH_SALT',        '{}CT2af!L^G![>T(CM0#L7Ln`+!cj5~z@AW=qbh4AcyAD8x^[]nEh=O01AXtLH:w' );
define( 'SECURE_AUTH_SALT', '>qoH/lLQ?.gyIcx`4!D&lgrTB&b#d8/ ,1#W>0RiH;vip$/.m3=yCh4&? }%6!@y' );
define( 'LOGGED_IN_SALT',   'I1n}Uy,P:*:/jO~y9c:%*L9qrewhy{DRegVLsi^.C(i{kqlG4]mqui&[E_ 2rI(I' );
define( 'NONCE_SALT',       '6{Xut@DNJl(mm[!Cp&Nsjru6go~rj!2,F]5F.&$[QVGhvtZrD#`3i#a@rUf.FR~+' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
