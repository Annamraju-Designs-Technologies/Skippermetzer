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
define( 'DB_NAME', 'skippermetzer' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );
define('WP_HOME', 'http://localhost:8080');
define('WP_SITEURL', 'http://localhost:8080');

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
define( 'AUTH_KEY',         'TY*Fqp&l6b/0T@a#MR>w!obTZK9SI 9o5ho#GfIX*f{F~:T$*<qMo<BIWW$Wqj@K' );
define( 'SECURE_AUTH_KEY',  '_5D&:S<:+s;&3sden _*3~b%4SmQN5@7KCA.9FgPdc>wRkfpp@U5`7vAp$!N%Ka6' );
define( 'LOGGED_IN_KEY',    'j?[(^;t`lmG@b5Q3~56PMvzKq93jeZUQcPdkqsuo4u$b`*?dAe{`3yY1RG!B:yiG' );
define( 'NONCE_KEY',        'Fqeu`rT0I(~lv1SCNC!P=6/fzT6E3H((RwAh`^s}p5g+N<##22@Xq40O>?`KWA4)' );
define( 'AUTH_SALT',        ';ez6ldzb<(d}4-6><W=V(OBKkdlFeE0oTMXZ<Nj];nz-*o98@Qzb]BI,=7:51WC0' );
define( 'SECURE_AUTH_SALT', '@eg<@DhlfZmh fo,<S0LYG*e2- iUK~=WT`g?i}mHXJM4N?BAPZ,N)1ss)b8=>)Y' );
define( 'LOGGED_IN_SALT',   '>ohu64LbWv*u%O2Z&/xU)[*a:^17[|1%MR918G(1^y4y}1ybEdPHC,rdfp.z,e5f' );
define( 'NONCE_SALT',       'r(]jRcsM@P.x6~`k%4lX@9O SGT7UD6.mm;5$u(dd=o0-JA,/W2[&-,cB6zA] `r' );

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
