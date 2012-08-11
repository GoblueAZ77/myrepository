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
define('DB_NAME', 'wordpress377');

/** MySQL database username */
define('DB_USER', 'wordpressuser377');

/** MySQL database password */
define('DB_PASSWORD', '4scSV^ZwZ&GZ');

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
define('AUTH_KEY',         'M{d@O|se%0INiQEg ;61ne/q7fjikMA<QgP]+T4` N0D6Bi71>klP30#GS7~r35E');
define('SECURE_AUTH_KEY',  'I8=+Ci!vCEIDM-}T&hiznO7#LX^0TjlBPeN_?2Y-^pw]5o{7eeN[1Z3Px7.@l_nZ');
define('LOGGED_IN_KEY',    'ja-4x|GOe^Ug{V]J,41)l!#achlG3}(I@hC>+a7~Y6d>?Ids6Z/%2:1P*wqY[@i0');
define('NONCE_KEY',        ')gn3pC^&F-A|:]WesIc_EmMOhOA`lH*<z`@IX|gz-h)]&j-nODJQ;,R s|yHwgZy');
define('AUTH_SALT',        '6qAW)xnuE9dz%*N^(=kHQ!2t%Zes?U&o<igZACleO=>V#~5(.a9RL2F+v9}TP4[R');
define('SECURE_AUTH_SALT', 'GZOGx9E*Ji=[Q;QPa/Jt2L29@[Qh7W{4%cS6n:d2O>Zg`J}2=Kf3ektIfCT6[{Lt');
define('LOGGED_IN_SALT',   'apSdoX |ag;$n>fVG`Ymzx?/[<%+Fs^Z(5.dOysvsl|iwE})wo{0=/}vIsA[xX0G');
define('NONCE_SALT',       '1Tn96h0gO;eh?3&P$wg!YU(hkK8Ekm1Xnp3oXv@H$2/jsM:PErJ>3YW%(M.H318o');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
