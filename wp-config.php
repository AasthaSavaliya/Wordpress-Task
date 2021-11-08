<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
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
define( 'DB_NAME', 'wordpress_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'MrO}> a-H|>NcP{w2MM)6L0Bpoqg75`ks;(?$-fx<pmkF9[ghkYj:Z9v4LX6PI,S' );
define( 'SECURE_AUTH_KEY',  'SW2AV;T<YWUV[oiR25?B^IyL_}AE)?nKy^bs?K^(B)]b).ZVhBNhoMo0);S[Pd5.' );
define( 'LOGGED_IN_KEY',    '3@@h>~P~$qsms,?*fX;-d0x+8DYYDSMpnVmq4X-^AZ{Z*m@Ivr6Iwf(i>6VyY~Ar' );
define( 'NONCE_KEY',        'bRgo; ze&f;L(xJnAyu~ufW9;6.HY},bo~Gi>,Aqx?xP<0Ml#Gr92.8dE&<7dn2h' );
define( 'AUTH_SALT',        'Ycww7Bq*W&B`N+~m6 NLp}~Z?sGIPlcY?`#d3C$F^RA$]U%U></a3<nJ17[yNC^>' );
define( 'SECURE_AUTH_SALT', '{;%pZhV]@p5m},cd(UW4;2JHC}B?tw{t~jawim?<%7,^Tf:,AxN!&Q:Sau)Us{0c' );
define( 'LOGGED_IN_SALT',   'CtrDXBYat|Px&?AIF>EN3(y{2,i*N.^eutVAdkeh9eSv~a6,^#EdS[?!aE[cs6Ss' );
define( 'NONCE_SALT',       '[P+LeT=%? ,h@1+1;W`@hWNV}8QnxEDhp:W&6^|RrS|As~w@TKZ4k.G[iB2uRDt?' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
