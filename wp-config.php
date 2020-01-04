<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link http://codex.wordpress.org/fr:Modifier_wp-config.php Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'azwinklr_mairie_menneville' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'azwinklr' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'Azwinklr04!' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'mysql-azwinklr.alwaysdata.net' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Type de collation de la base de données.
  * N’y touchez que si vous savez ce que vous faites.
  */
define('DB_COLLATE', '');

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         ' #ytA5tg1gW}NgvHLgLNx67@C25_oe&#EBhAeo{{`#1=eW2/#abN2sHyN~TtEEVI' );
define( 'SECURE_AUTH_KEY',  'Gg}g_liIJIYUMVATW9dWZKb:idN^GbyvX_:5P^l(]<cJ,w|xp8e~m-b,B9i+`,%4' );
define( 'LOGGED_IN_KEY',    'zJ>(ti[@Tj|r~3YO*kiA*!#*xJAOuk 9Knfu=c)BtRX}t43?HL+M@e!Wk*QGvoHY' );
define( 'NONCE_KEY',        'wojs/:~G!S*ahwOVlZIM8[WxA|52Nup=B1SKxMx+jVE2OV^y[#CX88dMDw] )Ml9' );
define( 'AUTH_SALT',        'D)3?nDquS43r4h3G|i3F9)Z,7Av%<]!]7/`q+z~ _~W/(bu2<YjKhSdkpFN)}CQx' );
define( 'SECURE_AUTH_SALT', '>&MGY;pVQh<Qol@GfIri&Hww0S;|UC[KT=KY1{}*H*E#Gg{#^e*D4zA7xZoR(#JU' );
define( 'LOGGED_IN_SALT',   'I*:]8l/GLVjc;K*B]MCQx#2$VJdL:2X/~1DxKM~7yqi)Ko[GGQiF;M,<xkgXj&F5' );
define( 'NONCE_SALT',       'MYgAV0-8Okyh<+g.~FuD6I]]J_C%q0ZY5N$JTsg&S|CQ35L)a-=RWljngnQIz;Fc' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'wp_';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortemment recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', true);

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
