<?php // hey day

    if(isset($_SERVER['HTTP_X_FORWARDED_PROTO'] )) {
      if (strpos( $_SERVER['HTTP_X_FORWARDED_PROTO'], 'https') !== false) {
        $_SERVER['HTTPS']='on';
      }
    };

    define( 'WP_MEMORY_LIMIT', '128M' );
    define( 'WP_MAX_MEMORY_LIMIT', '256M' );
    define( 'FS_METHOD', 'direct');
    define( 'AUTOSAVE_INTERVAL', 160 );
    define( 'WP_POST_REVISIONS', 5 );
	
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'store3' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',          ')#dN`ZaPL ?XxksTa=B1IpLCH:`@/C,i3x([`t}t[i}b#%ss6DA0>!h LGNN]81+' );
define( 'SECURE_AUTH_KEY',   ';lZ||eXiPL3Pk[VNNm{=dR~{YH){eej}:W#Xb3U X3FuMs9W0%AOu8WNM s_VUX.' );
define( 'LOGGED_IN_KEY',     't:$mIXP95G/TFpE}X:M{AHjS-<-xqKS]r[Jc!4Z6ek fu[LLx)o`cWg#_u9obNp ' );
define( 'NONCE_KEY',         '7~!QCY dx7SyH5]dzWz~b_u9^xRdSG|]2G-dFSPooS%@$O!^s{jc|N/?v>w47n_k' );
define( 'AUTH_SALT',         'In}l*iHEAWzF~w^bUP9bo)h6S?*$j6F$*8B,|JP%AdNn0jPL>A.NxmIsI;;(V|r&' );
define( 'SECURE_AUTH_SALT',  'qYU;[J7My&?S^tJ@L;f`<U1UnJc]s~D2{.84xMcocj@@x7^oaWJ`*2VJ$b*%7FxI' );
define( 'LOGGED_IN_SALT',    '>@69f2qYuur|_-kBfPhGp[c;YoS}Vu}5&`2ga0LP%Jd6+AiulPb&daCI[{+2h+hx' );
define( 'NONCE_SALT',        'yTHk./,`fxeZaNQf;Y[}s/_2m%D$;mZq]<^OFhbty$Tv)sB3e=>DRqko$ 9]F+fK' );
define( 'WP_CACHE_KEY_SALT', '~85TKaXv;wgPj>fj-4R3sGu..^(saqz,Ne7#D6p23z&j;YI.);M CyhxZwE^`Zx[' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
