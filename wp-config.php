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
define('DB_NAME', 'gatkuwordpress');

/** MySQL database username */
define('DB_USER', 'gatku_wordpress');

/** MySQL database password */
define('DB_PASSWORD', 'G3dKD33Blpa6j1309KSRnIA');

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
define('AUTH_KEY',         'K*<?hPCLU11}-JT>Bl(hnv8jc#`(Nh0~De/KJ!`ab?O3r(9ba$[XN?>vRby&|l@V');
define('SECURE_AUTH_KEY',  'Db}O,*rCUgl>dF;J(F=[6i,+D G5.,sbNJ-S<~^(_$KqyP$:N-/PlXx1Jq 2Ia~/');
define('LOGGED_IN_KEY',    'fKY?-w]wDyJ`_z+]O}:{qFuce0[+0,vJm]Z8vVLZZa/?^s_U%E/KrLl9g}/FZ^ib');
define('NONCE_KEY',        'd*HPLjC?>$Uh-OK4>*2{;_rUqIvhE^9>Z^Zq#Ou%jR<VArZ~),j`uX.?1bz~d I)');
define('AUTH_SALT',        '0=j$j_JFYJH_ fDEoMay3t$M=Okr&^-!L@+@/[`JGAL=h_JTDI!wD@UtqSeb;=n:');
define('SECURE_AUTH_SALT', '-BVC.zx1^Z@n:GL[E[g{#T< {XYtO&m@?P5y.;o,=^FSdS&I,e1$T3NlK8ibz:)-');
define('LOGGED_IN_SALT',   'EhC[7#~&JN<9vb?{qs7HP<^m@tc*Ur7:ix|!@&We8U_2PH6@/2O/zwD#<I>VP{fG');
define('NONCE_SALT',       '<{?)Q0AW%T%*`A-5S>Ll=;*EXRQ.{{^;dg#4fFz|H:!45$}4=:m5.eOH[|QU-mCl');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'gatku_wp_';

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
