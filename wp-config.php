<?php
define('WP_MEMORY_LIMIT', '512M');


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
define('DB_NAME', 'quodox');

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
define('AUTH_KEY',         'r;4y^%Y+<SDxP)9vH&~H{i4Mz!I_ MPN=I20] S8RIG@:*9$X|&4OI7Oe3+G2gfw');
define('SECURE_AUTH_KEY',  'k[2~PYbgXz%tFHFve-uWP:2v:Ys?`~vx%:8<kx2m&ysMt[i=3ch_QE/v p@^/%fr');
define('LOGGED_IN_KEY',    'YvfxjbhV@(a;Y2ky?>O8`WV*4ksy`U9KS[rUHZUxWQ&8_p6f6+E?k(G(n*N>FIBN');
define('NONCE_KEY',        '9`h)&kZ0>D.`%3b$Z^!,]z8~dE/Kiv+#JJWzj4`Qlyg+v/{pJI|?8tvIqV.`Jkl3');
define('AUTH_SALT',        's:(bi;y6R;IJ7IqW!WIAi,Bo<>FZ/M|es-54W3b{-40+lO{|}GlZ`u|vMv)$~<_+');
define('SECURE_AUTH_SALT', 'xy4#`?>le+ye+EPrUO,YR-{JI@fyU-]<r:P:=X&;Ocngys%cc4xQcJ`#3fR@>$Za');
define('LOGGED_IN_SALT',   'lbGv&|L_}++#v$r3l4Eo*Ag/Mf>cfD1#|j9yS-Mbt}x+6fe5c-ga|<}onRT]}9XE');
define('NONCE_SALT',       'BF0$Wl1Ma*gq/qePQzEiUV4%|nj./ZfuKh~+pq^4PZ-Q;kZhYxhPa9Qh[ao6{<q>');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'qt_';


/* define('WP_HOME', 'http://localhost/quodox/'); // Replace with your new WordPress address URL
define('WP_SITEURL', 'http://localhost/quodox/'); */ // Replace with your new site address URL

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

