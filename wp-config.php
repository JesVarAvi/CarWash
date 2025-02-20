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
define( 'DB_NAME', 'CarWAsh' );

/** Database username */
define( 'DB_USER', 'adm' );

/** Database password */
define( 'DB_PASSWORD', 'lacontra' );

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
define( 'AUTH_KEY',         '8<g #$hAUNw/fn6v~vSf4{(1PK[i 8-Py|D<DnA$03_U8}Yc&TzR{y ?c>b>]@2u' );
define( 'SECURE_AUTH_KEY',  '+d5~VR$Zd##7hi%z):<&[sb[g^6tpD8`}nO%rKKUIc>cgA)M/SO$D+e[-rn]g4+|' );
define( 'LOGGED_IN_KEY',    'z{u2,06}ok[g=A0irNS(Wsz**pl&M&Jh)/Wqd9xIt^PHp/n[*lQDtatPp96^l/nb' );
define( 'NONCE_KEY',        ' _uIph)-V`LWM.*4#7U1q&/^BqF=8nW$pG2`egf}+$Q:5:kBPJ$QUv.w2lT<VYei' );
define( 'AUTH_SALT',        'X_?Fa L5maJE]afL+X:Jo!Lt^V=m;lsGr[uA(~t,f4BAIhDM(AhZ)~QHE_uAqt?=' );
define( 'SECURE_AUTH_SALT', 'fC!.,-!gsl==F%~8% ]NN5or6%U#I5isef1Qh~~Zr<_MfjR6G1%ej PSU92c; V[' );
define( 'LOGGED_IN_SALT',   'uI QEU!$95k]!NtH?_kl=K3MBu>QUxD@CgBzxuI@6a&_PQ:FeKtf=Gn}BU4#%Byf' );
define( 'NONCE_SALT',       '0_z!T=XW.&&(.p[Uaf50G4<:1yYt^Pt,VO743[sZBhpp2}dW4Kn2KkXJ>W5x/yH#' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
