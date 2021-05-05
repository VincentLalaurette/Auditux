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
define( 'DB_NAME', 'audit ux' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',         '?PBcN_sDO&S[y8,p *Q`1ow$r<w@ H=Oi[%r^nJnd9xBfu?.?ohB^[eu@<z=>;Tc' );
define( 'SECURE_AUTH_KEY',  'x1:pYGGijy<db*U4@W}[PE*Cq%0D]*{[~9$x sKW :B*!GZK[I_We3Mp$ruwaO|P' );
define( 'LOGGED_IN_KEY',    ' bbUta{ub/9`zQKPeBxp0O]K17[!`B[AdNN]U<d&~_{]olu@PK9n^h!k+`.w4a<p' );
define( 'NONCE_KEY',        '_x+GlTY8|t-3A#z#o=u%e@U>?R8$&5<R2t@KzNFDn~_L+JY_V(`aGDms{[P%SA?o' );
define( 'AUTH_SALT',        'rtf>yQyaE/$Bk:nUJ{_RCYw(jG9S$pwmFUYrdz 6[.mst]?@zLNt[_1nr7E}rRzz' );
define( 'SECURE_AUTH_SALT', '|)?^YH@m{cbYPjRbV[Xm?y()sCXKbEI$}As5?v3OG]-~.L. 1##.gDPy)^@9OUw+' );
define( 'LOGGED_IN_SALT',   'iH]xyNU`#J770,jVv+i-BH6=V3sv6Sg~y3?K-KfknXGFNX+pK@e&XZG_Y@]rgZVc' );
define( 'NONCE_SALT',       '9{Mny?0Oj4_.[SAk+s&d?L=v]c!64EeJEl#?5&EaiN0X=-~3p~n^wIzw;)+R!~hk' );
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
