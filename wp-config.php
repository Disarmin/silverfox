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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'silverfox_db' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         'CM6^$8&+l7=hQHyILw(f(} 2>eXGe~i7:6X!F:Di>v>hChw*:%qO4wA+.viSGM#n' );
define( 'SECURE_AUTH_KEY',  'dk]RI_n2}mrn0H3hu8.caxT5T*U0.o/KUd-&<;Xg!$J8ssp^!@NCnEo4xF)`=fbk' );
define( 'LOGGED_IN_KEY',    'CY)5GEb2:*@Z*=t#{Z(napR6ram^F05a14KSbivmYRzOb]=_EH@r@GIQ,aple-qJ' );
define( 'NONCE_KEY',        'I:C_.t9y@PJQi!)#(:_uX/: CL)w[_2bxy_>%AGlm;?]`}&((?f|:$%@8BVr0$l[' );
define( 'AUTH_SALT',        'STZ|l$pDd5&D`-97WmE5Zv o~XKEXj-RXwg3TFi`c@4^*CG4K Dhij/zyRG>1H=%' );
define( 'SECURE_AUTH_SALT', '=Xg}+3);F2W{Q4*t[1p),%lp5{6qK}xMVhSK/pL.Zn%+F.|7wdA{eF}0gTiaYp[s' );
define( 'LOGGED_IN_SALT',   't`oRNW$WnA3iN/g.w>yNsrz8lph<M>5h{L)D3UHusEG_cAd>GjbL2wGD[/%R!lb5' );
define( 'NONCE_SALT',       ']o*+dj7i_$7Zf9<:kc:{m+/d^e0sKE9$@7xO~<d~ez>1z`G*mzqPKX081aNO5w1-' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
