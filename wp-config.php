<?php

/**

 * La configuration de base de votre installation WordPress.

 *

 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,

 * préfixe de table, clefs secrètes, langue utilisée, et ABSPATH.

 * Vous pouvez en savoir plus à leur sujet en allant sur 

 * {@link http://codex.wordpress.org/fr:Modifier_wp-config.php Modifier

 * wp-config.php}. C'est votre hébergeur qui doit vous donner vos

 * codes MySQL.

 *

 * Ce fichier est utilisé par le script de création de wp-config.php pendant

 * le processus d'installation. Vous n'avez pas à utiliser le site web, vous

 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les

 * valeurs.

 *

 * @package WordPress

 */



// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //

/** Nom de la base de données de WordPress. */

define('DB_NAME', 'hight-blink');



/** Utilisateur de la base de données MySQL. */

define('DB_USER', 'root');



/** Mot de passe de la base de données MySQL. */

define('DB_PASSWORD', '');



/** Adresse de l'hébergement MySQL. */

define('DB_HOST', 'localhost');



/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */

define('DB_CHARSET', 'utf8mb4');



/** Type de collation de la base de données. 

  * N'y touchez que si vous savez ce que vous faites. 

  */

define('DB_COLLATE', '');



/**#@+

 * Clefs uniques d'authentification et salage.

 *

 * Remplacez les valeurs par défaut par des phrases uniques !

 * Vous pouvez générer des phrases aléatoires en utilisant 

 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.

 * Vous pouvez modifier ces phrases à n'importe quel moment, afin d'invalider tous les cookies existants.

 * Cela forcera également tous les utilisateurs à se reconnecter.

 *

 * @since 2.6.0

 */

define('AUTH_KEY',         'rq>.1GN{.9=<vBQoxlE{Pyw|B^>swN(tR8d/<+uzE]}>+O*d_y>bj]b-$7-p+e#!');

define('SECURE_AUTH_KEY',  '+0aq3$g&X-x_KN:K@~m5@a2.0!To-!LwBB;/29fK~Bf{=+oS6dFYy}md|IId6b#5');

define('LOGGED_IN_KEY',    '-BB>>[9;8FM$nsf%We))KY@BIgw.}CH6r&de^R55v8iCui~jJZOJ3?+4+_E&@A5g');

define('NONCE_KEY',        'lJIPrHg,I/K(bm6PSS/nAyBzW:uw(4DE)8)|q];>Fv0&!G] y`o50Iy9nBARR$_-');

define('AUTH_SALT',        '&>r:dRyGBcG6D~=HuWCIo7GpN)Zys-`deX/^v7gGt_)w0HD*PVPu7t^G6m:!63$R');

define('SECURE_AUTH_SALT', 'DP4;)8sy+7k}={<,S[_q5#RZeYicsDR]T`12r]n;JHmuz@q{<C+*+[<+iE{`ty&h');

define('LOGGED_IN_SALT',   's,r.@Da.T7?pDfT=z<xp-IZt_]RWVv&[AybBmcQzyf&I3|{Je:2yJ/U$3Fmy(SW7');

define('NONCE_SALT',       ';0XDOF?;=RPa-$c{7t-D_(/SXu{@MU&tx7+i],*@^$xTN6z<OIN!m,0KiA{cV-e-');


/**#@-*/



/**

 * Préfixe de base de données pour les tables de WordPress.

 *

 * Vous pouvez installer plusieurs WordPress sur une seule base de données

 * si vous leur donnez chacune un préfixe unique. 

 * N'utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés!

 */

$table_prefix  = 'iblink_';



/** 

 * Pour les développeurs : le mode deboguage de WordPress.

 * 

 * En passant la valeur suivante à "true", vous activez l'affichage des

 * notifications d'erreurs pendant votre essais.

 * Il est fortemment recommandé que les développeurs d'extensions et

 * de thèmes se servent de WP_DEBUG dans leur environnement de 

 * développement.

 */ 

define('WP_DEBUG', true); 



/* C'est tout, ne touchez pas à ce qui suit ! Bon blogging ! */



/** Chemin absolu vers le dossier de WordPress. */

if ( !defined('ABSPATH') )

	define('ABSPATH', dirname(__FILE__) . '/');



/** Réglage des variables de WordPress et de ses fichiers inclus. */

require_once(ABSPATH . 'wp-settings.php');