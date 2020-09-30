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
define( 'DB_NAME', 'news' );

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
define( 'AUTH_KEY',         '|J_&C;n$;i5Xizc6tG3z^Au%oe0xW{r`IkhBZaLyid:4E}e82$q,/W5TsHh:Aj8a' );
define( 'SECURE_AUTH_KEY',  '/!]mc5{Q2?cjpe(s!*GHQKi>A&z2V/I89m_^=1qFAvPb)_m0|6;q3&6]Vw<M+K*v' );
define( 'LOGGED_IN_KEY',    'F XX)>83#0c?d[[hF5{#&j_xmUwKnym=n=^1Qawzz4L/kc:Q@Z$S[|odLU)1!F?*' );
define( 'NONCE_KEY',        'sE#;GJFF6k=e^),RNrDiR)5`|i(yE/_,_y/K9F(%ExbRvVou3[EHBkx:Qo5j;y8L' );
define( 'AUTH_SALT',        'Igmwan_6JZ~h@/.Da43v<?yX-nnk*_ZilBBP<F(d:le`48jdrR~3@_F9C^OO/HYQ' );
define( 'SECURE_AUTH_SALT', 'eWq8UzQs9}Pk&!R;YcU^{}s@>SRS}lStNcelt/JF3{i.EoMy%iXX?N(B`u:RTkp-' );
define( 'LOGGED_IN_SALT',   '|<LLQ}Mk5A:<FiRvWl1K{Tb0=(;3fl3X?tsp`z>(&q}~1G1_&=+13tFmp}I `ByK' );
define( 'NONCE_SALT',       '3:L-u?UOAujuU>7vu/MNy`|Wwf -F:z*ujPW[s`5kggC?ZfU.?.,khyrFXL#4/:(' );
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
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( ! defined( 'ABSPATH' ) )
  define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once( ABSPATH . 'wp-settings.php' );
