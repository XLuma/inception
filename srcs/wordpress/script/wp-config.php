<?php
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
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'WP_SITEURL', 'llaplant.42.fr' );
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'llaplant' );

/** Database password */
define( 'DB_PASSWORD', '12345' ); 

/** Database hostname */
define( 'DB_HOST', 'mariadb' );

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
define('AUTH_KEY',         'Z]-MGM3qTohXS|YyN5~IO/hJA_hac]J#]&q21rq |%:&W)nl{kko(GpYAo1i@c{l');
define('SECURE_AUTH_KEY',  'fdhgm[+Ju<.2[E}<f#Q8Ifn-WxuXEiUR|8595*7IHqeV_n(z%-x}1x|m.GaoU1az');
define('LOGGED_IN_KEY',    'G0aXekC7^]5-~?fZ@2;6xT8`(.]#[5A|F%XUc]bwEA!Uqntuqxkz&un?s0bW0+/q');
define('NONCE_KEY',        '5`6-.o@1~v`Z:w~0>-E3ANyt 5{Z{pe81]V^otamL&-(AS:D.k7{VkKVf80PsgI>');
define('AUTH_SALT',        'J2#}GMpH#z.0qA&EPcN__j+M!;1)YBene|%*[G,E`}iV~(/WZ H{Hoa:@UskVZ}`');
define('SECURE_AUTH_SALT', 'NqWul4j|b_E}D3qx0qJ<O&;K:SiQ+Q|WJ,8iCs#U2AV1hg8qbOUA<c-m%Viz6$7t');
define('LOGGED_IN_SALT',   '{N=SD9)SW 2a#sk}Aj>$#Q}f%>sFW~;Pj9jak.XJ6*xE&H^{%+*/pq<NRH#+&Zs1');
define('NONCE_SALT',       'myLvFB(YP5oB3q}K~cQh6_qRx*e@Bfd%C%H}SSzuup|<T-0LP1=Y(}w]49@@-KCd');

/**#@-*/

/**
 * WordPress database table prefix.
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
define( 'WP_DEBUG', true );

/* Add any custom values between this line and the "stop editing" line. */


/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', '/var/www/html/wordpress' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';