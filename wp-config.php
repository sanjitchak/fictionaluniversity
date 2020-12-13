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
define( 'DB_NAME', 'university' );

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
define( 'AUTH_KEY',         'F&VXSEL2Rpjkl.>l$:,q(BT3iet&2MR]tH*kcfu4yu`]:cHJ)b=BAF?@7y!.zSVo' );
define( 'SECURE_AUTH_KEY',  'zb@LC7yvj!a%i%mc/-R7<Y#Efet#t@JFW/WxUp&Jaj[EAHJ(C;xMSma;=^K%{fMv' );
define( 'LOGGED_IN_KEY',    '?gK=^cv;YvWe3TaV9k~i:W7#&:iuD(AuygY s`4-$MtT3m7x{?r|/jCU9@fsC1v;' );
define( 'NONCE_KEY',        'P}XJ#%r<0;g$@_>:.vXh4(J?xj)#5qct*:KHxU)PBMC:9?&IzP4(8Ek^875+glh9' );
define( 'AUTH_SALT',        'aLPv7IxhQDXEn1rn>Gx:aSK,j[45$u[8`q7aj^F{?{tVj=^}d?ZMRW+y;ao)jj^h' );
define( 'SECURE_AUTH_SALT', 'w/Z=KC}PVBV{si%(EE9.%=B,(c,53zc BE>>)lGqfK)~toDF6lD]:m4KVWww]@JP' );
define( 'LOGGED_IN_SALT',   ' SZ]gdlCX;?Qd6]Xk?ive6#9ih`U^aVfvdFL{(TN#>lC~V:rKsuXvWIl-ayPw@ry' );
define( 'NONCE_SALT',       'L=`H%5U,^X-<|4aY(/~1oo;/quKlScc%m]j%cmo|a-kK?A/%sJ^g-$q#qF%j?{f^' );

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
