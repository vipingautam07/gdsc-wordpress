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
define( 'DB_NAME', 'id19128703_wp_90383fd75f0b316f7c7af41704bfdc21' );

/** MySQL database username */
define( 'DB_USER', 'id19128703_wp_90383fd75f0b316f7c7af41704bfdc21' );

/** MySQL database password */
define( 'DB_PASSWORD', '8a67b7600b829506dbcf28dd79aab5d15e672a33' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',          'N{i^w`zk/+]|sA8nj::w{~NOh72_-#Z$2MYMU`w:L{kGKV)gQePrHC6{O@^hf$l=' );
define( 'SECURE_AUTH_KEY',   '`A%>z?XA&jzlh7n)YU0o,wNj]PC!6|w0(y%ENiag~cgQDYE2jd>s0^I}(5VV9|_h' );
define( 'LOGGED_IN_KEY',     '0l@fDnSU`-]j7?2a35g?~VCm r+pZa?i;Q1VHhI%?Tma?S*0#[:Inx[#C oS] ;Y' );
define( 'NONCE_KEY',         's48Nb|?w{kzV{*@(cn!D%R-$<?f[~LkE+a/~K<~4]sC}XNA@|43|NJ5jb#(SUN,n' );
define( 'AUTH_SALT',         '.i`Z?S#KXuCq|${*&+/FGd7k[`S9qm^9W[+3RI[jh%,Q) rWU-,uPbCN%pnP;mj8' );
define( 'SECURE_AUTH_SALT',  '6%GMYnrm{%)A9{=/ {+vb=5$fNHPR3Qk`tS{Ts<%e.K2+u}xtg^}8k|}0bdFd0N<' );
define( 'LOGGED_IN_SALT',    'V)=DHrzs[pGNN&B=cYOa4s#Gp;$sEi{Rlo)_))SQkO9RFI$lVQ|aWv(]2k4j*SZJ' );
define( 'NONCE_SALT',        'wTta+$7l8tM{4aejX-OnIyB^qo`A[~Oj.odTOHv~[6jQH4](OSKd6j|5!= _fO<`' );
define( 'WP_CACHE_KEY_SALT', '5t<7Ur g/l-o!LP3Y LAf>E=w~G326b D~?13`R{#{`VI:5L#WLR0@`6#9dN$>}K' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
