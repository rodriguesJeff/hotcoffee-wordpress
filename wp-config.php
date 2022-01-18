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
define( 'DB_NAME', 'wp_jeff' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'root' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', '@Senha123' );

/** Nome do host do MySQL */
define( 'DB_HOST', '127.0.0.1' );

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
define( 'AUTH_KEY',         'l/DoY*L/x0Q(h470:=)E.3H@b<#Ooxedd7BT/H-I+Wv*lm^{EJy@R.]J]omJ!<aO' );
define( 'SECURE_AUTH_KEY',  '6/,d.Z#G-a(LJjpk`k9#!@NH4Yd`1s9vE4+s*n}@s?qv7xBvf[7urai-p0Kq[b{i' );
define( 'LOGGED_IN_KEY',    '4X2kh/QmMo.^f=iNNi+!^3%|?u/4U4,#=>${`Z=rDyKr~gL5f];EWSXv,JX+tZf/' );
define( 'NONCE_KEY',        '?0(q+ht,Ea@uq)F6Qn)fM;z)6E//l`!6xcT^x-}.24Cloj1ZWbjUc!E0S{$j7+J`' );
define( 'AUTH_SALT',        'IGYn3j)Q$qsa!!Q)[E$,F%J0!Z/]rc[q41msn#Y ?4]8IPa0]ez:_{jl]Nt!MEBM' );
define( 'SECURE_AUTH_SALT', '@xRyuPIM$l&$U0pN}@|>kCuI/@j.#Q/uGwt-w8@>.!H1Y3fG=XGZpTkz9nEH446q' );
define( 'LOGGED_IN_SALT',   'D# 6KT# Mbt[Tcytdc9B,VT3YKpZ|XKfa^6.Q2/ N8r[%[YGYzdvPH3$!=YZhI3G' );
define( 'NONCE_SALT',       'qDBrd[nceJWOp`&.[6&9t| e4G|qBhEW>8MN)X@#b&MmQD4A ,<&pM_zh)J@xZP=' );

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
