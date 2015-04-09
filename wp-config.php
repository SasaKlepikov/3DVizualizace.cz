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
define('DB_NAME', 'f64685');

/** MySQL database username */
define('DB_USER', 'f64685');

/** MySQL database password */
define('DB_PASSWORD', '24HrhJDe');

/** MySQL hostname */
define('DB_HOST', 'c056um.forpsi.com');

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
define('AUTH_KEY',         ')Yx6Wm+uh;;])rQqHXN:PnPk5ntOD=aZRl%3F6qk3- Eg~xQF)H`XOVfISTp[5wH');
define('SECURE_AUTH_KEY',  '!~S:b+2Ao[n Z,>5-STl!YT]X{2(+&@1`Gb=kZx+e;&Zop8Y`S{G]lP_V$xg!mrc');
define('LOGGED_IN_KEY',    'o}R_s?hoQj-k{t!|1Pfl@Z,5zk-aOtbj`rqfj4KfdHi(;b>QzjeOW8&D>8Eym/kG');
define('NONCE_KEY',        'QR&Gx[yT`s1LJWhR}R0ModoXBoG;R+`x@TcG22,*|NaIE2`M8Fvg%-NZ!m~v^pnx');
define('AUTH_SALT',        'Pmzh yyqpBuSDx]r(,E}@b}y89BHk~bu33i5KLD{ 0K3[3Dz2meoy&?S3@{|PhE/');
define('SECURE_AUTH_SALT', 'T|Lm*~`+--lA/D36/uqJ,&^nuXk~:8ZR@U~CPY{pD~2b1P|GzDnh-WZ!=8v9T.VK');
define('LOGGED_IN_SALT',   '{0|W? *I)Nd,,)<9OE@C;B-ap]OaR5oP-FEdc%6aXJv]o8-luDZgB6$+}hWb,.+V');
define('NONCE_SALT',       'j+[7gR7PEeDt%KG{o+<A}:|j?eQS^iGmBZ:<:H9^zwL-+^vr`#9L}a[N@gJQEs=J');

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
