<?php
/**
 * As configurações básicas do WordPress
 *
 * O script de criação wp-config.php usa esse arquivo durante a instalação.
 * Você não precisa usar o site, você pode copiar este arquivo
 * para "wp-config.php" e preencher os valores.
 *
 * Este arquivo contém as seguintes configurações:
 *
 * * Configurações do MySQL
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'db_curriculo' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'Augusto SG' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', '123' );

/** Nome do host do MySQL */
define( 'DB_HOST', 'localhost' );

/** Charset do banco de dados a ser usado na criação das tabelas. */
define( 'DB_CHARSET', 'utf8mb4' );

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define( 'DB_COLLATE', '' );

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las
 * usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org
 * secret-key service}
 * Você pode alterá-las a qualquer momento para invalidar quaisquer
 * cookies existentes. Isto irá forçar todos os
 * usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '(w)j`MT;b#7zuL^AH@`r 7ns0VT>aY=#;P{c+*=%gmmy,&9PA%r&D#abjfQp</JH' );
define( 'SECURE_AUTH_KEY',  '*&iRutFMq2u=2/+nm@y2xY(99k|Ga82$8LK(W#:Cj.|[(>s/&ZKsadLZf/ f-9J!' );
define( 'LOGGED_IN_KEY',    's:$+lQS>,aRe>Xxd5`OA^I0$iLJC_7VG6rEO=/DgII!@V`z^/|6Cy2!1H2d!=v(~' );
define( 'NONCE_KEY',        '`Pd|&I$;V:&lL9pR-rYF%~S$5iZ}E?AXu@BPCabgQ_T(%$^Lcn>W53P#27Za6-WV' );
define( 'AUTH_SALT',        'dJH2/)Co%4a,@?fMEWm/Z}<QpyobHvir#wL9K[[PFeJySwcJ!c@l]x:C,<Kh$+Yi' );
define( 'SECURE_AUTH_SALT', '`?I[&Bj@t7=N2>[n?%!wlZ&S9<j67v7:z4sYa]z/4o]jN]t0rcW)g--deM]T+c|,' );
define( 'LOGGED_IN_SALT',   'xP{gn*:vn:G/mdu^91JfpM]MC /evg!!B9uo_j3G^[~f;-qU?~{,~L2u|i:x=,5Y' );
define( 'NONCE_SALT',       't/@k+B+|-Sllt$kF8aN@v]S5EySZ=m@[,/B/6g&rY#!7$>x-vo`d%1PiD::G},Ob' );

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix = 'wp_';

/**
 * Para desenvolvedores: Modo de debug do WordPress.
 *
 * Altere isto para true para ativar a exibição de avisos
 * durante o desenvolvimento. É altamente recomendável que os
 * desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 *
 * Para informações sobre outras constantes que podem ser utilizadas
 * para depuração, visite o Codex.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Configura as variáveis e arquivos do WordPress. */
require_once ABSPATH . 'wp-settings.php';
