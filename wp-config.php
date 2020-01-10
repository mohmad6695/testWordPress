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
define( 'DB_NAME', 'testwordpress_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         '2z3M7PRB`!upz-*gPS|sc YO_N7q(x~;<{<t0|^_xd-e=yCJ]a `Qo{e 2X xR45' );
define( 'SECURE_AUTH_KEY',  'T.:ELgpz8~xCE332z* r4G<^r$VoU]L=xhkC|]6g#qy(/K>v;WW[inv;%Ca|MKdR' );
define( 'LOGGED_IN_KEY',    'N#M`OdeNaudE|qCa6@DC6;4o`pK+%[}(0U.3$t2i~)=EG}VKWt2</XBY|K609nv=' );
define( 'NONCE_KEY',        's6SN8!CmF0;voj?,v%|VAF[{}G!w-*#(}h7S}/m|{wVd[(9]<_eOFR(^@k`Z+L`t' );
define( 'AUTH_SALT',        'u>M8_35<dmk+r6%d_b0y~fS3a$A5]&q[(/$A*@#RGhwBx];`HjPg&HI&Hy@U2ePW' );
define( 'SECURE_AUTH_SALT', 'oW`,;H!-Ou52[!R<y>{FOk<&q_Vud. WF{J6# NoWOAyIlS$(1WFBMtB5A^@0Jnq' );
define( 'LOGGED_IN_SALT',   '_LAD9j)vKhi:($NpbMO@!rH%17]gY2RybTov`)-L=E%_evxYj]o(ToK2gD`V sGZ' );
define( 'NONCE_SALT',       'tL9~]jI)o<4fXnOcmhRrtv{A-I7KKJkHvK:pCxgFUj^u9H~i<7Vd0sT}k]mA*G>7' );

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
