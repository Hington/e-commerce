<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en « wp-config.php » et remplir les
 * valeurs.
 *
 * Ce fichier contient les réglages de configuration suivants :
 *
 * Réglages MySQL
 * Préfixe de table
 * Clés secrètes
 * Langue utilisée
 * ABSPATH
 *
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'press10' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost:3306' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/**
 * Type de collation de la base de données.
 * N’y touchez que si vous savez ce que vous faites.
 */
define( 'DB_COLLATE', '' );

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clés secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'ziMhUvqoTOAEfe0nw<}n51.`[,o9a!HObG;=@@tgYy JC_C.fY(uRDq9p1HIj4i_' );
define( 'SECURE_AUTH_KEY',  '*`O!$}OHhY7[c/h1;WqXh^d5Z{ii(Mb,5d@.ww9ydiIO-fB,ltA|8wk=hQ*Zn8i^' );
define( 'LOGGED_IN_KEY',    'BkB__IAveICnYk;=aSw,;1-p^}JtsD_FW?pyHL&-&0x<VtE/&x1xB[3|NcC<R_Y{' );
define( 'NONCE_KEY',        'PwK,=+nP*,/tK5qaK=S&Z!5m+d*hYn+^q$[Koi$@}l-6C?BE!1]:qf+CSf&g>pMn' );
define( 'AUTH_SALT',        'vTR7{|L7Sc,-s0J5Ab3LcZWe/g.gIHi Bn<9jZqZpN`da~E|Nbx|td=iow8+4T<R' );
define( 'SECURE_AUTH_SALT', 'S.Ek~#4c3^r>Y:Ba4JEg=FqB74FpP!Z8>VE1]Ns+P3AmB@2Q5.aL[2xIc#Nr/S.o' );
define( 'LOGGED_IN_SALT',   'QJmygvy3:6pyoT<2u7HGg3PlW=_;yM-kW;>>7C7IDBjy:4QPXM..z8bv}> %cxik' );
define( 'NONCE_SALT',       'Cs&ggM; 54<RMX,FhFJ+I&.9Y/wE?4D{_a[-B}63?Wm5WVEXY5wEKc)^+z44O9%^' );
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
 * Il est fortement recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( ! defined( 'ABSPATH' ) )
  define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once( ABSPATH . 'wp-settings.php' );
