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
define('DB_NAME', 'warpedmindart');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '|[{sp%r>MrH !CK5v(Bhym/]>b{Wuuc fKDmaR!;I;b cl^1d:&yX>}jtZ``;3/P');
define('SECURE_AUTH_KEY',  'Xo]_NvHv :8Yebn{?Or,awzJ,$j )xFmPB6!8V)rP^c=EuL1}1G,v0pF^f0clL-,');
define('LOGGED_IN_KEY',    '8j=eH/!;={lM}c2|v[!xR%_4p0]#`_H%31TmjoTPjpq,Pc7=zQrk6cW.Jdy?[crM');
define('NONCE_KEY',        'l6P(RnAyy7D2c]kaPJl|zfcrz*:rcIx@[pb<64.}tfTdJ:yW.!{my_V~k&&V RO$');
define('AUTH_SALT',        '&FD`$a%<>%>SRy`4x8WjS-dOaC)(FY9g,LKqmL Ki6o}~C?vUwaEi0E-IKm:^Rsf');
define('SECURE_AUTH_SALT', 'a&LVz:Y$S(d0*Bi%*g@; i>CG8C|?Ks;0{ll-)#is(*Lujx*sGY?b?L`0~Lgs=7B');
define('LOGGED_IN_SALT',   'E^*.~pWFJU?P81 BvVH;=fY<yKMtke|(y>hH?eTX:Xdg#-5Sbq4IZ^hjdfv#.z>s');
define('NONCE_SALT',       'dO{s;!_BN43Xi_K~UhnZ.  vHvo^,d/qa_j2D[1_o8nd>~0>tjh_f3eg&GPlx+O+');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
