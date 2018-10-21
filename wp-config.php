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

// ** Configurações do MySQL - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define('DB_NAME', 'loja');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'loja');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', 'loja');

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
define('AUTH_KEY',         '`8@NB$2?Dsard6BY2a0Nhf-*zx5=@-P8@yfxnS(<O-=7#V3W?4tL3,k*0V`H(NNt');
define('SECURE_AUTH_KEY',  '7.<VMV9`:&w&jqfSb{1OoJRY=e`As88YLJ@lS!WqYT&Y0l|m5b9s:`VQ4t[]61$C');
define('LOGGED_IN_KEY',    'rykP,_*)b$m9?1btbIhZ[tKM>LzaP}yxz6oXzs}nNm@X@y7-XsP`q6^LfJVo6b[_');
define('NONCE_KEY',        'hpOrtj)`A>o?/78qHO~B5:Q0F^(2fQSDmJ.Q-@LNJmP8sFA[_N8~6,<%@jaMCX>$');
define('AUTH_SALT',        'c/$],9O1Eg[&/JUU~6;jUR5~%3/msC2b_,ps[ML@^J*ft|FRQnY5Xy{J`Mx-xw^,');
define('SECURE_AUTH_SALT', '97=%>g(xKD_O&t->>3KD6WxIIkw<gK;rZG#hsq{v*SH,jT)dxVBT^nc&WK :~79T');
define('LOGGED_IN_SALT',   'nVY?xD6~m*bnt;_y6Vu]Ab,0mxnUw&^5ccWF/h1chaVR%1TjBArywv5<q-1H|kA:');
define('NONCE_SALT',       '`yzk$?`ks[F4xpSRFR!X5|[<.2QF^.5c9XRp`RauF^U&k2h0L}Qhgj5`ey`SAcd5');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix  = 'wp_';

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
