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
// ** MySQL settings - You can get this info from your web host ** //
$db = parse_url($_ENV["DATABASE"]);
/** The name of the database for WordPress */
define('DB_NAME', trim($db["path"],"/"));
/** MySQL database username */
define('DB_USER', $db["user"]);
/** MySQL database password */
define('DB_PASSWORD', $db["pass"]);
/** MySQL hostname */
define('DB_HOST', $db["host"]);

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
define('AUTH_KEY', getenv('AUTH_KEY'));
define('SECURE_AUTH_KEY', getenv('SECURE_AUTH_KEY'));
define('LOGGED_IN_KEY', getenv('LOGGED_IN_KEY'));
define('NONCE_KEY', getenv('NONCE_KEY'));
define('AUTH_SALT', getenv('AUTH_SALT'));
define('SECURE_AUTH_SALT', getenv('SECURE_AUTH_SALT'));
define('LOGGED_IN_SALT', getenv('LOGGED_IN_SALT'));
define('NONCE_SALT', getenv('NONCE_SALT'));

/*define( 'AUTH_KEY',         'yZ@k~^j{nA6!gNf?~0Mui?oY5?c3cAYeJp+-v5 0Mz27FKTC]zvE?5Fz?fDd7M. ' );
define( 'SECURE_AUTH_KEY',  '^C4.Hs+t)|v[t:np2i#i(4L(opGEDw4&/JJPtxo4.cGmcD!aU5c#v=e]k4DXUX6g' );
define( 'LOGGED_IN_KEY',    'xS/n2,Y}iek4ce{lYzDu{h7_{5;QE}#RGyKfAg?C:V cdY_{mNfptLcBN!j1wcJ0' );
define( 'NONCE_KEY',        ';V,H@G!uM&Rhgxfz(2zLDEY3tA^z{d+ iK%1D1JM_/RmfCKMHB3{%jyPDd&K7#&~' );
define( 'AUTH_SALT',        'U`ABYh/&qNj@s)D>3<Zp/5^wg?wFsGc{mX/{0YLN,DLn_@yQSc/0{q0ulml/[v^W' );
define( 'SECURE_AUTH_SALT', 'ZC:}*<*t{8O=L74koX/lWo^z+-+</9)nB]~Vk^~msQj{~<znsB<> <@(X3*OaKo]' );
define( 'LOGGED_IN_SALT',   '[gro/Jae|J$SX~SXg!8y@PSS)NSJOt$Kl6Uqg5V^XAkwh|{GIC|CL~;;]O,dMbIk' );
define( 'NONCE_SALT',       '*6+X*:Gu+$wE#(><s(L5*.*>/;!_R,P&o;.v)>pS.LZR.!zjkpKK>Pj=7{WpC,et' );*/
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
