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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'user_wp');

/** MySQL database password */
define('DB_PASSWORD', 'wordpress');

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
define('AUTH_KEY',         'GGKE,|BW%W`Y@w/In5^;Hr%M|7F|,w=D-]@$v,SCoKYFynF=fn=iunH)R7qJZxnL');
define('SECURE_AUTH_KEY',  'iHKQ=_eoZ}DDoDJZ ~/C_?b*Yv[NU@MKP{:jDW4?{fYAM{T5J$1Yt]rN:KUdJFo.');
define('LOGGED_IN_KEY',    'OIVuqVF9+D>?k%:Uys<;d=-bJ6m.]~?St7IFE|S$xvH.*O~P!I!@T} `PUzgry0(');
define('NONCE_KEY',        'QxM>_|gHxou<!>Yu=z.5CFWr!)Lzz#h;q_2xnz:8TeyN)kDKdM~TWoKShW-P:FSs');
define('AUTH_SALT',        'H07NgS_Zph-2U!SaZl8>.o{J4e-,O?[,C*vROY#*ni[]yz3UFR5hK_={%r%V(PQD');
define('SECURE_AUTH_SALT', 'z6iL,2}+I.0%3={7y{|PG}&Wbp:D4q$<jH;x/X5I+2Oz&.YyqrTvnN#xrm9gu&e3');
define('LOGGED_IN_SALT',   'naPX.PGKxswUb,GrGrk[wAQh%7^u)!|X3Ua@u <m-40Kh]7^7I{uX$qKfCVI(+=s');
define('NONCE_SALT',       'y^EA=q:[{d^,OZ+D>mgsAn4KUzu{@+zL1fM6f2P:<:]q2k2=chas#R$nNC*Fgb!q');

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
