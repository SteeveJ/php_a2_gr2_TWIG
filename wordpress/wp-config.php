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
define('DB_NAME', 'guadeloupe');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'root');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', '');

/** Adresse de l'hébergement MySQL. */
define('DB_HOST', 'localhost:3306');

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
define('AUTH_KEY',         '|Y-wY;!x/pX*_z+.FYS?Q}/VA]-]2J{#r8~^(mA}zf+A%|};P12*^x|%`Bs:N1T.');
define('SECURE_AUTH_KEY',  '{=+%N4oxzC:&xa[1-# :orda|;wT?ab]k)=TX~~Q3]|I*7f[3nSpxh-OU!3PDR!@');
define('LOGGED_IN_KEY',    '$$8h^0B;amv6H%xf(Jr:$%-!~edf~m,{}1%&F %XoqMqEug~K^Y.]z|[T d(5?>/');
define('NONCE_KEY',        'OY16Cu$Y30z(|i+R&@P$6nF~[yZPs|c~&L7e69rL19,htTe[9K6GIu* US5gOegy');
define('AUTH_SALT',        'b/t0LX)mp|tM.8RDA(3b&vNoICkBO)#;>mk*n/1H[!pXvK|7l,r|vFd-8W;8;c!]');
define('SECURE_AUTH_SALT', 'WR/|S]>r)`s7S53sbuA12{9Xa-+ 5j}rwd6mdWt tK-x5)WoQk$aLd+f}5Z_o-KE');
define('LOGGED_IN_SALT',   'C<QG!YEgR=4|0%9_oZ kOPd?KR#9,K`(DEmd]U-y4:;<4}PCxmfZRHXK<<;iUb;/');
define('NONCE_SALT',       'xydg(by=FOuzR*Aj|o%)rS!O^W^$-xgY/(-FHulsn}gtH~~FTcoG9ia&`W*D0a60');
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