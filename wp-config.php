<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clefs secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur 
 * {@link http://codex.wordpress.org/Editing_wp-config.php Modifier
 * wp-config.php} (en anglais). C'est votre hébergeur qui doit vous donner vos
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
define('DB_NAME', 'projetgdnl');

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
define('AUTH_KEY',         'qlcUn}D+ZX.PE9}/%wG^8]SqWsY:G=kd4aZ.8btWIf[,}m3GxN@H&I *b;+?b!iM');
define('SECURE_AUTH_KEY',  'fuew>C!qnFdLU5$vC`S* :k]#IPOV6J>{!+>MF2h #>FX(tZc8e=>>#^z0lLJ`e3');
define('LOGGED_IN_KEY',    '=tknQ`N^)|;_XQ-gkk&mmcs_oOdDM,EXED?YOpSrG!mHnYVkp(^I 2`K/zZFS(bn');
define('NONCE_KEY',        'p)_~Oe5R;H(iR$NPVGG?1BExM~ b uB{W}O`t2bW$@15]3v9q+ 8kqjEVR<h7EI-');
define('AUTH_SALT',        '#%Hk{d`7Hsr7/SZt[6YG`z(-.<,ZS<ZDc-_7+E;Nv-MdZAg*0VR._teWeFFPSejd');
define('SECURE_AUTH_SALT', 'Mqi)>LG&0>1IJj1)dY^VBx:poFK4$ZR$=K+DgwB=<XZKQVH(`+7sku8Dk*I]LlgY');
define('LOGGED_IN_SALT',   'VFd9<Pdja[;w}P7xa`4eSCDBu=qJ!`QqB4^x1!yp0rJ5fJR,{P;W8:-1+BjExRYJ');
define('NONCE_SALT',       '(Bc3tSNEIGohQ+.xZ>Es0j32?x2t=igg4F4$~>RGksMHFs 9}wA%*lf!8D5/9t;3');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique. 
 * N'utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés!
 */
$table_prefix  = 'wp_';

/**
 * Langue de localisation de WordPress, par défaut en Anglais.
 *
 * Modifiez cette valeur pour localiser WordPress. Un fichier MO correspondant
 * au langage choisi doit être installé dans le dossier wp-content/languages.
 * Par exemple, pour mettre en place une traduction française, mettez le fichier
 * fr_FR.mo dans wp-content/languages, et réglez l'option ci-dessous à "fr_FR".
 */
define('WPLANG', 'fr_FR');

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