<?php
/**
*
* @package User Details Extension
* @copyright (c) 2016 david63
* @license GNU General Public License, version 2 (GPL-2.0)
* Brazilian Portuguese translation by eunaumtenhoid (c) 2018 [ver 2.1.1-rc1] (https://github.com/phpBBTraducoes)
*/

/**
* DO NOT CHANGE
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine
//
// Some characters you may want to copy&paste:
// ’ » « “ ” …
//

$lang = array_merge($lang, array(
	'ACP_USER_DETAILS'			=> 'User details',
	'ALL'						=> 'Todos',

	'CLEAR_FILTER'				=> ' Limpar filtros ',

	'DEFAULT_STYLE'				=> '<strong>** %1$s **</strong>',

	'ERROR_EXPLAIN'				=> '<strong>Nota:</strong> Todos os atributos que são cercados por "<strong>**</strong>" indicam que esse atributo para o usuário está ausente do banco de dados ou é inválido.',

	'FILTER_BY'					=> 'Filtrar por',

	'HASH'						=> '#',

	'NO_ATTRIBUTES_SELECTED'	=> 'Nenhum atributos selecionados',
	'NO_DATA'					=> 'O pedido não criou nenhum dado para exibir',
	'NO_GROUP'					=> '<strong>** Nenhum grupo **</strong>',
	'NO_VISIT'					=> 'Nunca visitou',

	'OTHER'						=> 'Outro',

	'TOTAL_USERS'				=> 'Total de usuários',

	'UD_BACK'					=> ' « Voltar para selecionar ',
	'UD_GO'						=> ' Ordenar/Filtrar ',
	'USER_ALLOW_PM'				=> 'Permitir MP',
	'USER_ALLOW_VIEWONLINE'		=> 'Ver online',
	'USER_ALLOW_VIEWEMAIL'		=> 'Ver e-mail',
	'USER_ALLOW_MASSEMAIL'		=> 'E-mail de massa',
	'USER_AOL'					=> 'AOL',
	'USER_AVATAR'				=> 'Avatar',
	'USER_AVATAR_TYPE'			=> 'Tipo de avatar',
	'USER_BIRTHDAY'				=> 'Aniversário',
	'USER_DATE_FORMAT'			=> 'Formato de data',
	'USER_DETAILS_DISPLAY'		=> 'Esta é a exibição dos atributos do usuário que você selecionou.',
	'USER_EMAIL'				=> 'E-mail',
	'USER_EMAILTIME'			=> 'Hora do e-mail',
	'USER_GROUP'				=> 'Grupo',
	'USER_ID'					=> 'ID do usuário',
	'USER_INACTIVE_REASON'		=> 'Razão inativa',
	'USER_INACTIVE_TIME'		=> 'Tempo inativo',
	'USER_IP'					=> 'Ip do usuário',
	'USER_JABBER'				=> 'Jabber',
	'USER_LANG'					=> 'Idioma',
	'USER_LASTMARK'				=> 'Última marca',
	'USER_LAST_PAGE'			=> 'Última página',
	'USER_LAST_PRIVMSG'			=> 'Última mensagem privada',
	'USER_LAST_SEARCH'			=> 'Última pesquisa',
	'USER_LAST_WARNING'			=> 'Última advertência',
	'USER_LASTPOST_TIME'		=> 'Hora do último post',
	'USER_LASTVISIT'			=> 'Ultima visita',
	'USER_LOGIN_ATTEMPTS'		=> 'Tentativas de login',
	'USER_NEW_PRIVMSG'			=> 'Novas mensagens privadas',
	'USER_NOTIFY'				=> 'Notificar post',
	'USER_NOTIFY_PM'			=> 'Notificar MP',
	'USER_NOTIFY_TYPE'			=> 'Tipo de notificação',
	'USER_PASS_CHANGE'			=> 'Mudar de senha',
	'USER_POSTS'				=> 'Posts',
	'USER_RANK'					=> 'Rank',
	'USER_REGDATE'				=> 'Data de registro',
	'USER_SIG'					=> 'Assinatura',
	'USER_STYLE'				=> 'Estilo',
	'USER_TIMEZONE'				=> 'Timezone',
	'USER_TYPE'					=> 'Tipo de usuário',
	'USER_UNREAD_PRIVMSG'		=> 'Mensagens privadas não lidas',
	'USER_WARNINGS'				=> 'Advertência',
	'VERSION'					=> 'Versão',

	// Translators - set these to whatever is most appropriate in your language
	// These are used to populate the filter keys
	'START_CHARACTER'	=> 'A',
	'END_CHARACTER'		=> 'Z',

	'avatar_type' => array(
		AVATAR_UPLOAD				=> 'Enviar Avatar',
		AVATAR_REMOTE				=> 'Avatar remoto',
		AVATAR_GALLERY				=> 'Avatar da galeria',
		'avatar.driver.gravatar'	=> 'Gravatar',
	),

	'inactive_type' => array(
		INACTIVE_REGISTER	=> 'Conta recém-cadastrada',
		INACTIVE_PROFILE	=> 'Detalhes do perfil alterados',
		INACTIVE_MANUAL		=> 'Conta desativada pelo administrador',
		INACTIVE_REMIND		=> 'Forçar a reativação de conta de usuário',
	),

	'month_types' => array(
		'1'  => 'Janeiro',
		'2'  => 'Fevereiro',
		'3'  => 'Março',
		'4'  => 'Abril',
		'5'  => 'Maio',
		'6'  => 'Junho',
		'7'  => 'Julho',
		'8'  => 'Agosto',
		'9'  => 'Setembro',
		'10' => 'Outubro',
		'11' => 'Novembro',
		'12' => 'Dezembro',
	),

	'notify_type' => array(
		NOTIFY_EMAIL	=> 'Email',
		NOTIFY_IM		=> 'Jabber',
		NOTIFY_BOTH		=> 'E-mail & Jabber',
	),

	'user_type' => array(
		USER_NORMAL 	=> 'Normal',
		USER_INACTIVE	=> 'Inativo',
		USER_IGNORE 	=> 'Ignorado',
		USER_FOUNDER 	=> 'Fundador',
	),
));
