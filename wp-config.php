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
define( 'DB_NAME', 'gr01-veille' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',         'P$t8Ve`#RRo,Q :,0X3)UqsUvbV6:=*mDQ)}WtM].g<UOk+D4UM2`azy&{II!z*m' );
define( 'SECURE_AUTH_KEY',  'n4Ns(oqe~B;*|=;%1AR-ke5$HkqTn{71l Xfk/9R@$}a>+zJLu z1X6hC|yV7,5Q' );
define( 'LOGGED_IN_KEY',    'R.jEj }uHdg:C.)r8[K$|XVINL@{#I6N#;@;R#~BVLtfmJ[1?WE`$$$.-^=CGtT2' );
define( 'NONCE_KEY',        'Mu4P&mHUdPBaabvuo;YK-YWrO0g#V~>20A]?t5Zn|U?oruk&;? 9Zg fY&aP}d+T' );
define( 'AUTH_SALT',        'C uB9Wc0J}SGA,nWTrW4Rs9aD&QI36J&QmbL{NNj2Dq@(@mO)ln:x W3sS#YlG6@' );
define( 'SECURE_AUTH_SALT', 'z<^C2=A8K!v;Hj;mX>xsKSCrc`Whb(hXXi>.Zl<_fgO(7}*-/KOpr_V!e/8uQ0td' );
define( 'LOGGED_IN_SALT',   'Mk8).u*oVL#O+~)C)N0{7_h/F6 Q{!-*g?DCEXhLWi??mm@7Cn >}LF&zQg<<0p;' );
define( 'NONCE_SALT',       'YLMk|(]YX_.}qHMdy[W,wM0UjYjLZrWWNO|k}h.<:b7xlk!-Cd.[v+ {YS5axgpi' );
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
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
