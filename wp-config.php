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
define( 'DB_NAME', 'ballelio' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'lDAejS}RVF@+JVM?Fzis[Pw4+!~+eaQrt%&~~NY#s)J+o3$  z_4(A+jm.MP{*E=' );
define( 'SECURE_AUTH_KEY',  'e*+9it(4j[0.j[[=NDztp,;]/qEMsKF.QSsUTMA7J^j&)*yU0.&XMXlrV]J`M;8V' );
define( 'LOGGED_IN_KEY',    '^#C(fHW}r@T7;NxEhI!@]-1eS6-Ncg]msI;#5h*wg>ik<>~W1e@[K3I[cY3HOAr$' );
define( 'NONCE_KEY',        'pY8qv6[YlGa#Iue>hty+#f``=C+VR) +X3ppRavU-f]:`.DJKJ499 VKS9`:C%8m' );
define( 'AUTH_SALT',        '^45CRDiFO$v>&+0%:R`5yCv1y9syCao2ch*_j9+BgmeA7u>o3fm4T8)RH[^^Mn6T' );
define( 'SECURE_AUTH_SALT', ',YniK[UDq[. 1-^%q|[zh/aB|?)OSMPLfb_l)o)Zhr^(VraQ*M)rMXN`nJ(Om9$4' );
define( 'LOGGED_IN_SALT',   '/wl&^,m:(+Gv:fYKUQB2FXW)LsdFFY6u}vr[Z|;P|u^uN4xBFg=|Zcu*k`{9pYEQ' );
define( 'NONCE_SALT',       '%rMHy=@^1 |6ae&iC?^o{(Hz|mRm3> |%)]5bs7tQoSA87CYlWsHEB,pasyuvs|4' );

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
