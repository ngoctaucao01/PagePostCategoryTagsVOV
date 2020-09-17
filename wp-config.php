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
define( 'DB_NAME', 'db_tutorialwordpress' );

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
define( 'AUTH_KEY',         '?4T@$#GIPc4{%LzuK>IQDurz5;W4M)y[Bp#p&gsc8I-RU43_+R-q$C=lLHnfx/%O' );
define( 'SECURE_AUTH_KEY',  'p58<gs}VCjp?jMdUKpUP&0{A_4aid_fTyp_+1wC<8IqnEgzfN&`9-$<JJd[JSvi.' );
define( 'LOGGED_IN_KEY',    '{;KU#.B)AOr# =LD5?2:%o^#WjxL`g:P~%[%IA&@OJ]N{MB2D9x5H-myQ_zeN67F' );
define( 'NONCE_KEY',        '/zR|w3kuRcN%*fFOl/zd~t)~.oJm7i(Dff1>9_$4ERNF3_%f)K6e_~qf5S8m>tvr' );
define( 'AUTH_SALT',        '|O-OhEspS;U5(Qa~*tiI[!0J).[nO|S77p0niJb}ehd|@<Y%J4Wyk0NdvW/P`3.%' );
define( 'SECURE_AUTH_SALT', 'i{B`H}&QK2h^.D$;(/c.Ue35<F- @py}$:ktoX6Js$@`z.S/v4X-G`Z0k/0+|7M[' );
define( 'LOGGED_IN_SALT',   '%)Se,-N%,G2(p|_nUT>?#UYj`/-ysHe.kA#+RGdxc$#<d&7b#OLJFm!JL[m3h$TA' );
define( 'NONCE_SALT',       'c@kyOYxC^Oa{{z{0c@xs@ngI9TG}R2v;5-n|@g9+0:(jL5),gL}J[YiM:%)$^GK9' );

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
