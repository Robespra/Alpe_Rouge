<?php
/** Enable W3 Total Cache */
define('WP_CACHE', true); // Added by W3 Total Cache

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
define('DB_NAME', 'visusyne1337');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'visusyne1337');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', 'dot1337');

/** Adresse de l'hébergement MySQL. */
define('DB_HOST', 'mysql5-16.perso');

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
define('AUTH_KEY',         'BHs.CM2Do!hLI]MxDH:m]>/p+,a/dSfXVyjne0vuyAZSAhQE9&G~!7dFNS|jKB;{');
define('SECURE_AUTH_KEY',  'z~MT8-t]wd%$8Hd]u&d-8k{]q^sQ|])@V&-H-kdnV<_*p0,pY[,v-r,KT|5^t>1^');
define('LOGGED_IN_KEY',    ']K0oJeAB%yLoy;XcL6Vr*qyYPn2^f?hTkGo|U|TF=0F_|t+QDQ+9:S-lVv_f:5DO');
define('NONCE_KEY',        'ZrS4v% Ka]G64z$TzxJHRs3Hk|D6SGCE5u8A_V3*y6V1>o?K}Az+a=G;9Ic)+NcE');
define('AUTH_SALT',        ')?7S-UN4{k7f)7xv7m]tRJJ:[&CF%G|2>sL~rq,8mY|t+o^+E:MMu;:(Tgd&BVX#');
define('SECURE_AUTH_SALT', 'J%;J+y>6o4ykY9a/vG,-Q0(|m9aeBnd<;ZC@_L7p4|>%ikWB ty/enq(R^4345NW');
define('LOGGED_IN_SALT',   's4bIEO}.Qmei&D^9#}pzX$4fp6KNJ;f2A3l^!KH95v y3%8@h)K+2M?Q-dRcF^|Y');
define('NONCE_SALT',       '|^Q #[Wu|<2=ZpaaeexR+5LIu|4)-$G1!-|UJx*9-8{c1->PoG?9IEm&*YMH)g24');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique. 
 * N'utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés!
 */
$table_prefix  = 'Alpe_';

/**
 * Langue de localisation de WordPress, par défaut en Anglais.
 *
 * Modifiez cette valeur pour localiser WordPress. Un fichier MO correspondant
 * au langage choisi doit être installé dans le dossier wp-content/languages.
 * Par exemple, pour mettre en place une traduction française, mettez le fichier
 * fr_FR.mo dans wp-content/languages, et réglez l'option ci-dessous à "fr_FR".
 */
define ('WPLANG', 'fr_FR');

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