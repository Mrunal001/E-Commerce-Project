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
define( 'DB_NAME', 'estore' );

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
define( 'AUTH_KEY',         'DYi&>C4XIhA;,*>B)0]n;3zp*K-?tDoz36L?=9at-/uA.WhT@Al|aW7M?],?n4N:' );
define( 'SECURE_AUTH_KEY',  '-Q=!t4F~F{X?qNi8OVb,1OgDD.WTabXw;o#)=dvLP`*]q3+EMR>8B0!cj$JgS4Vn' );
define( 'LOGGED_IN_KEY',    '}m?IgpwJ(i.3Q`T`{H]@Lq.+|}ztgelh+hm:j8-z@J7Tw)FPp&N}^pP]w8sGN#Q[' );
define( 'NONCE_KEY',        'uaLF/(Dlo#[0G?]MpM_vDtkV@4<KXus0gowd!I`,PxV+nnKfIjZ=D0R=zO(jjVXp' );
define( 'AUTH_SALT',        '|77#qS3*~w,0)d3qvfsc&_>s*k:V*.|~+RQkU^iO>;{@2}0Oux>h+[v]JSHjBvBH' );
define( 'SECURE_AUTH_SALT', 'ri7.@].@9DWMep.-M)Fq?;khh5,gZJ!jDj/+*a3ieb^XVqg7t6Sg~_5Af64GF!YD' );
define( 'LOGGED_IN_SALT',   '?WV#nMFS.Uz$HN{}ZiMV:6TCwYG&o>^<^b;}&2`f36(f6?m5{KD4UKRu&ulg|zXA' );
define( 'NONCE_SALT',       'g=Kut^Z!Ll:s^9v;Y@3Wt*/PjUb`BQCktKK;w*oX[ obaUbWd;%E3mNh(l|,)ApB' );

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
