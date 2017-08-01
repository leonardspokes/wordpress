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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'EO8KQ}OAEE/8tzQMcnmkPl_XLDk8GB>OFwA.IfrJg+K}I=Vk$%[e4_9E-%lEZG][');
define('SECURE_AUTH_KEY',  '/]6^4{_}S$f;@.8r]05}Gn#Zvfc!( N=GkY~;EF+dF!zMX^. i6,9 C#HILxIb ;');
define('LOGGED_IN_KEY',    '=U;c01>Fe~A7(7}V6oc2Ev&Xu[Fc&i<I >{qj5V{Z(&vmQ#NX7V4cNv8GyTde){F');
define('NONCE_KEY',        'wQ7}2cXN%y5Tz9b?${s5~~^9zQB*DcI]%~GzvY3[ rw^h|Rbf4rp6m>/J-J0*g#G');
define('AUTH_SALT',        '^ .=qU?eNF]5IJTu*,UgS`(PL0`npXWq/5ZmT2aGfJ/3DR 09ITROv* 8yZlD^kq');
define('SECURE_AUTH_SALT', '{&Y:qO/`e6fzh=Mc!)~AC{kub8w5#OCB4O-V_SM8Gmq7dS;|UFdPk5IY#:nqQH@J');
define('LOGGED_IN_SALT',   'Wx$5+]S+pr<$y4|J]nQj6`9=2Xh{E;7=~NtFvTVRN7c@X~n{rVMtd -O2-`bA~bg');
define('NONCE_SALT',       '}pPGnG$Ebt~8YF#U93To12}%8[?`[i.`cVzhxRL[1/Bm3{c~Cm/.I+M%o~(Z}mK{');

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
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
