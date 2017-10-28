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
 * @link https://codex.wordpress.org/pt-br:Editando_wp-config.php
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar estas informações
// com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define('DB_NAME', 'wordpress');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'root');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', '');

/** Nome do host do MySQL */
define('DB_HOST', 'localhost');

/** Charset do banco de dados a ser usado na criação das tabelas. */
define('DB_CHARSET', 'utf8mb4');

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define('DB_COLLATE', '');

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
define('AUTH_KEY',         '/vEa?6n)m1&A{E&s?0I<H7*#IMa6-5BJP;l8{W8A})Fnyu&yl $6np4`qWYVYK3[');
define('SECURE_AUTH_KEY',  'jsMp<oMs<kjSBSw,+lW|fp$F|{uxH4jL/60#*1[S5ci6blgr,n]ufN;){!TK4Y $');
define('LOGGED_IN_KEY',    ':%7)^t0U*AlPC+qF.Aoa::deR!5uGaB=q>A<nfy_h2IA`QjAnWwpSAzF&h::7Wo{');
define('NONCE_KEY',        'Kmp3>1]4Dri#8+PtJmOZM1)N+Y|En;UN6f;WN@3}x95Y(gX)MtflwkgC#3&GU d(');
define('AUTH_SALT',        'lG&^q(e0[nLH.tu1@{3L[+bsqp{s2-Hi{Q=eLcGO1AZKasL|h7zC+C3U@`sPvwf-');
define('SECURE_AUTH_SALT', 'BY:cPf%kO,X~4gOM1Gz**s(MkNvB[<5V8&LS6@+RU]$xMtMtbSC]o!1h;Np6:iRh');
define('LOGGED_IN_SALT',   'R)D8RdQ<8yo$Vw}jc~f9y@?Gpdh}mhn3ItnyS#>fSqf@655AlE8KIg|R)HG,<}I.');
define('NONCE_SALT',       'N}+bD8:R`Rn4?[SV3~)`i3PO3f_@b^z1_uaK[.]^uPt+N0Q6UmWpA.@ij]S4xQg6');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix  = 'vf_';

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
 * @link https://codex.wordpress.org/pt-br:Depura%C3%A7%C3%A3o_no_WordPress
 */
define('WP_DEBUG', false);

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Configura as variáveis e arquivos do WordPress. */
require_once(ABSPATH . 'wp-settings.php');
