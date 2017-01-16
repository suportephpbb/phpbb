<?php
/**
*
* This file is part of the phpBB Forum Software package.
*
* @copyright (c) phpBB Limited <https://www.phpbb.com>
* @license GNU General Public License, version 2 (GPL-2.0)
*
* For full copyright and license information, please see
* the docs/CREDITS.txt file.
*
*/

if (!defined('IN_PHPBB'))
{
	exit;
}

/**
* DO NOT CHANGE
*/
if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine

$lang = array_merge($lang, array(
	'CLI_CONFIG_CANNOT_CACHED'			=> 'Defina esta opção se a opção de configuração muda com muita frequência para ser eficiente em cache.',
	'CLI_CONFIG_CURRENT'				=> 'Valor atual configuração, use 0 e 1 para especificar valores booleanos',
	'CLI_CONFIG_DELETE_SUCCESS'			=> 'Configuração eliminada com sucesso %s.',
	'CLI_CONFIG_NEW'					=> 'Novo valor de configuração, use 0 e 1 para especificar valores booleanos',
	'CLI_CONFIG_NOT_EXISTS'				=> 'Configuração %s não existe',
	'CLI_CONFIG_OPTION_NAME'			=> 'O nome da opção de configuração',
	'CLI_CONFIG_PRINT_WITHOUT_NEWLINE'	=> 'Defina esta opção se o valor deve ser impresso sem uma nova linha no final.',
	'CLI_CONFIG_INCREMENT_BY'			=> 'Valor de incrementar de',
	'CLI_CONFIG_INCREMENT_SUCCESS'		=> 'Configuração %s incrementada com sucesso',
	'CLI_CONFIG_SET_FAILURE'			=> 'Não foi possível definir a configuração %s',
	'CLI_CONFIG_SET_SUCCESS'			=> 'Configuração definida com sucesso %s',

	'CLI_DESCRIPTION_CRON_LIST'					=> 'Imprime a lista de tarefas Cron agendadas prontas e não prontas.',
	'CLI_DESCRIPTION_CRON_RUN'					=> 'Executa todas as tarefas Cron prontas agendadas.',
	'CLI_DESCRIPTION_CRON_RUN_ARGUMENT_1'		=> 'Nome da tarefa a ser executada',
	'CLI_DESCRIPTION_DB_LIST'					=> 'Lista todas as migrações instaladas e disponíveis.',
	'CLI_DESCRIPTION_DB_MIGRATE'				=> 'Atualiza o Banco de Dados através da aplicação de migrações.',
	'CLI_DESCRIPTION_DB_REVERT'					=> 'Reverter uma migração.',
	'CLI_DESCRIPTION_DELETE_CONFIG'				=> 'Elimina uma opção de configuração',
	'CLI_DESCRIPTION_DISABLE_EXTENSION'			=> 'Desativa a extensão especificada.',
	'CLI_DESCRIPTION_ENABLE_EXTENSION'			=> 'Ativa a extensão especificada.',
	'CLI_DESCRIPTION_FIND_MIGRATIONS'			=> 'Encontra migrações não dependentes.',
	'CLI_DESCRIPTION_GET_CONFIG'				=> 'Obtém o valor de uma opção de configuração',
	'CLI_DESCRIPTION_INCREMENT_CONFIG'			=> 'Aumenta o valor inteiro de uma opção de configuração',
	'CLI_DESCRIPTION_LIST_EXTENSIONS'			=> 'Lista todas as Extensões no Banco de Dados e no sistema de arquivos.',
	
	'CLI_DESCRIPTION_OPTION_ENV'				=> 'O nome do ambiente.',
	'CLI_DESCRIPTION_OPTION_SAFE_MODE'			=> 'Executar em modo de segurança (sem extensões).',
	'CLI_DESCRIPTION_OPTION_SHELL'				=> 'Iniciar o modo shell.',
	'CLI_DESCRIPTION_PURGE_EXTENSION'			=> 'Limpa a extensão especificada.',

	'CLI_DESCRIPTION_REPARSER_LIST'						=> 'Lista os tipos de texto que podem ser reparados.',
	'CLI_DESCRIPTION_REPARSER_AVAILABLE'				=> 'Reparadores disponíveis:',
	'CLI_DESCRIPTION_REPARSER_REPARSE'					=> 'Repara o texto armazenado com os serviços de text_formatter atuais.',
	'CLI_DESCRIPTION_REPARSER_REPARSE_ARG_1'			=> 'Tipo de texto a ser analisado. Deixe em branco para analisar tudo.',
	'CLI_DESCRIPTION_REPARSER_REPARSE_OPT_DRY_RUN'		=> 'Não salve nenhuma alteração; Apenas imprima o que aconteceria',
	'CLI_DESCRIPTION_REPARSER_REPARSE_OPT_RANGE_MIN'	=> 'Menor ID do registro para processo',
	'CLI_DESCRIPTION_REPARSER_REPARSE_OPT_RANGE_MAX'	=> 'Maior ID de registro para processo',
	'CLI_DESCRIPTION_REPARSER_REPARSE_OPT_RANGE_SIZE'	=> 'Número aproximado de registros a processar por vez',
	'CLI_DESCRIPTION_REPARSER_REPARSE_OPT_RESUME'		=> 'Iniciar reparação onde a última execução foi interrompida',

	'CLI_DESCRIPTION_RECALCULATE_EMAIL_HASH'			=> 'Recalcula a coluna user_email_hash da tabela de usuários.',

	'CLI_DESCRIPTION_SET_ATOMIC_CONFIG'					=> 'Define o valor de uma opção de configuração somente se o antigo corresponder ao valor atual',
	'CLI_DESCRIPTION_SET_CONFIG'						=> 'Define o valor de uma opção de configuração',

	'CLI_DESCRIPTION_THUMBNAIL_DELETE'					=> 'Excluir todas as miniaturas existentes.',
	'CLI_DESCRIPTION_THUMBNAIL_GENERATE'				=> 'Gerar todas as miniaturas em falta.',
	'CLI_DESCRIPTION_THUMBNAIL_RECREATE'				=> 'Recriar todas as miniaturas.',

	'CLI_DESCRIPTION_UPDATE_CHECK'					=> 'Verifique se o phpBB está atualizado.',
	'CLI_DESCRIPTION_UPDATE_CHECK_ARGUMENT_1'		=> 'Nome da extensão a verificar (se todos, verifica todas as extensões)',
	'CLI_DESCRIPTION_UPDATE_CHECK_OPTION_CACHE'		=> 'Executar comando de verificação com cache.',
	'CLI_DESCRIPTION_UPDATE_CHECK_OPTION_STABILITY'	=> 'Executar comando escolhendo para verificar somente versões estáveis ou instáveis.',

	'CLI_ERROR_INVALID_STABILITY' => '"%s" não é uma estabilidade válida.',

	'CLI_DESCRIPTION_USER_ACTIVATE'				=> 'Ativar (ou desativar) uma conta de usuário.',
	'CLI_DESCRIPTION_USER_ACTIVATE_USERNAME'	=> 'Nome de usuário da conta para ativar.',
	'CLI_DESCRIPTION_USER_ACTIVATE_DEACTIVATE'	=> 'Desativar a conta do usuário',
	'CLI_DESCRIPTION_USER_ACTIVATE_ACTIVE'		=> 'O usuário já está ativo.',
	'CLI_DESCRIPTION_USER_ACTIVATE_INACTIVE'	=> 'O usuário já está inativo.',
	'CLI_DESCRIPTION_USER_ADD'					=> 'Adicionar um novo usuário.',
	'CLI_DESCRIPTION_USER_ADD_OPTION_USERNAME'	=> 'Nome de usuário do novo usuário',
	'CLI_DESCRIPTION_USER_ADD_OPTION_PASSWORD'	=> 'Senha do novo usuário',
	'CLI_DESCRIPTION_USER_ADD_OPTION_EMAIL'		=> 'Endereço de e-mail do novo usuário',
	'CLI_DESCRIPTION_USER_ADD_OPTION_NOTIFY'	=> 'Enviar e-mail de ativação da conta para o novo usuário (não enviado por padrão)',
	'CLI_DESCRIPTION_USER_DELETE'				=> 'Excluir uma conta de usuário.',
	'CLI_DESCRIPTION_USER_DELETE_USERNAME'		=> 'Nome de usuário do usuário a ser excluído',
	'CLI_DESCRIPTION_USER_DELETE_OPTION_POSTS'	=> 'Exclua todas as postagens do usuário. Sem esta opção, as mensagens do utilizador serão mantidas.',
	'CLI_DESCRIPTION_USER_RECLEAN'				=> 'Re-limpe nomes de usuário.',

	'CLI_EXTENSION_DISABLE_FAILURE'		=> 'Não foi possível desativar a extensão %s',
	'CLI_EXTENSION_DISABLE_SUCCESS'		=> 'A Extensão %s foi desativada com sucesso',
	'CLI_EXTENSION_ENABLE_FAILURE'		=> 'Não foi possível ativar a Extensão %s',
	'CLI_EXTENSION_ENABLE_SUCCESS'		=> 'Extensão %s ativada com sucesso',
	'CLI_EXTENSION_NAME'				=> 'Nome da Extensão',
	'CLI_EXTENSION_PURGE_FAILURE'		=> 'Não foi possível limpar a Extensão %s',
	'CLI_EXTENSION_PURGE_SUCCESS'		=> 'A Extensão %s foi limpa com sucesso',
	'CLI_EXTENSION_UPDATE_FAILURE'		=> 'Não foi possível atualizar a extensão %s',
	'CLI_EXTENSION_UPDATE_SUCCESS'		=> 'Extensão %s atualizada com êxito',
	'CLI_EXTENSION_NOT_FOUND'			=> 'Não foram encontradas Extensões.',
	'CLI_EXTENSIONS_AVAILABLE'			=> 'Disponível',
	'CLI_EXTENSIONS_DISABLED'			=> 'Desativado',
	'CLI_EXTENSIONS_ENABLED'			=> 'Ativado',

	'CLI_FIXUP_RECALCULATE_EMAIL_HASH_SUCCESS'	=> 'Recalculado com sucesso todos os hashes de e-mail.',
	
	'CLI_MIGRATION_NAME'					=> 'Nome da migração, incluindo o nome espaço (use barras em vez de barras invertidas para evitar problemas).',
	'CLI_MIGRATIONS_AVAILABLE'				=> 'Migrações disponíveis',
	'CLI_MIGRATIONS_INSTALLED'				=> 'Migrações instaladas',
	'CLI_MIGRATIONS_ONLY_AVAILABLE'		    => 'Mostrar apenas as migrações disponíveis',
	'CLI_MIGRATIONS_EMPTY'                  => 'Sem migrações.',

	'CLI_REPARSER_REPARSE_REPARSING'		=> 'Reparando %1$s (intervalo %2$d..%3$d)',
	'CLI_REPARSER_REPARSE_REPARSING_START'	=> 'Reparando %s...',
	'CLI_REPARSER_REPARSE_SUCCESS'			=> 'Reparação terminou com sucesso',

	// In all the case %1$s is the logical name of the file and %2$s the real name on the filesystem
	// eg: big_image.png (2_a51529ae7932008cf8454a95af84cacd) generated.
	'CLI_THUMBNAIL_DELETED'		=> '%1$s (%2$s) excluido.',
	'CLI_THUMBNAIL_DELETING'	=> 'Excluindo miniaturas',
	'CLI_THUMBNAIL_SKIPPED'		=> '%1$s (%2$s) ignorado.',
	'CLI_THUMBNAIL_GENERATED'	=> '%1$s (%2$s) gerado.',
	'CLI_THUMBNAIL_GENERATING'	=> 'Gerando miniaturas',
	'CLI_THUMBNAIL_GENERATING_DONE'	=> 'Todas as miniaturas foram regeneradas.',
	'CLI_THUMBNAIL_DELETING_DONE'	=> 'Todas as miniaturas foram excluídas.',

	'CLI_THUMBNAIL_NOTHING_TO_GENERATE'	=> 'Nenhuma miniatura para gerar.',
	'CLI_THUMBNAIL_NOTHING_TO_DELETE'	=> 'Nenhuma miniatura para excluir.',

	'CLI_USER_ADD_SUCCESS'		=> 'Usuário adicionado com êxito %s.',
	'CLI_USER_DELETE_CONFIRM'	=> 'Tem certeza de que deseja excluir ‘%s’? [y/N]',
	'CLI_USER_RECLEAN_START'	=> 'Re-limpando de nomes de usuário',
	'CLI_USER_RECLEAN_DONE'		=> [
		0	=> 'Re-limpeza completa. Nenhum nome de usuário necessário para ser limpo.',
		1	=> 'Re-limpeza completa. O nome de usuário %d foi limpo',
		2	=> 'Re-limpeza completa. %d nomes de usuários foram limpos.',
	],
));

// Additional help for commands.
$lang = array_merge($lang, array(
	'CLI_HELP_CRON_RUN'			=> $lang['CLI_DESCRIPTION_CRON_RUN'] . ' Opcionalmente, você pode especificar um nome de uma tarefa cron para executar apenas a tarefa cron especificada.',
	'CLI_HELP_USER_ACTIVATE'	=> 'Ativar uma conta de usuário ou desativar uma conta usando a opção <info>--deactivate</info>.
Para enviar opcionalmente um email de ativação ao usuário, use a opção <info>--send-email</info>.',
	'CLI_HELP_USER_ADD'			=> 'O comando <info>%command.name%</info> adiciona um novo usuário:
Se este comando for executado sem opções, você será solicitado a inseri-los.
Para enviar um e-mail para o novo usuário, use o opção <info>--send-email</info>.',
	'CLI_HELP_USER_RECLEAN'		=> 'Re-limpeza de nome de usuários irá verificar todos os nomes de usuário armazenados e garantir versões limpas também são armazenados. Nomes de usuário limpos são uma forma insensível a maiúsculas e minúsculas, NFC normalizado e transformado em ASCII.',
	
));
