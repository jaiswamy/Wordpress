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
define('DB_NAME', 'u499940289_sitara');
/** MySQL database username */
define('DB_USER', 'u499940289_SiTaRa');
/** MySQL database password */
define('DB_PASSWORD', 'Sitara@123');
/** MySQL hostname */
define('DB_HOST', 'db:3306');
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
define('AUTH_KEY',         'fgJS#`wSH8FGZK+ZLh@_blF+aOQHHT$IhE<pEQ&jz5Y?}CD5$tEkc0:]iedCx}K,');
define('SECURE_AUTH_KEY',  'LFe>YkIA2$X1;43IDl39)G<S3=lfO/HWZe*LfZK;Z Ni^.7%;_6u8NQj-Bkw.V%,');
define('LOGGED_IN_KEY',    'O3w<:Z@B2!%/=8mkb]6msZT_yI f3!`^DGx7#~4UoIt*#4k?fp8Ufd<o[mV;H^Pi');
define('NONCE_KEY',        '~-CGd6`7FWi:jF`[ a_cq^B4yHD:zt30L~-AWxTRx-j:L+Fnr8Q(k*0{rzKOTS$Y');
define('AUTH_SALT',        'Pj]z#OOo}i|[+o_*L<X=YEU~D_VXc]u!/|5pB2tvD0SsdQ&O2)g]dIwlO]rhoE)-');
define('SECURE_AUTH_SALT', 'Z0A{-8Eloz=+pgCV4,ByU8#*eY2rsr uY$X9XnHtrwV=/Q8EOIawR:-${H>C7E!U');
define('LOGGED_IN_SALT',   'KL@GD]eeat$Cc,-$@cNF[mXc3#)/9His))xv^@ZYyud7M;60&XT#UupT@J&2dQa:');
define('NONCE_SALT',       '<Wwi?dI;MdBWBO=A+O3T~|Oe9cb 5~udJNzMBS0R%_%X6+PA~=7(6e(rW=o2TH^`');
/**#@-*/
/**
* WordPress Database Table prefix.
*
* You can have multiple installations in one database if you give each
* a unique prefix. Only numbers, letters, and underscores please!
*/
$table_prefix  = 'sir_';
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
define( 'FS_METHOD', 'direct' );
/* That's all, stop editing! Happy blogging. */
/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
define('ABSPATH', dirname(__FILE__) . '/');
/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
