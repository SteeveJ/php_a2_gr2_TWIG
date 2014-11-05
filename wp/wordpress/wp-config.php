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
define('DB_NAME', 'gwada');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'root');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', '');

/** Adresse de l'hébergement MySQL. */
define('DB_HOST', 'localhost');

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         ',JJj,2C7UYU!ESfm:)Xv!88j]|@<*}xsoThAT6|6>#6=Ge$|rBicJ-n{Q+ NyrVw');
define('SECURE_AUTH_KEY',  '1+V5Y=DGdD/S+-v+/ oVJ/n!)a~l/CGH#CLCtKJ|$G5;gUjgmn[q;KRi$QG YveO');
define('LOGGED_IN_KEY',    '~aH&DF3PeZ`x)l1|r>Z2ptdP~{_D4tS|MZOL<WUP,{,0B^Kk10>JTHUMJ:cJm~D}');
define('NONCE_KEY',        '(rGd&>vy*c)$#NMR%+.S_Thz]D4gOu$o=y8wHG@[<aTj7[AcI2zM,B8z}-`+0,e5');
define('AUTH_SALT',        '|!1,=^X;Wv(ba.8jpra@|UjVKs+9Vz|s:M@dIbh`K~j{Rs>pnJ_K+Iaevhh-j%.+');
define('SECURE_AUTH_SALT', 'I- `ieL~[%ac:N2D+~Ya`9ySQzlriK8(+IKlU6Xx9HH^.XM!(jvk~FeVls_6?[_g');
define('LOGGED_IN_SALT',   'exiE^=a{9(6=oCp zh$KDxtEB|e#2e2(vK3>3m1eX<,8=E]rO-W5ECC%>e_}U!5p');
define('NONCE_SALT',       'y[d(*N{Iua-y|Q~wDRyl(SAlEJz{ 5L|9cx=E3c6`]P8p{^m>q<AjDoe1PCN6g+@');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique. 
 * N'utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés!
 */
$table_prefix  = 'gp_';

/** 
 * Pour les développeurs : le mode deboguage de WordPress.
 * 
 * En passant la valeur suivante à "true", vous activez l'affichage des
 * notifications d'erreurs pendant votre essais.
 * Il est fortemment recommandé que les développeurs d'extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de 
 * développement.
 */ 
define('WP_DEBUG', false); 

/* C'est tout, ne touchez pas à ce qui suit ! Bon blogging ! */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');