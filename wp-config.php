<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wp_konkura');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         'Clj#Vzy,pJ>Yh6:10Q5e|T{|7f.DO9X(kxaMyD,KH/|vg4i$@GI1ou}OeIgEztCn');
define('SECURE_AUTH_KEY',  'L7{..;zGT~Z`j0Ea6Q $PAyd_Pg>Gq*4#sUgNW:|`oTVY:&^IkO24u(@4?ToW `v');
define('LOGGED_IN_KEY',    'vmN5ZaNz6eevyE*9G^JFJ,HBR]ZaJ0|n)DGH<.-Q!@wN85WVzqqLY[5u4r1pxo2i');
define('NONCE_KEY',        ']DE=cJ7W-@++z0/]!3x7:S_%f ?PM5ZHnIE1F4i~O#ar]Qjx3-c=8MISv?R6 y8H');
define('AUTH_SALT',        '@z1Z(Y-]uoS/8y6H/? uyJu.bwkDS`PQTox$d]Rj_=DYzVv${ii5=n,}wy!Kx=Zx');
define('SECURE_AUTH_SALT', '>B--iDK]E9Q:wo}>oSAt|-+|_YA8a|Vj$9BO[?S y;+-/(`:&+F)Q6Y?K+$TEL-t');
define('LOGGED_IN_SALT',   '<sGeAi!q6iH>K!+INoLsuR<YBN7cQVFpSN>:l/(c-+|]-0kd`[V_Z|kVu+1wTn8 ');
define('NONCE_SALT',       'fJD.a(um#mNqs|)u=Kpa/&NG.(l2FedHiqr5|P*kRFHd8TO6]fi$~]coS0+I9c_P');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
