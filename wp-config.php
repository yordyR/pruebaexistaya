<?php
/** 
 * Configuración básica de WordPress.
 *
 * Este archivo contiene las siguientes configuraciones: ajustes de MySQL, prefijo de tablas,
 * claves secretas, idioma de WordPress y ABSPATH. Para obtener más información,
 * visita la página del Codex{@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} . Los ajustes de MySQL te los proporcionará tu proveedor de alojamiento web.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** Ajustes de MySQL. Solicita estos datos a tu proveedor de alojamiento web. ** //
/** El nombre de tu base de datos de WordPress */
define('DB_NAME', 'impulso_pruebas');

/** Tu nombre de usuario de MySQL */
define('DB_USER', 'impulso_pruebas');

/** Tu contraseña de MySQL */
define('DB_PASSWORD', 'impulso_pruebas');

/** Host de MySQL (es muy probable que no necesites cambiarlo) */
define('DB_HOST', 'localhost');

/** Codificación de caracteres para la base de datos. */
define('DB_CHARSET', 'utf8mb4');

/** Cotejamiento de la base de datos. No lo modifiques si tienes dudas. */
define('DB_COLLATE', '');

/**#@+
 * Claves únicas de autentificación.
 *
 * Define cada clave secreta con una frase aleatoria distinta.
 * Puedes generarlas usando el {@link https://api.wordpress.org/secret-key/1.1/salt/ servicio de claves secretas de WordPress}
 * Puedes cambiar las claves en cualquier momento para invalidar todas las cookies existentes. Esto forzará a todos los usuarios a volver a hacer login.
 *
 * @since 2.6.0
 */
define('AUTH_KEY', 'PiPzJ!b=5y-):^{#P586fu| |{qPKDDb;CxbK1@Z_42/KE5jq;JBVJ*eYXh~S%~/');
define('SECURE_AUTH_KEY', 'a&e[0AO`+[7)fvVX7<i]LvKy H1AOK E^ulfpk/YB*B-I4Ul-=2c$^T1l&]e1Y).');
define('LOGGED_IN_KEY', '8a(&LX$FY.GyjRl5J.LeQ%]S-my.p.FI)qxwI=>`-G&(vK:K0)UHQPm*[Q8a :_,');
define('NONCE_KEY', 'AUhAi.v[5[<[ob7<)P*cWf_.UhT+tj>O3pj E:,aDjj1x5PuD1~hDDSBc/LQ*6*G');
define('AUTH_SALT', 'V$yf|oUUCqF:r?Xudpz5D/I*(hH/>5 XhM6T`?V,/UavivFnZJ#X,}{+4CGp{qFe');
define('SECURE_AUTH_SALT', 'e]wPEmI|KKfbwrt9UZ<08]$*KGn;4|&pp,r_q+L_5aO![gnX{!aD+~4X^5{..50;');
define('LOGGED_IN_SALT', ':pEE,WhJ~EmWoKPoKH1r8Wd%V!*kv:uf0*v<kb!nHNp.Uw#kfUugDFC:XXG (3%0');
define('NONCE_SALT', ']-y.h^;k2~!P=rXfYcjq3>Dk  (ag27]p5Y &7v-Zs,Q1<_(<|y4T&+QGsM?%PK#');

/**#@-*/

/**
 * Prefijo de la base de datos de WordPress.
 *
 * Cambia el prefijo si deseas instalar multiples blogs en una sola base de datos.
 * Emplea solo números, letras y guión bajo.
 */
$table_prefix  = 'wp_';


/**
 * Para desarrolladores: modo debug de WordPress.
 *
 * Cambia esto a true para activar la muestra de avisos durante el desarrollo.
 * Se recomienda encarecidamente a los desarrolladores de temas y plugins que usen WP_DEBUG
 * en sus entornos de desarrollo.
 */
define('WP_DEBUG', false);

/* ¡Eso es todo, deja de editar! Feliz blogging */

/** WordPress absolute path to the Wordpress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

