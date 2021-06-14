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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wp' );

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
define( 'AUTH_KEY',         '3Qe^GxjH[$~*hkKkb)v)45hr4DueDxI@iB}T#z~^^M>,@KQeE$uO31XT*2vYr`0X' );
define( 'SECURE_AUTH_KEY',  'J*l!kE0~IBIZ$QM[d6jj^]f$]1&au$^rcR[mlx?:O3CG9F4Q[E{Y;jD5@v]Yo$la' );
define( 'LOGGED_IN_KEY',    'h?J%&gZCzfq/iVp;?}r?,Bv#eoR= c+EGq&kliHh[%SL%_:.Xw#@%7AK<^:*g8<r' );
define( 'NONCE_KEY',        'Gig9;ordxgiP<19!|vV`0fYPHj4#9HXS-yBkNs+O#2<K3&V&((uzYaEJqQChj?F+' );
define( 'AUTH_SALT',        'Lb&rLt^_K.2df?G}u[[GeD{1eW{pbh1,A;~pbhPK8,cn2-8@-Zj1pjzL*q4 45SS' );
define( 'SECURE_AUTH_SALT', 'X`FRIg68 q]i3!<aIrucO8hN*J6wKf(oton/jI;5Z5[(D[dAcO0ip9>c*-oa|nF1' );
define( 'LOGGED_IN_SALT',   '.Jy@!wPlARJ2Nc)GPT8Us3lS<5 [*uq@AIQ4+OSg_gyznID#u@}m(eA$T=O%CKbt' );
define( 'NONCE_SALT',       'O%VtuypYOT@Fkq02xQy9[mj@)BTrFNj<hpv/ow4[%haPx]x9<g{SJYGo1ih$Gr|E' );

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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
