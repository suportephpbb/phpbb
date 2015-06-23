<?php
/**
*
* recaptcha [Português Brasileiro]
*
* @copyright (c) phpBB Limited <https://www.phpbb.com>
* @license GNU General Public License, version 2 (GPL-2.0)
*
* For full copyright and license information, please see
* the docs/CREDITS.txt file.
*
* @package language
* @version 2.0.0
* @author Suporte phpBB <contato@suportephpbb.com.br> http://www.suportephpbb.com.br/
* @copyright (c) 2005 phpBB Group, 2014 Suporte phpBB
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
* @Traduzido por: suporte phpBB & Antonio Carlos Doná - segundo as normas do Acordo Ortográfico
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

$lang = array_merge($lang, array(
	'RECAPTCHA_LANG'				=> 'pt',
	'RECAPTCHA_NOT_AVAILABLE'		=> 'Para usar o reCaptcha, você deve criar um registro em <a href="http://www.google.com/recaptcha">www.google.com/recaptcha</a>.',
	'CAPTCHA_RECAPTCHA'				=> 'reCaptcha',
	'RECAPTCHA_INCORRECT'			=> 'O código de confirmação visual escrito estava incorreto',

	'RECAPTCHA_PUBLIC'				=> 'Chave pública do reCaptcha',
	'RECAPTCHA_PUBLIC_EXPLAIN'		=> 'A sua chave pública do reCaptcha. Chaves podem ser obtidas em <a href="http://recaptcha.net">reCaptcha.net</a>.',
	'RECAPTCHA_PRIVATE'				=> 'Chave privada do reCaptcha',
	'RECAPTCHA_PRIVATE_EXPLAIN'		=> 'A sua chave privada do reCaptcha. Chaves podem ser obtidas em <a href="http://www.google.com/recaptcha">www.google.com/recaptcha</a>.',

	'RECAPTCHA_EXPLAIN'				=> 'No esforço de prevenir submissões automáticas, nós solicitamos que você escreva ambas as palavras exibidas dentro da caixa de texto.',
	'RECAPTCHA_SOCKET_ERROR'		=> 'Houve um problema de conexão com o serviço RECAPTCHA: não foi possível abrir socket. Tente novamente mais tarde.',
));

?>