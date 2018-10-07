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
define('DB_NAME', 'dbkalices');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'eAeb%tgun(T^5>D WDIJ6FboSd|rTL0CcfEZ5&01(-%U_b^)o[{*>HA$l)S{C/&b');
define('SECURE_AUTH_KEY',  '.xk8rp}9j|6{(c$G^;nCqco1Yp-U#3pn1R%9ON5*G3ohTe21.Op]t[`b3$ePcN#l');
define('LOGGED_IN_KEY',    'X4!w&f&]4TFNU3]_Sj P_Z,8]8T?2;*8;/V#Z^I0nn~#p<M)3z5DjK4@a|w;0t^P');
define('NONCE_KEY',        'hR@xDksCbWux.gXM%`[ZR:s^{D*$` u RvfzT7M]q^W6*#f-2r3Bu*u/:puaZ]15');
define('AUTH_SALT',        '}Gz[|D7l C &t;elW[g9mUH**L;O1Ux]5Oi^e-Ml@O}[w[fJ0cm^5YDLBu5NiP&f');
define('SECURE_AUTH_SALT', 'oZU0]few=]{+Mc^<erh2fU9tDf) R^/|b@3]JF~cM7dfWpm3Jajo_[{>9O<@[$x>');
define('LOGGED_IN_SALT',   'i{sf:@P^/M24=2a ]J=2CN]9kM;O}TteV*Up^cSLMW]1Am$g!aa|rM.;r8Q%h-f-');
define('NONCE_SALT',       'h:d)Ak?/gspj4~g+/$)j%vcWfEw$ojxS<LJOJEvs-6nI5%E7awtV<GG!(;}S_8FW');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_admin';

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
