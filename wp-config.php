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

define('DB_NAME', 'raovat');

// define('DB_NAME', 'wp-classifields-web-dev');



/** MySQL database username */

define('DB_USER', 'root');

// define('DB_USER', 'wordpress');



/** MySQL database password */

define('DB_PASSWORD', '');

// define('DB_PASSWORD', 'wordpress');



/** MySQL hostname */

define('DB_HOST', 'localhost');

// define('DB_HOST', 'db:3306');



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

define('AUTH_KEY',         'Q0+W];ZHK7#eB)+-W@RQu3PJ!L>b7H5~T%:2k~`^f.G;K?@w.1.dh(C!gn+}@+aB');

define('SECURE_AUTH_KEY',  '<e(-jl_%{H.N?.VMW,aNzZYv6yk`d#,T15Zpq+>-@yVB2@AD^-h##S>ar-WICuMY');

define('LOGGED_IN_KEY',    'N6=HjqXXi3W]r?^,[AIh+|qKj.F)!:BC#jyBKWiqZ[aDyqtNGZ,uY]x;xhB$t{.Y');

define('NONCE_KEY',        '~La.!*%CEtJr^mQPa7|;|-9K8GRa>.EJ*iwy5r%? Tn.&cb 3q-IR:,;N$UTs9M}');

define('AUTH_SALT',        '_gM5/Hs4sy_|nvJ,M<k2|-?nKNWjAy{e4I!q2FlHX0[+#6#*5Gv.@4wL13pq8{jK');

define('SECURE_AUTH_SALT', 'tfovInHq-ZhR$YkQ;6|qW}w=?C=1Mr X&33=gKp>[;o8RzXJ%F/nc([nYH@(fOFA');

define('LOGGED_IN_SALT',   '6ZA|^P9,HKr80D9w5IxVpZ-Pf$k#cOM@oN/AB;ldDgA]iyCWSvn<8b3_F%<H(w!j');

define('NONCE_SALT',       ':C1)YGjos16LwTqwMBz>4Y?RyJh_a*~XDp(7>!YP8aCrmP-LI=HEqaAAfOydbkOc');



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



// define('FORCE_SSL_ADMIN', true);



/* That's all, stop editing! Happy blogging. */



/** Absolute path to the WordPress directory. */

if ( !defined('ABSPATH') )

	define('ABSPATH', dirname(__FILE__) . '/');



/** Sets up WordPress vars and included files. */

require_once(ABSPATH . 'wp-settings.php');
