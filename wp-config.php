<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'joshrcook');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         'yy_qVuwEhfa`Xt!fNI [;,c-]qZDadduKrd+aO[~A=7D6W9/=C`!wW5F4Pp#4D.k');
define('SECURE_AUTH_KEY',  '#,8`M=FHkyL6~?]UZ/FR$BiUv6Q>`r-e0s&t-9v9YdkSN5_j>zIb#|!EvN%D#mIB');
define('LOGGED_IN_KEY',    'J2fH NNA.0S2muqBc=[rC::G7wbE<>e^I.gMfi9(-$<Q+K-bf[7meD_{(c;iiSko');
define('NONCE_KEY',        'Z1Y_w;7-BNX4z:2]ym_*xZQ^5ZDqLYvT6v+j-~-7i$k-oRkS2xcXu~XgT[z.MmF+');
define('AUTH_SALT',        '=[FIfCBOlVkX=&Do9O! QY(?r5/6P<T+Ub9[!yke|2<~+!|NWSqqh36+|1M-=9Sw');
define('SECURE_AUTH_SALT', 'Vs9U7<O=L=ejo?|]?xv3-+,{y5`+U.Dp&C-Fx=R|v-nULOr[0z.93tQ)01@ao+%x');
define('LOGGED_IN_SALT',   '(DucsWp.|@+@E2Q Cgt}ECLZMAY@tj;]Oggl|<hE[^daNAmdhf}3b;;5qYW9_[Sh');
define('NONCE_SALT',       'j`~YG^v+^<A$o?_(Q02+kR4p{n`ge6/D-(G_,1.+Y!) 8$y*%MvtISX+7]@?U[n>');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'jrcwp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
