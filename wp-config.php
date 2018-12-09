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
define('DB_NAME', 'suvidhaPortfolio');

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
define('AUTH_KEY',         'tfIQj_;(JO-B!jJ)L,`5YNC6}M>oX{)G=hq)f^yl)Uo<f:c/+9I,rYB;<,Jq-3mD');
define('SECURE_AUTH_KEY',  'UaVi9Eh ow&|cj1qLMbrqg*5AgW~W?.CB-~Lr)lcJ-Fpf^] `$uETy=|Up-D.6Bp');
define('LOGGED_IN_KEY',    'GIctpx+??#Mt9!lz P4Ypg,,+geTzI|AlOnYAaR,jPkwy$mN-@ 7!j&prz3h,moR');
define('NONCE_KEY',        '^nqS7RpL_e)&9miz=c:Q(0O<5[q0A8b0*0DI{pqT-pl/.;Zv/:o-|l]RcX(oh7F(');
define('AUTH_SALT',        'rQ@c+F|esQuUm|x_BTf9{D&!Et9!J{aj];x ?e7G<>S$N7$jeZ`$+V^.3st0gic3');
define('SECURE_AUTH_SALT', '#^HUA`W$Ecq:2qcw3H0o84abDLJzH6f,V4PZD(rLR=k_9FPxlZ#0xjP_LPB?1#;J');
define('LOGGED_IN_SALT',   '@n>5<xh125ay;*Y>f)|ewV4z@=#a!pvt^u:Ge`r%6}MT-89v(%h.mgWw^<`:hI%C');
define('NONCE_SALT',       '%Lm$Def|=p$1Go?gP8x}Kh]TZ)M_?,Ahhk<oL`;^WjQ;gkUPnmC<CR3CCtuei@On');

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
