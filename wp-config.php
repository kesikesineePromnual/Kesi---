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
define( 'DB_NAME', 'test' );

/** MySQL database username */
define( 'DB_USER', '' );

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
define( 'AUTH_KEY',         '0jBHI>5;SINHxX2q]s]ZEee<{5n;`EdwpD} ]I}_>!4CN-~$wy(Y2i;NS8H+K4&s' );
define( 'SECURE_AUTH_KEY',  '1O&M<PgbnnF.%){ =s*G=#M4F=A83G8,2~=RL~,G1~RA8Tip|7a03UeEw^MR:^0E' );
define( 'LOGGED_IN_KEY',    '.TCN@rDDdqB7bPs+_Uqt>BU6bY(nPZBq}lvZuO0b{_`Ny1}zwF-6ZuBhX&-lO,+~' );
define( 'NONCE_KEY',        'x]d6DElHX,AM;:^dtQw65>xW&%K?7%(zg.n0|=J<6~))Wq4^(w5JLFIg``J&MY@a' );
define( 'AUTH_SALT',        '>F5Bf COes.kMPHJ6SSqQ<K~)Ui9Ar+Zx/[fjOd_.]1Dvj)g6Dx~mvk`cdL>57J_' );
define( 'SECURE_AUTH_SALT', 'Pk`TRX8^XF#?^CY0A+wdMb5Q{:ti%9E.JIs*(m3M1q`:4CY<OrfC-nsZ@O~OVu1|' );
define( 'LOGGED_IN_SALT',   '!a`ny2*/<^N?U+8kpV,eL$ZiO!Gt .V;xUJuXlyac`-zI.p.ouLg=5!c!7^+2?w.' );
define( 'NONCE_SALT',       ',iXh}!$X:k0R Bz@WzV@tWM:OcaZ+UlbcfvXfrLg2llWXOR_Nw+N~z=GXmriA>d[' );

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
