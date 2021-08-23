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
define( 'DB_NAME', 'pq' );

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
define( 'AUTH_KEY',         ':eTF-7N4_<*Fp^n<.^+xTPl>ipdK=.(78<#]6 0^yA4<[b1I,sUaoBTFO+!K=#`/' );
define( 'SECURE_AUTH_KEY',  '/,Tvy>bBQaDm0 cY6vX:EHEqlhRN/g~$7yi8ar^*)/e4;x/]R~Lc[i34I}dQ@!#S' );
define( 'LOGGED_IN_KEY',    'g*=%)vC0fT0<FOv9[TrekBRU0I %#>!(53*y_;}t[vZCqY.Ko?M3>t;GsKq}Xk/>' );
define( 'NONCE_KEY',        'nJ#n-`J sGj]RJ&4Ku.{M_%Vup`lHB<y0T]Gkhfg,89|( rxJjj]!@#Y%#}B3rGy' );
define( 'AUTH_SALT',        'L.u;<0@V:W9K(v$)^l_BihbVm{C 5}6g24gYFblk$`rMjCY#oWdtXc]%E|C2lf^ ' );
define( 'SECURE_AUTH_SALT', 'dK;y3hc1,`%]kiKm@qu<|=0HOly]Aka+rUph1C:Wxmfl!XYWLtWeXteJ-Op6@K=u' );
define( 'LOGGED_IN_SALT',   'Gi%0lAxyatBw<C&p2 aSt3Qf)3iOk+44u@PPAjmg4Cll*pXkR>}lNyc%~28Z~]x ' );
define( 'NONCE_SALT',       'T~GkeJ]O_.3SV?ya.y2#^TC 8-m~L;_?kQEIs`og=ab~X#WZZq88BM($ @JkqXp-' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'dmu_';

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
