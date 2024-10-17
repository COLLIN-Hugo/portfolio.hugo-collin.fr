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
define( 'DB_NAME', 'portfolio' );

/** Database username */
define( 'DB_USER', 'portfolio' );

/** Database password */
define( 'DB_PASSWORD', 'portfolio2024-2025' );

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
define( 'AUTH_KEY',         ')|+}Kr(T=:zRe$x1tJ[*Ilf,f36{%x6)8-E;!1h:LYz&UVI#F,+Q<Tn:;j3#f2;`' );
define( 'SECURE_AUTH_KEY',  '0Q){gPQTy<d8@Fl%Y-aw0GSltT<pMnl>+C]HMyVJp;@Vqz.AL,~heJ~.CHg ZDx(' );
define( 'LOGGED_IN_KEY',    '+k9O {Q.G<FQ1P[g+}Hga+)n,np-z(?kgC!>3RXgfU*hV$qp/k-}JL0iR7 Z*Vm0' );
define( 'NONCE_KEY',        'SRKK1.z8{S/,oRO{_;7dDb`iqxK,wE+N6O;W#`HCur03<E|szQk:;{Pgtw@n,%SS' );
define( 'AUTH_SALT',        'wA<&MRfCV(5EuCRbLZo)UegiaFm|B#;i<!:LE)vE>nY0[3er2Q?y(tMKdxk{z9zV' );
define( 'SECURE_AUTH_SALT', 'GUlh 5-)Y*@AbZe`dL*aMG[u*6h{lKLj0%H1Z)P@A]s!)hgaX8*U@<Bv6;eB_ lB' );
define( 'LOGGED_IN_SALT',   'v_^h#*F9$/2%{!,yp_aoVshp5{wSC{1!)lAw+V<Q;,QqjUD,p(!(+P*,Q 4tLu^M' );
define( 'NONCE_SALT',       ',V%Zp<]leDNQ{5v_|HGJbTNf;Z)&[e_CaUHlF@Xgst>2rkKG1~V%}yFHPjLM`*yO' );

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
