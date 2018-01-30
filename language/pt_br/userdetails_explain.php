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
// ’ » “ ” …
//

$lang = array_merge($lang, array(
	'USER_DETAILS_SELECT'			=> '&bull;&nbsp;A partir daqui, você pode selecionar os atributos de usuário que deseja exibir.<br />&bull;&nbsp;Esteja ciente de que o número de atributos selecionados pode não caber corretamente na página (isso dependerá da largura do navegador).',

	'ATTRIBUTE'						=> 'Atributo',
	'ATTRIBUTE_EXPLAIN'				=> 'Descrição do atributo',
	'SIZE'							=> 'Tamanho da coluna do atributo',
	'CAN_FILTER'					=> 'Pode filtrar',
	'CLEAR_ATTRIB'					=> 'Limpar atributos',
	'CSV'							=> 'Exportação CSV',

	'USER_ALLOW_PM_EXPLAIN'			=> 'Permita que outros usuários enviem a esse usuário uma mensagem privada.',
	'USER_ALLOW_VIEWONLINE_EXPLAIN'	=> 'O usuário oculta seu status on-line?',
	'USER_ALLOW_VIEWEMAIL_EXPLAIN'	=> 'Um usuário pode entrar em contato com este usuário por e-mail?',
	'USER_ALLOW_MASSEMAIL_EXPLAIN'	=> 'O usuário pode ser contatado por e-mail em massa de um administrador?',
	'USER_AOL_EXPLAIN'				=> 'O endereço AOL do usuário.',
	'USER_AVATAR_EXPLAIN'			=> 'Exibir o avatar do usuário.',
	'USER_AVATAR_TYPE_EXPLAIN'		=> 'O tipo de avatar do usuário.',
	'USER_BIRTHDAY_EXPLAIN'			=> 'Data de nascimento do usuário, se inserido, e idade.',
	'USER_DATE_FORMAT_EXPLAIN'		=> 'O formato no qual o usuário vê a data e a hora.',
	'USER_EMAIL_EXPLAIN'			=> 'O endereço de e-mail do usuário.',
	'USER_EMAILTIME_EXPLAIN'		=> 'A data e hora do último e-mail do usuário.',
	'USER_GROUP_EXPLAIN'			=> 'O grupo padrão do usuário.',
	'USER_ID_EXPLAIN'				=> 'O id do usuário neste forum.',
	'USER_INACTIVE_REASON_EXPLAIN'	=> 'A razão pela qual a conta deste usuário está inativa.',
	'USER_INACTIVE_TIME_EXPLAIN'	=> 'A data e hora em que a conta do usuário ficou inativa.',
	'USER_IP_EXPLAIN'				=> 'O endereço IP do usuário após o registro neste fórum.',
	'USER_JABBER_EXPLAIN'			=> 'O endereço Jabber do usuário.',
	'USER_LANG_EXPLAIN'				=> 'O idioma do usuário.',
	'USER_LASTMARK_EXPLAIN'			=> 'A última vez que o usuário marcou todos os fóruns como lidos.',
	'USER_LAST_PAGE_EXPLAIN'		=> 'A última página que o usuário visitou.',
	'USER_LAST_PRIVMSG_EXPLAIN'		=> 'A data e hora da última mensagem privada do usuário.',
	'USER_LAST_SEARCH_EXPLAIN'		=> 'A data e hora que o usuário usou pela última vez na pesquisa.',
	'USER_LAST_WARNING_EXPLAIN'		=> 'A data em que o usuário recebeu sua última advertência.',
	'USER_LASTPOST_TIME_EXPLAIN'	=> 'A data e hora que o usuário postou pela última vez neste fórum.',
	'USER_LASTVISIT_EXPLAIN'		=> 'A data e hora da última visita do usuário a este fórum.',
	'USER_LOGIN_ATTEMPTS_EXPLAIN'	=> 'O número de tentativas de login falhou que o usuário fez.',
	'USER_NEW_PRIVMSG_EXPLAIN'		=> 'O número de novas mensagens privadas que o usuário possui.',
	'USER_NOTIFY_EXPLAIN'			=> 'Os usuários recebem notificações para novos posts em fóruns em que eles estão inscritos?',
	'USER_NOTIFY_PM_EXPLAIN'		=> 'Os usuários recebem notificações para MP?',
	'USER_NOTIFY_TYPE_EXPLAIN'		=> 'Que tipo de notificações o usuário recebe?',
	'USER_PASS_CHANGE_EXPLAIN'		=> 'A data em que a senha do usuário deve ser alterada.',
	'USER_POSTS_EXPLAIN'			=> 'O número de posts que o usuário fez neste fórum.',
	'USER_RANK_EXPLAIN'				=> 'O rank do usuário.',
	'USER_REGDATE_EXPLAIN'			=> 'A data em que o usuário se registrou neste fórum.',
	'USER_SIG_EXPLAIN'				=> 'Exibir a assinatura do usuário.',
	'USER_STYLE_EXPLAIN'			=> 'O estilo do usuário.<br />NOTA: Este pode não ser o estilo que o usuário vê - depende se a substituição de estilo do usuário foi definida no nível do fórum.',
	'USER_TIMEZONE_EXPLAIN'			=> 'Fuso horário do usuário.',
	'USER_TYPE_EXPLAIN'				=> 'O tipo do usuário.',
	'USER_UNREAD_PRIVMSG_EXPLAIN'	=> 'O número de mensagens privadas não lidas que o usuário possui.',
	'USER_WARNINGS_EXPLAIN'			=> 'O número de advertência que o usuário recebeu.',
));
