<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'River@1');

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
define('AUTH_KEY',         'E5-<vZZ:5dS^NdHn+3{w|u0EeH=(JrG6JJvYvq}R_$gc+L{?UcU?4dkZw;!7Jc}W');
define('SECURE_AUTH_KEY',  '~-MqXOy?3-B_q+c#Nii6evU_pL!@u%c%AS/{dn|R`b8]KztPIp^y$ ZP!e#MJz)B');
define('LOGGED_IN_KEY',    'UpxV&;T@]A.Af8}+tPU[{,gV,=Up2KAKezM0A+FarC?I[Hu.lxkJSp9Lz-8MhfK7');
define('NONCE_KEY',        'ADK2l4D_;atAo6=BtxR{Z#<)jy;N%d%p~v?~cI,|ScUzk~DdEltR$K57W(zfDktf');
define('AUTH_SALT',        '8_;H4M<Gs?f~RCZT[If=b+:tP:([fzOl2_r`b9Nw09Wp|Yhd,jY}rk3],mZB2c;s');
define('SECURE_AUTH_SALT', 'E ~?cR~d:/6e+lOO+}I#uzcvOTRX./v,9|8@JHW/d$ pZ)2Xl K:mFhSubyBE;2]');
define('LOGGED_IN_SALT',   '{/WEq1.@nPcJM2g|ou{)~/Ll7`Ar%R~ryyb$KLd.Kk{/-HO]il@pjS%*rP3|oANo');
define('NONCE_SALT',       'pJ-J>{N)N~QI#K;0*V9e@RUPB%_Kae/mL;+}y0m3+Yo /AoM2{tEw|R[-|+7TKHu');

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
