<?php
/**
 * Development environment config settings
 *
 * Enter any WordPress config settings that are specific to this environment
 * in this file.
 *
 * @package    Studio 24 WordPress Multi-Environment Config
 * @version    1.0
 * @author     Studio 24 Ltd  <info@studio24.net>
 */


// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', '180958-stockholmsbegrav');

/** MySQL database username */
define('DB_USER', '180958_hp43568');

/** MySQL database password */
define('DB_PASSWORD', 'steel1992');

/** MySQL hostname */
define('DB_HOST', '180958_hp43568.mysql.binero.se');

$table_prefix  = 'wp_';



define('WP_HOME', 'http://stockholmsbegravningsbyra.mediahelpcrm.se/');

define('WP_SITEURL', 'http://stockholmsbegravningsbyra.mediahelpcrm.se/');


/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);
