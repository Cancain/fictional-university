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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         '&%-dhS-.q>,,xgQeg]K}=dHF/TH2l(jI|rbm |[Eoqo~?a&ZmG~WcXCA/Bnu>+wZ' );
define( 'SECURE_AUTH_KEY',  'x@UZXALm:w!^M>Mg4O,NO-xt//e5Y?u. !FjvrG/gip/F1_@Kc;LA7iN6[14Dv<g' );
define( 'LOGGED_IN_KEY',    '(~OWoNQsQ/P_%*|]U(LiG&O`*FE-[.:cxIQPA.D[f+;)!9dZVC%iL>@bD4RYJUNK' );
define( 'NONCE_KEY',        'Yoj4*De,!=su*%~ir~-ejUP$kFOXV0@M*GJZ9Aae4T+x|8r5gC&aW* F.h|I}}u[' );
define( 'AUTH_SALT',        '4=Ik1s76C{97ktgS+dMErHrMCd8~tRb`SHI2QhkZkkoU%AzlBDDhVf/]S,<i:iLR' );
define( 'SECURE_AUTH_SALT', '>k>R*9o3kY?d.voGg**Gl>PA:RmF]-YXm1lPKX{Nt=Ww70Y4jbE?`Tb`PET&21r3' );
define( 'LOGGED_IN_SALT',   '.D4:=+G$kcHbve4DW4 ?QIOlfaA ($@%ly=Jc>Z)B 2[Q-GB)T%b<Qd{p9l@Tz_-' );
define( 'NONCE_SALT',       'Y!BE86&EA BuKuvNttkW/.,7p>Eb%ej@F02lv3=nGrm!6t7bo?pWR <lk}V5yAQT' );

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
