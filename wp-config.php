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
define( 'DB_NAME', 'epiz_25279569_w363' );

/** MySQL database username */
define( 'DB_USER', '25279569_1' );

/** MySQL database password */
define( 'DB_PASSWORD', '15OS2![vpo' );

/** MySQL hostname */
define( 'DB_HOST', 'sql101.byetcluster.com' );

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
define( 'AUTH_KEY',         'd88xbtnrdfrp2lmwfeo6cus2wcbvl73litlulnaofoaqzz1xcfofdzjjqxesyszg' );
define( 'SECURE_AUTH_KEY',  'hrfmjvjrtq4aa1q2xypg79kumhhnsjdv5b4fuj1opdkm6duskv32lpu74capwpsa' );
define( 'LOGGED_IN_KEY',    'j8nznbeo4vwycut9xh2bywn3pfwiynwuxqpqxlorc8dzogn0r4nom9ezcz31wjp3' );
define( 'NONCE_KEY',        'lp8h27zdunnxhghatyivgkmzmauxc1jeymxig2pfhvcg8ssiygh1i7mtzzwkapfo' );
define( 'AUTH_SALT',        '1ju2gj0d47vsgk0nauf0h3monxzynsudhome5tkgnw4nldzrh1potmsdeq86m5xs' );
define( 'SECURE_AUTH_SALT', 'bgx3ijunm7c4u8aosxqg1g7u13cyyktgzwkwtj20dluoofdqhgm44ezzv70pricv' );
define( 'LOGGED_IN_SALT',   'kitgy8kjhs9dxpgtnwusdu3ziw7kp0yvt9ghdgl1cqmordv4g4g7bu7654z2vrzj' );
define( 'NONCE_SALT',       '8wrarmcqt88qlppmkymwgvafgqcsstgltsklgkgr0j2by7gfzjdl060hqbbgyyoe' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpse_';

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
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
