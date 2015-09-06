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
	'ADMIN_CONFIG'						=> 'Configuração de administração',
	'ADMIN_PASSWORD'					=> 'Senha do administrador',
	'ADMIN_PASSWORD_CONFIRM'			=> 'Confirmar senha do administrador',
	'ADMIN_PASSWORD_EXPLAIN'			=> 'Por favor, escreva uma senha que tenha entre 6 e 30 caracteres.',
	'ADMIN_TEST'						=> 'Verificar as configurações de administração',
	'ADMIN_USERNAME'					=> 'Nome de usuário do administrador',
	'ADMIN_USERNAME_EXPLAIN'			=> 'Por favor, escreva um nome de usuário que tenha entre 3 e 20 caracteres.',
	'APP_MAGICK'						=> 'Suporte imagemagick [ Anexos ]',
	'AUTHOR_NOTES'						=> 'Notas do autor<br />» %s',
	'AVAILABLE'							=> 'Disponível',
	'AVAILABLE_CONVERTORS'				=> 'Conversores disponíveis',

	'BEGIN_CONVERT'						=> 'Iniciar Conversão',
	'BLANK_PREFIX_FOUND'				=> 'Uma pesquisa em seu banco de dados encontrou uma instalação válida sem a utilização de um prefixo para as tabelas.',
	'BOARD_NOT_INSTALLED'				=> 'Nenhuma instalação foi encontrada',
	'BOARD_NOT_INSTALLED_EXPLAIN'		=> 'Para realizar a conversão você precisa ter uma instalação padrão do phpBB3. Por favor, visite a página <a href="%s">Instalando pela primeira vez o phpBB3</a> para mais informações.',
	'BACKUP_NOTICE'						=> 'Por favor, faça um backup do seu fórum antes de atualizá-lo, para o caso de surgirem problemas durante o processo de atualização.',

	'CATEGORY'							=> 'Categoria',
	'CACHE_STORE'						=> 'Tipo de cache',
	'CACHE_STORE_EXPLAIN'				=> 'O local onde os dados serão salvos, arquivos de sistema são preferíveis.',
	'CAT_CONVERT'						=> 'Converter',
	'CAT_INSTALL'						=> 'Instalar',
	'CAT_OVERVIEW'						=> 'Geral',
	'CAT_UPDATE'						=> 'Atualizar',
	'CHANGE'							=> 'Alterar',
	'CHECK_TABLE_PREFIX'				=> 'Por favor, verifique o prefixo das tabelas e tente novamente mais tarde.',
	'CLEAN_VERIFY'						=> 'Limpando e verificando a estrutura final',
    'CLEANING_USERNAMES'				=> 'Limpando nomes de usuários',
	'COLLIDING_CLEAN_USERNAME'			=> '<strong>%s</strong> é o nome de usuário a ser limpo para:',
	'COLLIDING_USERNAMES_FOUND'			=> 'Nomes de usuário em colisão foram encontrados no seu antigo painel. Para completar esta conversão, por favor, exclua ou renomeie estes usuários para um nome de usuário único para cada um dos citados.',
	'COLLIDING_USER'					=> '» id do usuário: <strong>%d</strong> nome de usuário: <strong>%s</strong> (%d mensagens)',
	'CONFIG_CONVERT'					=> 'Convertendo a configuração',
	'CONFIG_FILE_UNABLE_WRITE'			=> 'Não foi possível escrever o arquivo de configuração. Modos alternativos para a criação deste arquivo serão exibidos abaixo.',
	'CONFIG_FILE_WRITTEN'				=> 'O arquivo de configuração foi escrito, você pode prosseguir para o próximo passo de sua instalação.',
	'CONFIG_PHPBB_EMPTY'				=> 'A variável de configuração do phpBB3 para “%s” está vazia.',
	'CONFIG_RETRY'						=> 'Tentar novamente',
	'CONTINUE_CONVERT'					=> 'Continuar a conversão',
	'CONTINUE_CONVERT_BODY'				=> 'Uma tentativa de conversão prévia foi encontrada. Você deve escolher entre iniciar uma nova conversão ou continuar a previamente interrompida.',
	'CONTINUE_LAST'						=> 'Continuar com as últimas atualizações',
	'CONTINUE_OLD_CONVERSION'			=> 'Continuar conversão previamente interrompida',
	'CONVERT'							=> 'Converter',
	'CONVERT_COMPLETE'					=> 'Conversão concluída',
	'CONVERT_COMPLETE_EXPLAIN'			=> 'Você converteu o seu fórum para o phpBB 3.1. com sucesso. Você pode já pode efetuar o login e <a href="../">acessar o seu painel</a>. Por favor, certifique-se de que as suas configurações foram transferidas corretamente antes de ativar o seu fórum excluindo o diretório de instalação do sistema. E ainda, lembre-se de que você pode solicitar ajuda online através da <a href="https://www.phpbb.com/support/docs/en/3.1/ug/">Documentação do phpBB3</a>, no <a href="https://www.phpbb.com/community/viewforum.php?f=466">phpBB.com support forums</a> e ainda no <a href="http://www.suportephpbb.com.br/">Suporte Brasileiro ao phpBB</a>.',
	'CONVERT_INTRO'						=> 'Bem-vindo à conversão unificada do phpBB',
	'CONVERT_INTRO_BODY'				=> 'Aqui você pode importar os dados de outros sistemas de fóruns instalados. A lista abaixo exibe todos os módulos de conversão disponíveis. Se não existe um conversor na lista para o código de fórum que você deseja converter, por favor, verifique em nosso website onde outros conversores podem estar disponíveis para download.',
	'CONVERT_NEW_CONVERSION'			=> 'Nova conversão',
	'CONVERT_NOT_EXIST'					=> 'O conversor selecionado não existe.',
	'CONVERT_OPTIONS'          	 		=> 'Opções',
	'CONVERT_SETTINGS_VERIFIED'			=> 'A informação de que você disponibilizou foi verificada. Para iniciar a conversão, aperte o botão abaixo.',
	'CONV_ERR_FATAL'					=> 'Erro fatal na conversão',

	'CONV_ERROR_ATTACH_FTP_DIR'			=> 'O envio de anexos por FTP está ativo no seu painel antigo. Desative a opção de envio por FTP, crie um diretório válido e envie todos os arquivos de anexos para este novo diretório acessível. Após concluir esta operação, reinicie o seu conversor.',
	'CONV_ERROR_CONFIG_EMPTY'			=> 'Não foram encontradas informações de configuração válidas para a conversão.',
	'CONV_ERROR_FORUM_ACCESS'			=> 'Não foi possível adquirir as informações do fórum.',
	'CONV_ERROR_GET_CATEGORIES'			=> 'Não foi possível adquirir as categorias.',
	'CONV_ERROR_GET_CONFIG'				=> 'Não foi possível adquirir a configuração do fórum.',
	'CONV_ERROR_COULD_NOT_READ'			=> 'Não foi possível acessar/ler "%s".',
	'CONV_ERROR_GROUP_ACCESS'			=> 'Não foi possível adquirir as informações de autenticação dos grupos.',
	'CONV_ERROR_INCONSISTENT_GROUPS'	=> 'Foi encontrada uma inconsistência na tabela de grupos em add_bots() - você precisa adicionar todos os grupos especiais manualmente.',
	'CONV_ERROR_INSERT_BOT'				=> 'Não foi possível inserir o bot na tabela de usuários.',
	'CONV_ERROR_INSERT_BOTGROUP'		=> 'Não foi possível inserir o bot na tabela de bots.',
	'CONV_ERROR_INSERT_USER_GROUP'		=> 'Não foi possível inserir o usuário na tabela user_group.',
	'CONV_ERROR_MESSAGE_PARSER'			=> 'Mensagem de erro',
	'CONV_ERROR_NO_AVATAR_PATH'			=> 'Nota ao desenvolvedor: você precisa especificar $convertor[\'avatar_path\'] para utilizar %s.',
	'CONV_ERROR_NO_FORUM_PATH'			=> 'O local relativo aos arquivos do fórum não foi especificado.',
	'CONV_ERROR_NO_GALLERY_PATH'		=> 'Nota ao desenvolvedor: você precisa especificar $convertor[\'avatar_gallery_path\'] para utilizar %s.',
	'CONV_ERROR_NO_GROUP'				=> 'O grupo "%1$s" não foi encontrado em %2$s.',
	'CONV_ERROR_NO_RANKS_PATH'			=> 'Nota ao desenvolvedor: você precisa especificar $convertor[\'ranks_path\'] para utilizar %s.',
	'CONV_ERROR_NO_SMILIES_PATH'		=> 'Nota ao desenvolvedor: você precisa especificar $convertor[\'smilies_path\'] para utilizar %s.',
	'CONV_ERROR_NO_UPLOAD_DIR'			=> 'Nota ao desenvolvedor: você precisa especificar $convertor[\'upload_path\'] para utilizar %s.',
	'CONV_ERROR_PERM_SETTING'			=> 'Não foi possível inserir ou atualizar as configurações de permissões.',
	'CONV_ERROR_PM_COUNT'				=> 'Não foi possível selecionar as pastas de mensagens privadas.',
	'CONV_ERROR_REPLACE_CATEGORY'		=> 'Não foi possível inserir um novo fórum substituindo uma categoria antiga.',
	'CONV_ERROR_REPLACE_FORUM'			=> 'Não foi possível inserir um novo fórum substituindo um fórum antigo.',
	'CONV_ERROR_USER_ACCESS'			=> 'Não foi possível adquirir as informações de autenticação dos usuários.',
	'CONV_ERROR_WRONG_GROUP'			=> 'Erro no grupo "%1$s" definido em %2$s.',
	'CONV_OPTIONS_BODY'                 => 'Esta página recebe as informações necessárias para acessar a fonte do painel. Escreva as informações do banco de dados de seu fórum anterior; a conversão não irá alterar nenhuma informação no banco de dados informado abaixo. A fonte do painel deverá ser desativada para permitir uma conversão consistente.',
	'CONV_SAVED_MESSAGES'				=> 'Mensagens salvas',

	'COULD_NOT_COPY'					=> 'Não foi possível copiar o arquivo <strong>%1$s</strong> para <strong>%2$s</strong><br /><br />Verifique se o diretório de destino existe e possui permissão de escrita no servidor.',
	'COULD_NOT_FIND_PATH'				=> 'Não foi possível encontrar o local para o seu fórum anterior. Por favor, verifique as suas configurações e tente novamente.<br />» O local especificado foi %s.',

	'DBMS'								=> 'Tipo de banco de dados',
	'DB_CONFIG'							=> 'Configuração do banco de dados',
	'DB_CONNECTION'						=> 'Conexão do banco de dados',
	'DB_ERR_INSERT'						=> 'Erro ao processar a query <code>INSERT</code>.',
	'DB_ERR_LAST'						=> 'Erro ao processar <var>query_last</var>.',
	'DB_ERR_QUERY_FIRST'				=> 'Erro ao executar <var>query_first</var>.',
	'DB_ERR_QUERY_FIRST_TABLE'			=> 'Erro ao executar <var>query_first</var>, %s ("%s").',
	'DB_ERR_SELECT'						=> 'Erro ao executar a query <code>SELECT</code>.',
	'DB_HOST'							=> 'Nome do servidor do banco de dados ou DSN',
	'DB_HOST_EXPLAIN'					=> 'DSN significa "Data Source Name" e é relevante apenas para instalações ODBC. No PostgreSQL, use localhost para conectar no servidor local via domínio socket UNIX e 127.0.0.1 para conectar via TCP. Para o SQLite, insira o caminho completo para o seu arquivo de banco de dados.',
	'DB_NAME'							=> 'Nome do banco de dados',
	'DB_PASSWORD'						=> 'Senha do banco de dados',
	'DB_PORT'							=> 'Porta do servidor do banco de dados',
	'DB_PORT_EXPLAIN'					=> 'Deixe em branco a menos que você saiba se o servidor utiliza outra porta que não seja a padrão.',
	'DB_UPDATE_NOT_SUPPORTED'			=> 'Desculpe, mas este script não suporta atualizações de versões do phpBB inferiores a "%1$s". A versão atualmente instalada em seus fóruns é a "%2$s". Por favor, atualize para uma versão posterior antes de executar este script. Assistência gratuita encontra-se disponível nos fóruns de suporte do phpBB.com e SuportephpBB.com.br.',
	'DB_USERNAME'						=> 'Nome de usuário do banco de dados',
	'DB_TEST'							=> 'Testar conexão',
	'DEFAULT_LANG'						=> 'Idioma padrão',
	'DEFAULT_PREFIX_IS'					=> 'O conversor não pôde encontrar tabelas com o prefixo especificado. Por favor, verifique se você escreveu as informações corretas do painel que está convertendo. O prefixo padrão para a tabela %1$s é <strong>%2$s</strong>.',
	'DEV_NO_TEST_FILE'					=> 'Não foi especificado um valor para a variável test_file no conversor. Se você é usuário deste conversor, e não deveria estar vendo este erro, por favor, contate o autor do conversor. Se você é o autor deste conversor, você deve especificar o nome de um arquivo que exista no fórum de destino para que seja possível a verificação de um diretório.',
	'DIRECTORIES_AND_FILES'				=> 'Configuração de arquivo e diretório',
	'DISABLE_KEYS'						=> 'Desativando chaves',
	'DLL_FTP'							=> 'Suporte à FTP remoto [ Instalação ]',
	'DLL_GD'							=> 'Suporte à gráficos GD [ Confirmação Visual ]',
	'DLL_MBSTRING'						=> 'Suporte a caracteres Multi-byte',
	'DLL_MSSQL'							=> 'MSSQL Server 2000+',
	'DLL_MSSQL_ODBC'					=> 'MSSQL Server 2000+ via ODBC',
	'DLL_MSSQLNATIVE'					=> 'MSSQL Server 2005+ [ Nativo ]',
	'DLL_MYSQL'							=> 'MySQL 3.23.x/4.x',
	'DLL_MYSQLI'						=> 'MySQL 4.1.x/5.x with MySQLi Extension',
	'DLL_ORACLE'						=> 'Oracle',
	'DLL_POSTGRES'						=> 'PostgreSQL',
	'DLL_SQLITE'						=> 'SQLite 2',
	'DLL_SQLITE3'						=> 'SQLite 3',
	'DLL_XML'							=> 'Suporte XML [ Jabber ]',
	'DLL_ZLIB'							=> 'Suporte à compressão zlib [ gz, .tar.gz, .zip ]',
	'DL_CONFIG'							=> 'Download da configuração',
	'DL_CONFIG_EXPLAIN'					=> 'Você deve baixar o arquivo config.php para o seu computador agora, e então enviá-lo para o FTP, substituindo qualquer arquivo config.php existente no diretório raiz de seu phpBB 3.1. Lembre-se de enviar o arquivo em formato ASCII (veja a documentação de seu software de FTP caso não saiba como fazer). Quando tiver enviado o arquivo config.php, clique em "Pronto" para prosseguir ao próximo passo.',
	'DL_DOWNLOAD'						=> 'Download',
	'DONE'								=> 'Pronto',

	'ENABLE_KEYS'						=> 'Reativando chaves. Isto pode demorar alguns minutos.',

	'FILES_OPTIONAL'					=> 'Arquivos opcionais e diretórios',
	'FILES_OPTIONAL_EXPLAIN'			=> '<strong>Opcional</strong> - Estes arquivos, diretórios ou permissões não são necessários. A rotina de instalação tentará usar outras técnicas para ser completada caso eles não existam ou não possam ser escritos. No entanto, a presença destes arquivos, diretórios e permissões irá acelerar o processo de instalação.',
	'FILES_REQUIRED'					=> 'Arquivos e diretórios',
	'FILES_REQUIRED_EXPLAIN'			=> '<strong>Necessário</strong> - Para funcionar corretamente, o phpBB precisa ter acesso ou escrever determinados arquivos ou diretórios. Se você visualizar "Não encontrado", precisará criar o diretório ou arquivo relevante. Se você visualizar "Não pode ser escrito", você precisará alterar as permissões no arquivo ou diretório para permitir que o phpBB escreva nele.',
	'FILLING_TABLE'						=> 'Preenchendo a tabela <strong>%s</strong>',
	'FILLING_TABLES'					=> 'Preenchendo as tabelas',
	
	'FINAL_STEP'						=> 'Etapa final do processo',
	'FORUM_ADDRESS'						=> 'Endereço do fórum',
	'FORUM_ADDRESS_EXPLAIN'				=> 'Este é o endereço de seu fórum, ex. <samp>http://www.exemplo.com/phpBB2/</samp>. Se algum endereço for escrito aqui e não deixar em branco, todas as instâncias deste serão substituídas pelo endereço de seu novo painel em mensagens, mensagens privadas e assinaturas.',
	'FORUM_PATH'						=> 'Pasta do fórum',
	'FORUM_PATH_EXPLAIN'				=> 'Esta é a pasta <strong>relativa</strong> em disco para o seu fórum anterior a esta instalação do phpBB3.',
	'FOUND'								=> 'Encontrado',
	'FTP_CONFIG'						=> 'Transferir configuração por FTP',
	'FTP_CONFIG_EXPLAIN'				=> 'O phpBB detectou a presença do módulo de FTP neste servidor. Você pode tentar enviar o config.php por este método se desejar. Você precisará informar os dados listados abaixo, lembrando que o nome de usuário e senha são referentes ao acesso de seu FTP! (pergunte ao seu servidor por estas informações caso não tenha certeza sobre elas).',
	'FTP_PATH'							=> 'Pasta de FTP',
	'FTP_PATH_EXPLAIN'					=> 'Este é o local da pasta raiz do seu phpBB, ex. <samp>htdocs/phpBB3/</samp>.',
	'FTP_UPLOAD'						=> 'Enviar',

	'GPL'								=> 'General Public License',

	'INITIAL_CONFIG'					=> 'Configuração básica',
	'INITIAL_CONFIG_EXPLAIN'			=> 'Agora que a instalação determinou que o seu servidor pode executar o phpBB, você precisa escrever algumas informações específicas. Caso você não saiba como conectar-se ao seu banco de dados, por favor, contate o seu servidor (em primeiro caso) ou utilize o <a href="http://www.suportephpbb.com.br/">Suporte phpBB</a> para solicitar ajuda. Quando inserir os dados, certifique-se de que eles estão corretos antes de continuar.',
	'INSTALL_CONGRATS'					=> 'Parabéns',
	'INSTALL_CONGRATS_EXPLAIN'			=> '
		A Instalação do phpBB %1$s foi concluída com sucesso. Por favor, prossiga selecionando uma das seguintes opções:</p>
		<h2>Converter algum painel existente ao phpBB3</h2>
		<p>O Conversor Framework Unificado do phpBB suporta a conversão do phpBB 2.0.x e outros sistemas de fóruns diversos ao phpBB3. Se você possui algum painel existente que deseje converter, por favor, <a href="%2$s">prossiga diretamente ao conversor</a>.</p>
		<h2>Divirta-se com o seu phpBB3!</h2>
		<p>Clicando no botão abaixo você será encaminhado ao formulário de apresentação dos dados estatísticos do phpBB no seu Painel de Administração (ACP). Nós ficaríamos muito gratos caso você pudesse nos ajudar enviando as suas informações estatísticas. É recomendável que se leve algum tempo analisando todas as opções que lhe são disponíveis neste painel. E ainda, lembre-se de que você pode solicitar ajuda online através da <a href="https://www.phpbb.com/support/docs/en/3.1/ug/">Documentação</a>, <a href="%3$s">Leia-me</a>, <a href="https://www.phpbb.com/community/viewforum.php?f=466">Fórum de Suporte em língua inglesa</a> e ainda no <a href="http://www.suportephpbb.com.br/">Suporte Brasileiro ao phpBB</a>.</p><p><strong>Por favor, agora exclua, mova ou renomeie o diretório de instalação antes de utilizar o seu painel. Se este diretório ainda estiver presente, apenas o Painel de Administração (ACP) estará acessível.</strong>',
	'INSTALL_INTRO'				=> 'Bem-vindo à Instalação',
	
	'INSTALL_INTRO_BODY'		=> 'Aqui você poderá instalar o phpBB em seu servidor.</p><p>Para prosseguir, você irá precisar das configurações de seu banco de dados. Se você não souber de suas configurações, por favor, contate o seu servidor e pergunte a respeito. Não será possível prosseguir sem as devidas informações. Você precisará de:</p>

	
	<ul>
		<li>Tipo de banco de dados - o banco de dados que você estará utilizando em seu painel.</li>
		<li>Nome do servidor do banco de dados ou DSN - o endereço do servidor de seu banco de dados.</li>
		<li>Porta do servidor do banco de dados - a porta do servidor de seu banco de dados (na maioria das vezes isso não é necessário).</li>
		<li>Nome do banco de dados - o nome do banco de dados em seu servidor.</li>
		<li>Nome do usuário e senha do banco de dados - os dados de autenticação para acessar o seu banco de dados.</li>
	</ul>

	<p><strong>Nota:</strong> se você está utilizando SQLite em sua instalação, você precisará informar o endereço completo do arquivo do banco de dados no campo DNS e deixar em branco o nome de usuário e senha. Por razões de segurança, você deve certificar-se de que este arquivo do banco de dados não esteja em locais acessíveis através da web.</p>

	<p>O phpBB3 suporta os seguintes bancos de dados:</p>
	<ul>
		<li>MySQL 3.23 ou superior (suporte a MySQLi)</li>
		<li>PostgreSQL 8.3+</li>
		<li>SQLite 2.8.2+</li>
		<li>SQLite 3.6.15+</li>
		<li>MS SQL Server 2000 ou superior (direto ou via ODBC)</li>
		<li>MS SQL Server 2005 ou superior (nativo)</li>
		<li>Oracle</li>
	</ul>

	<p>Somente os banco de dados suportados pelo seu servidor serão exibidos.',
	'INSTALL_INTRO_NEXT'		=> 'Para iniciar a instalação, por favor, aperte o botão abaixo.',
	'INSTALL_LOGIN'				=> 'Login',
	'INSTALL_NEXT'				=> 'Próximo passo',
	'INSTALL_NEXT_FAIL'			=> 'Alguns testes falharam e você deve corrigir esses problemas antes de prosseguir para o próximo passo. Caso não faça isso, a instalação deverá ficar incompleta.',
	'INSTALL_NEXT_PASS'			=> 'Todos os teste básicos foram concluídos e você pode prosseguir para o próximo passo da sua instalação. Caso tenha modificado alguma permissão, módulo e etc, e deseja refazer os testes, você pode refazê-los agora mesmo.',
	'INSTALL_PANEL'				=> 'Painel de Instalação',
	'INSTALL_SEND_CONFIG'		=> 'Infelizmente não foi possível escrever as informações de configuração no arquivo config.php. Isto aconteceu ou porque o arquivo não existe ou porque não pode ser escrito. Algumas opções serão listadas abaixo permitindo a você completar a instalação do config.php.',
	'INSTALL_START'				=> 'Iniciar Instalação',
	'INSTALL_TEST'				=> 'Testar novamente',
	'INST_ERR'					=> 'Erro na instalação',
	'INST_ERR_DB_CONNECT'		=> 'Não foi possível conectar-se ao banco de dados, veja a mensagem de erro abaixo.',
	'INST_ERR_DB_FORUM_PATH'	=> 'O arquivo do banco de dados informado está dentro da estrutura de diretórios do painel. Você deveria inserir este arquivo em um local não acessível através da internet.',
	'INST_ERR_DB_INVALID_PREFIX'	=> 'O prefixo informado é inválido. Deve iniciar com uma letra e deve conter somente letras, números e espaços.',
	'INST_ERR_DB_NO_ERROR'		=> 'Nenhuma mensagem de erro foi exibida.',
	'INST_ERR_DB_NO_MYSQLI'		=> 'A versão do Mysql instalada nesta máquina é incompatível com a opção "MySQL with MySQLi Extension" selecionada. Por favor, tente com uma outra opção do "MySQL".',
	'INST_ERR_DB_NO_SQLITE'		=> 'A versão da extensão SQLite instalada é muito antiga, você precisa atualizá-la para uma superior a 2.8.2.',
	'INST_ERR_DB_NO_SQLITE3'	=> 'A versão da extensão SQLite instalada é muito antiga, você precisa atualizá-la para uma superior a 3.6.15.',
	'INST_ERR_DB_NO_ORACLE'		=> 'A versão do Oracle instalada nesta máquina exige que você sete a variável <var>NLS_CHARACTERSET</var> para o parâmetro <var>UTF-8</var>. Você pode atualizar a sua instalação para uma superior a 9.2+ ou alterar o seu parâmetro.',
	'INST_ERR_DB_NO_POSTGRES'	=> 'O banco de dados selecionado não foi criado na codificação <var>UNICODE</var> ou <var>UTF-8</var>. Tente instalar com um banco de dados de codificação <var>UNICODE</var> ou <var>UTF-8</var>.',
	'INST_ERR_DB_NO_NAME'		=> 'O nome do banco de dados deve ser especificado.',
	'INST_ERR_EMAIL_INVALID'	=> 'O endereço de e-mail informado é inválido.',
	'INST_ERR_EMAIL_MISMATCH'	=> 'Os e-mails que você digitou não coincidem.',
	'INST_ERR_FATAL'			=> 'Erro fatal de instalação',
	'INST_ERR_FATAL_DB'			=> 'Um erro fatal e irrecuperável no banco de dados ocorreu. Isto pode ter acontecido pelo fato de o usuário especificado não possuir a permissão para <code>CRIAR TABELAS</code> ou <code>INSERIR DADOS</code>, etc. Maiores informações serão exibidas abaixo. Por favor, contate o seu servidor ou o <a href="http://www.suportephpbb.com.br/">Suporte phpBB</a> para uma maior assistência.',
	'INST_ERR_FTP_PATH'			=> 'Não foi possível alterar para o diretório especificado, por favor, verifique a pasta.',
	'INST_ERR_FTP_LOGIN'		=> 'Não foi possível logar no servidor de FTP. Por favor, verifique o seu nome de usuário e senha.',
	'INST_ERR_MISSING_DATA'		=> 'Você deve preencher todos os campos deste bloco.',
	'INST_ERR_NO_DB'			=> 'Não foi possível carregar o módulo PHP para o tipo de banco de dados selecionado.',
	'INST_ERR_PASSWORD_MISMATCH'	 => 'As senhas informadas não coincidem.',
	'INST_ERR_PASSWORD_TOO_LONG'	 => 'A senha digitada é muito grande. O tamanho máximo é de 30 caracteres.',
	'INST_ERR_PASSWORD_TOO_SHORT'	=> 'A senha digitada é muito pequena. O tamanho mínimo é de 6 caracteres.',
	'INST_ERR_PREFIX'			=> 'Já existem tabelas com o prefixo especificado, por favor, escolha um alternativo.',
	'INST_ERR_PREFIX_INVALID'	=> 'O prefixo informado é inválido para o seu banco de dados. Por favor tente outro, excluindo os caracteres como hífen.',
	'INST_ERR_PREFIX_TOO_LONG'	=> 'O prefixo informado é muito grande. O comprimento máximo é de %d caracteres.',
	'INST_ERR_USER_TOO_LONG'	=> 'O nome de usuário informado é muito grande. O comprimento máximo é de 20 caracteres.',
	'INST_ERR_USER_TOO_SHORT'	=> 'O nome de usuário informado é muito pequeno. O comprimento mínimo é de 3 caracteres.',
	'INVALID_PRIMARY_KEY'		=> 'Chave primária inválida : %s',

    'LONG_SCRIPT_EXECUTION'		=> 'Por favor, note que isto pode levar algum tempo... Por favor, não interrompa o sistema.',

	// mbstring
	'MBSTRING_CHECK'						=> 'Verificação da extensão <samp>mbstring</samp>',
	'MBSTRING_CHECK_EXPLAIN'				=> '<strong>Necessário</strong> - <samp>mbstring</samp> é uma extensão do PHP que fornece funções string multibyte. Certas características mbstring são incompatíveis com o phpBB e devem ser desativadas.',
	'MBSTRING_FUNC_OVERLOAD'				=> 'Função overloading',
	'MBSTRING_FUNC_OVERLOAD_EXPLAIN'		=> '<var>mbstring.func_overload</var> deve estar setada para 0 ou 4.',
	'MBSTRING_ENCODING_TRANSLATION'			=> 'Codificação de caracteres transparentes',
	'MBSTRING_ENCODING_TRANSLATION_EXPLAIN'	=> '<var>mbstring.encoding_translation</var> deve estar setada para 0.',
	'MBSTRING_HTTP_INPUT'					=> 'Conversão de caracteres de entrada HTTP',
	'MBSTRING_HTTP_INPUT_EXPLAIN'			=> '<var>mbstring.http_input</var> deve estar setada para <samp>pass</samp>.',
	'MBSTRING_HTTP_OUTPUT'					=> 'Conversão de caracteres de saída HTTP',
	'MBSTRING_HTTP_OUTPUT_EXPLAIN'			=> '<var>mbstring.http_output</var> deve estar setada para <samp>pass</samp>.',

	'MAKE_FOLDER_WRITABLE'		=> 'Por favor, certifique-se de que esta pasta existe e pode ser escrita pelo servidor e tente novamente:<br />»<strong>%s</strong>',
	'MAKE_FOLDERS_WRITABLE'		=> 'Por favor, certifique-se de que estas pastas existem e podem ser escritas pelo servidor e tente novamente:<br />»<strong>%s</strong>',

	'MYSQL_SCHEMA_UPDATE_REQUIRED'	=> 'O schema do seu banco de dados MySQL para o phpBB encontra-se desatualizado. O phpBB detectou um schema para o MySQL 3.x/4.x, mas o servidor roda no MySQL %2$s.<br /><strong>Antes de proceder com a atualização você deve atualizar o schema.</strong><br /><br />Por favor, refira ao <a href="https://www.phpbb.com/kb/article/doesnt-have-a-default-value-errors/">artigo sobre o aprimoramento do schema MySQL</a>. Caso você encontre problemas, por favor, use os <a href="https://www.phpbb.com/community/viewforum.php?f=466">fóruns de suporte do phpBB.com</a> ou <a href="http://www.suportephpbb.com.br">nossos fóruns de suporte</a>.',
	
	'NAMING_CONFLICT'			=> 'Conflito de nomes: %s e %s são pseudônimos<br /><br />%s',
	'NEXT_STEP'					=> 'Ir para o próximo passo',
	'NOT_FOUND'					=> 'Não foi possível encontrar',
	'NOT_UNDERSTAND'			=> 'Não foi possível entender %s #%d, tabela %s ("%s")',
	'NO_CONVERTORS'				=> 'Nenhum conversor disponível para uso.',
	'NO_CONVERT_SPECIFIED'		=> 'Nenhum conversor especificado.',
	'NO_LOCATION'				=> 'Não foi possível determinar o local. Se o Imagemagick estiver instalado, você pode especificar o local mais tarde através do seu painel de administração.',
	'NO_TABLES_FOUND'			=> 'Nenhuma tabela foi encontrada.',

	'OVERVIEW_BODY'					=> 'Bem-vindo ao phpBB3!<br /><br />O phpBB® é o open source bulletin board solution mais sabiamente utilizado no mundo inteiro. O phpBB3 é o último lançamento de uma linhagem de pacotes iniciada no ano 2000. Como os seus antecessores, o phpBB3 é rico em diversas ferramentas, com uma interface amigável e de fácil compreensão, além de ser completamente suportado pelo phpBB Team e o Suporte phpBB no Brasil. O phpBB3 reuniu aprimorando o que de mais tornou o phpBB2 popular e adicionando as ferramentas requeridas frequentemente e que não encontravam-se presentes nas versões anteriores. Nós esperamos que tudo isto exceda as suas expectativas.<br /><br />Este sistema de instalação irá guiar-lhe através de diversas ferramentas, como a instalação do phpBB3, atualização do sistema para a mais nova versão do phpBB3 a partir de lançamentos anteriores, bem como a conversão para o phpBB3 de um sistema de fóruns diferente, incluindo o phpBB 2.0.x. Para mais informações, nós recomendamos que você leia <a href="../docs/INSTALL.html">o guia de instalação</a>.<br /><br />Para ler a licença do phpBB3 ou sobre como obter suporte online, por favor, selecione as respectivas opções do menu lateral. Para continuar, selecione a aba apropriada acima.',

	'PCRE_UTF_SUPPORT'				=> 'Suporte ao PCRE UTF-8',
	'PCRE_UTF_SUPPORT_EXPLAIN'		=> 'O phpBB <strong>não</strong> irá funcionar se a sua instalação PHP não for compilada com suporte a UTF-8 na extensão PCRE.',
	'PHP_GETIMAGESIZE_SUPPORT'			=> 'Função do PHP getimagesize() está disponível',
	'PHP_GETIMAGESIZE_SUPPORT_EXPLAIN'	=> '<strong>Necessário</strong> - Para o funcionamento correto do phpBB, é necessário que esta função esteja disponível.',
	'PHP_JSON_SUPPORT'				=> 'Suporte PHP JSON',
	'PHP_JSON_SUPPORT_EXPLAIN'		=> '<strong>Necessário</strong> - Para o funcionamento correto do phpBB, é necessário que a extensão PHP JSON esteja ativa.',
	'PHP_OPTIONAL_MODULE'			=> 'Módulos opcionais',
	'PHP_OPTIONAL_MODULE_EXPLAIN'	=> '<strong>Opcional</strong> - Estes módulos ou aplicações são opcionais, não sendo necessários para a utilização do phpBB 3.1. Entretanto, se você os possuir, irá ativar uma maior funcionalidade no sistema.',
	'PHP_SUPPORTED_DB'				=> 'Bancos de dados suportados',
	'PHP_SUPPORTED_DB_EXPLAIN'		=> '<strong>Necessário</strong> - Você deve possuir ao menos um banco de dados compatível com PHP. Caso nenhum tipo de banco de dados seja exibido como disponível, contate o seu servidor ou reveja a documentação do PHP relevante para obter ajuda.',
	'PHP_REGISTER_GLOBALS'			=> 'A configuração do PHP "register_globals" está desativada',
	'PHP_REGISTER_GLOBALS_EXPLAIN'	=> 'O phpBB irá funcionar com esta configuração ativada, mas se possível, recomendamos que a configuração register_globals seja desativada no PHP por motivos de segurança.',
	'PHP_SAFE_MODE'					=> 'Modo seguro',
	'PHP_SETTINGS'					=> 'Versão do PHP e configurações',
	'PHP_SETTINGS_EXPLAIN'			=> '<strong>Necessário</strong> - Você deve possuir, no mínimo, a versão 4.3.3 do PHP para instalar o phpBB. Se <var>modo seguro</var> for exibido abaixo, a sua instalação do PHP estará sendo executada nesse modo. Isto implicará em limitações para administração remota e características similares.',
	'PHP_URL_FOPEN_SUPPORT'			=> 'Configuração do PHP <var>allow_url_fopen</var> está ativada',
	'PHP_URL_FOPEN_SUPPORT_EXPLAIN'	=> '<strong>Opcional</strong> - Esta configuração é opcional, entretanto algumas funções como avatares fora de seu website não irão funcionar sem ela.',
	'PHP_VERSION_REQD'				=> 'Versão do PHP >= 5.3.3',
	'POST_ID'						=> 'ID da mensagem',
	'PREFIX_FOUND'					=> 'Uma pesquisa em suas tabelas encontrou uma instalação válida utilizando o prefixo <strong>%s</strong> para as tabelas.',
	'PREPROCESS_STEP'				=> 'Executando as funções de pré-processamento',
	'PRE_CONVERT_COMPLETE'			=> 'Todos os passos da pré-conversão foram concluídos com sucesso. Você pode agora iniciar o processo de conversão. Por favor, note que você deve ajustar algumas informações manualmente. Depois da conversão, verifique as permissões atribuídas, reconstrua o índice de sua pesquisa que não está convertido e também verifique se os arquivos foram copiados corretamente, como por exemplo os avatares e smilies.',
	'PROCESS_LAST'					=> 'Processando as últimas instruções',

	'REFRESH_PAGE'				=> 'Atualize a página para continuar a conversão',
	'REFRESH_PAGE_EXPLAIN'		=> 'Se clicar em "Sim", o conversor irá atualizar a página para continuar a conversão até o estágio final. Se esta é a sua primeira conversão com propósitos de teste e detectar erros, nós sugerimos que clique em "Não".',
	'REQUIREMENTS_TITLE'		=> 'Compatibilidade de instalação',
	'REQUIREMENTS_EXPLAIN'		=> 'Antes de continuar com a instalação completa, o phpBB fará alguns testes com a configuração do servidor e com os arquivos para garantir que você consiga instalar e utilizar o phpBB. Leia os resultados com atenção e não prossiga até que todos os testes requeridos sejam concluídos. Se você desejar utilizar alguma função listada nos testes opcionais, primeiro certifique-se de que os testes opcionais foram concluídos.',
	'RETRY_WRITE'				=> 'Tentar escrever a configuração novamente',
	'RETRY_WRITE_EXPLAIN'		=> 'Se desejar, altere as permissões do arquivo config.php para permitir ao phpBB que escreva nele. Caso altere as permissões, clique em "Tentar novamente". Lembre-se de voltar as permissões do config.php para o estado original após a instalação ser concluída.',

	'SCRIPT_PATH'				=> 'Pasta do sistema',
	'SCRIPT_PATH_EXPLAIN'		=> 'A pasta onde os arquivos do phpBB estão localizados em seu servidor, ex. <samp>/phpBB3</samp>.',
	'SELECT_LANG'				=> 'Selecionar idioma',
	'SERVER_CONFIG'				=> 'Configuração do servidor',
	'SEARCH_INDEX_UNCONVERTED'	=> 'Os índices de pesquisa não foram convertidos',
	'SEARCH_INDEX_UNCONVERTED_EXPLAIN'	=> 'Seus antigos índices de pesquisa não foram convertidos. As pesquisas sempre resultarão em nenhuma ocorrência. Para criar um novo índice de pesquisa, vá até o painel de administração, selecione a gerência da pesquisa e escolha o índice de pesquisa no sub-menu.',
	'SELECT_FORUM_GA'			=> 'No phpBB 3.1, os anúncios globais estão relacionados com os fóruns. Selecione um fórum para os anúncios globais atuais (pode ser movido mais tarde):',
	'SOFTWARE'					=> 'Software do painel',
	'SPECIFY_OPTIONS'			=> 'Escolha as opções de conversão',
	'STAGE_ADMINISTRATOR'		=> 'Informações do administrador',
	'STAGE_ADVANCED'			=> 'Configurações avançadas',
	'STAGE_ADVANCED_EXPLAIN'	=> 'As configurações nesta página são apenas necessárias caso você deseje algo diferente do padrão. Caso não tenha certeza, continue para a próxima página, você pode alterar essas configurações no painel de administração posteriormente.',
	'STAGE_CONFIG_FILE'			=> 'Arquivo de configuração',
	'STAGE_CREATE_TABLE'		=> 'Criar tabelas no banco de dados',
	'STAGE_CREATE_TABLE_EXPLAIN'	=> 'As tabelas do banco de dados utilizadas pelo phpBB 3.1 serão criadas e atualizadas com as informações iniciais. Proceda para o próximo passo para concluir a instalação do phpBB.',
	'STAGE_DATABASE'			=> 'Configuração do banco de dados',
	'STAGE_FINAL'				=> 'Etapa final',
	'STAGE_INTRO'				=> 'Introdução',
	'STAGE_IN_PROGRESS'			=> 'Conversão em progresso',
	'STAGE_REQUIREMENTS'		=> 'Requerimentos',
	'STAGE_SETTINGS'			=> 'Configurações',
	'STARTING_CONVERT'			=> 'Iniciando o processo da conversão',
	'STEP_PERCENT_COMPLETED'	=> 'Passo <strong>%d</strong> de <strong>%d</strong>',
	'SUB_INTRO'					=> 'Introdução',
	'SUB_LICENSE'				=> 'Licença',
	'SUB_SUPPORT'				=> 'Suporte',
	'SUCCESSFUL_CONNECT'		=> 'Conexão realizada com sucesso',
	'SUPPORT_BODY'				=> 'Suporte completo será oferecido gratuitamente a todos os usuários no <a href="http://www.suportephpbb.com.br/">Suporte phpBB</a>, a comunidade de suporte oficial ao phpBB no Brasil. Em nossa página você encontrará suporte de qualidade para:</p><ul><li>Instalação</li><li>Configuração</li><li>Questões técnicas</li><li>Problemas relacionados a bugs em potencial no software</li><li>Atualização das versões Release Candidate (RC) para o mais novo lançamento</li><li>Conversão entre versões do phpBB3</li><li>Conversão de outros sistemas de fóruns para o phpBB3</li><li>MODs e Extensões em geral</li><li>Estilos diversos</li><li>Tradução do phpBB para a Língua Portuguesa do Brasil</li><li>...</li></ul><p>E muito mais!<br />Nós aconselhamos a usuários que ainda estão utilizando versões beta do phpBB3 para substituir a sua instalação com a mais nova versão do sistema.</p><h2>Tradução</h2><p>A tradução do phpBB para a Língua Portuguesa do Brasil possui os seus créditos referentes ao <a href="http://www.suportephpbb.com.br/">Suporte phpBB</a>. Para questões relativas à tradução deste software, por favor, entre na comunidade e envie o seu comentário ao fórum correspondente <a href="http://www.suportephpbb.com.br/forum/viewforum.php?f=168">Tradução do phpBB</a>, onde são aceitos quaisquer tipos de críticas e/ou sugestões relacionadas ao nosso trabalho.</p><h2>Extensões / Estilos / MODs</h2><p>Para questões relativas a extensões, estilos e MODs, visite o link do fórum envie sua mensagem no local apropriado.<br /><br />Se a sua questão é relativa a quaisquer outros aspectos do sistema, por favor, envie sua mensagem diretamente ao fórum Suporte Geral, dedicado especialmente para as dúvidas gerais relacionadas ao phpBB.</p><h2>Suporte phpBB</h2><p>O Suporte phpBB há mais de 7 anos oferece suporte gratuito e de excelente qualidade a todos os seus visitantes, disponibilizando uma infinidade de materiais e muitas outras ferramentas para o seu phpBB. O que você está esperando? Acesse agora, e confira! Nós esperamos por você.<br /><br />',
	'SYNC_FORUMS'				=> 'Iniciando a sincronização de fóruns',
	'SYNC_POST_COUNT'           => 'Sincronizando post_counts',
    'SYNC_POST_COUNT_ID'        => 'Sincronizando post_counts de <var>entrada</var> %1$s para %2$s.',
	'SYNC_TOPICS'				=> 'Iniciando a sincronização de tópicos',
	'SYNC_TOPIC_ID'				=> 'Sincronizando tópicos a partir do topic_id $1%s ao $2%s.',

	'TABLES_MISSING'			=> 'Não foi possível encontrar estas tabelas<br />» <strong>%s</strong>.',
	'TABLE_PREFIX'				=> 'Prefixo das tabelas no banco de dados',
	'TABLE_PREFIX_EXPLAIN'		=> 'O prefixo deve iniciar com uma letra e deve conter somente letras, números e espaços.',
	'TABLE_PREFIX_SAME'			=> 'O prefixo das tabelas precisa ser aquele usado pelo software que você está convertendo.<br />» O prefixo das tabelas especificado foi %s.',
	'TESTS_PASSED'				=> 'Testes concluídos',
	'TESTS_FAILED'				=> 'Testes não concluídos',

	'UNABLE_WRITE_LOCK'			=> 'Não foi possível escrever o arquivo de bloqueio.',
	'UNAVAILABLE'				=> 'Indisponível',
	'UNWRITABLE'				=> 'Não pode ser escrito',
	'UPDATE_TOPICS_POSTED'		=> 'Gerando informações de tópicos enviados',
	'UPDATE_TOPICS_POSTED_ERR'	=> 'Algum erro ocorreu enquanto as informações de tópicos eram geradas. Você pode tentar novamente esta etapa no ACP depois que a conversão for concluída.',
    'VERIFY_OPTIONS'            => 'Verificando opções de conversão',
	'VERSION'					=> 'Versão',


	'WELCOME_INSTALL'			=> 'Bem-vindo à Instalação do phpBB 3',
	'WRITABLE'					=> 'Configurável',


));

// Updater
$lang = array_merge($lang, array(
	'ALL_FILES_UP_TO_DATE'		=> 'Todos os arquivos foram atualizados com a mais recente versão do phpBB.',
	'ARCHIVE_FILE'				=> 'Código fonte dentro do arquivo',

	'BACK'				=> 'Voltar',
	'BINARY_FILE'		=> 'Arquivo binário',
    'BOT'				=> 'Espião/Bot',

    'CHANGE_CLEAN_NAMES'			=> 'O método utilizado para garantir que um nome de usuário não seja utilizado por múltiplos usuários foi alterado. Existem alguns usuários com o mesmo nome quando comparados com o novo método. Você deve excluir ou renomear estes usuários para certificar-se de que cada nome esteja sendo utilizado por apenas um usuário antes de prosseguir.',
	'CHECK_FILES'					=> 'Verificar arquivos',
	'CHECK_FILES_AGAIN'				=> 'Verificar arquivos novamente',
	'CHECK_FILES_EXPLAIN'			=> 'Na próxima etapa todos os arquivos serão verificados com os da atualização - essa operação pode levar algum tempo caso seja a primeira verificação.',
	'CHECK_FILES_UP_TO_DATE'		=> 'De acordo com o seu banco de dados a sua versão do phpBB está atualizada. Você pode proceder com a verificação dos arquivos para ter certeza de que todos os arquivos estão realmente atualizados com a versão mais recente do phpBB.',
	'CHECK_UPDATE_DATABASE'			=> 'Continuar o processo de atualização',
	'COLLECTED_INFORMATION'			=> 'Informação do arquivo',
	'COLLECTED_INFORMATION_EXPLAIN'	=> 'A lista abaixo exibe os arquivos que precisam ser atualizados. Leia as informações a seguir para ver o que você precisa fazer para executar uma atualização sem erros ou problemas futuros.',
	'COLLECTING_FILE_DIFFS'         => 'Coletando diferenças do arquivo',
	'COMPLETE_LOGIN_TO_BOARD'		=> 'Você já pode <a href="../ucp.php?mode=login">efetuar login no seu painel</a> e verificar se tudo está funcionando corretamente. Não se esqueça de excluir, mover ou renomear o diretório de instalação!',
	'CONTINUE_UPDATE_NOW'			=> 'Continuar o processo de atualização agora',		// Shown within the database update script at the end if called from the updater
	'CONTINUE_UPDATE'				=> 'Continuar atualização agora',					// Shown after file upload to indicate the update process is not yet finished
	'CURRENT_FILE'					=> 'Início de conflito - Código do arquivo original antes da atualização',
	'CURRENT_VERSION'				=> 'Versão atual',

	'DATABASE_TYPE'						=> 'Tipo de banco de dados',
	'DATABASE_UPDATE_COMPLETE'			=> 'A atualização de banco de dados está completa!',
	'DATABASE_UPDATE_CONTINUE'			=> 'Continuar com a atualização de banco de dados',
	'DATABASE_UPDATE_INFO_OLD'			=> 'O arquivo de atualização do banco de dados no diretório de instalação está desatualizado. Por favor, certifique-se de ter enviado a versão correta do arquivo.',
	'DATABASE_UPDATE_NOT_COMPLETED'		=> 'A atualização de banco de dados ainda não está completa.',
    'DELETE_USER_REMOVE'				=> 'Excluir usuários e mensagens',
	'DELETE_USER_RETAIN'				=> 'Excluir usuários e salvar as mensagens',
	'DESTINATION'						=> 'Arquivo de destino',
	'DIFF_INLINE'						=> 'Na linha',
	'DIFF_RAW'							=> 'Diferenças unificadas puras',
	'DIFF_SEP_EXPLAIN'					=> 'Código de bloqueio usado com o arquivo novo/atualizado',
	'DIFF_SIDE_BY_SIDE'					=> 'Lado a lado',
	'DIFF_UNIFIED'						=> 'Diferenças unificadas',
	'DO_NOT_UPDATE'						=> 'Não atualizar este arquivo',
	'DONE'								=> 'Pronto',
	'DOWNLOAD'							=> 'Baixar',
	'DOWNLOAD_AS'						=> 'Baixar como',
	'DOWNLOAD_UPDATE_METHOD_BUTTON'		=> 'Baixar o arquivo de modificações (recomendado)',
	'DOWNLOAD_CONFLICTS'				=> 'Baixar conflitos para este arquivo',
	'DOWNLOAD_CONFLICTS_EXPLAIN'		=> 'Pesquisar por &lt;&lt;&lt; para reconhecer conflitos',
	'DOWNLOAD_UPDATE_METHOD'			=> 'Baixar os arquivos modificados',
	'DOWNLOAD_UPDATE_METHOD_EXPLAIN'	=> 'Uma vez baixados, você deve descompactar os arquivos. Você encontrará os arquivos modificados que deverá enviar para o diretório raiz do seu phpBB. Por favor, envie os arquivos para os seus respectivos diretórios. Após você ter enviado todos os arquivos, confira-os novamente clicando no outro botão abaixo.',

    'EDIT_USERNAME'	=> 'Editar nome de usuário',
	'ERROR'		    => 'Erro',
	'EVERYTHING_UP_TO_DATE'		=> 'Está concluída a atualização com a mais recente versão do phpBB. Você já pode <a href="%1$s">efetuar login no seu painel</a> e verificar se tudo está funcionando corretamente. Não se esqueça de excluir, mover ou renomear o diretório de instalação! Por favor, envie-nos informações atualizadas acerca de seu servidor e configurações do painel através do módulo <a href="%2$s">Enviar estatísticas</a> no seu ACP.',

	'FILE_ALREADY_UP_TO_DATE'		=> 'O arquivo já foi atualizado.',
	'FILE_DIFF_NOT_ALLOWED'			=> 'O arquivo não se encontra disponível para ser diferido.',
	'FILE_USED'						=> 'Informação utilizada de',			// Single file
	'FILES_CONFLICT'				=> 'Arquivos em conflito',
	'FILES_CONFLICT_EXPLAIN'		=> 'Os arquivos seguintes são alterados e não representam os seus respectivos arquivos originais da versão anterior. O phpBB determinou que estes arquivos criassem conflitos se eles tentarem ser fundidos. Por favor, investigue os conflitos e tente resolvê-los manualmente ou continue a atualização selecionando o método desejado. Se você resolver os conflitos manualmente, verifique os arquivos novamente depois de modificados. Você pode também selecionar entre o método desejado para todos os arquivos. O primeiro irá resultar em um arquivo onde as linhas em conflito de seu arquivo anterior serão perdidas, e o outro irá resultar na perda das modificações do novo arquivo criado.',
	'FILES_DELETED'					=> 'Arquivos excluídos',
	'FILES_DELETED_EXPLAIN'			=> 'Os seguintes arquivos não existem na nova versão. Esses arquivos devem ser excluídos de sua instalação.',
	'FILES_MODIFIED'				=> 'Arquivos modificados',
	'FILES_MODIFIED_EXPLAIN'		=> 'Os arquivos seguintes são alterados e não representam os seus respectivos arquivos originais da versão anterior. O arquivo atualizado será fundido entre suas modificações e o seu novo arquivo.',
	'FILES_NEW'						=> 'Novos arquivos',
	'FILES_NEW_EXPLAIN'				=> 'Os arquivos seguintes atualmente não existem em sua instalação. Estes arquivos serão adicionados em sua instalação.',
	'FILES_NEW_CONFLICT'			=> 'Novos arquivos em conflito',
	'FILES_NEW_CONFLICT_EXPLAIN'	=> 'Os arquivos seguintes são novos na nova versão do phpBB, mas foi determinado que já exista um arquivo com o mesmo nome e mesma posição. Este arquivo será substituído por um novo.',
	'FILES_NOT_MODIFIED'			=> 'Arquivos não modificados',
	'FILES_NOT_MODIFIED_EXPLAIN'	=> 'Os arquivos seguintes não foram alterados e representam os seus respectivos arquivos originais da versão a qual você deseja atualizar.',
	'FILES_UP_TO_DATE'				=> 'Arquivos já atualizados',
	'FILES_UP_TO_DATE_EXPLAIN'		=> 'Os arquivos seguintes já se encontram prontos e não precisam ser atualizados.',
	'FTP_SETTINGS'					=> 'Configurações de FTP',
	'FTP_UPDATE_METHOD'				=> 'Envio de FTP',

	'INCOMPATIBLE_UPDATE_FILES'		=> 'Os arquivos de atualização encontrados são incompatíveis com a sua versão do phpBB instalada. A sua versão do phpBB é %1$s e o arquivo de atualização é da versão %2$s para %3$s.',
	'INCOMPLETE_UPDATE_FILES'		=> 'Os arquivos de atualização estão incompletos.',
	'INLINE_UPDATE_SUCCESSFUL'		=> 'O banco de dados foi atualizado com sucesso. Agora você precisa continuar com o processo de atualização.',

    'KEEP_OLD_NAME'		=> 'Salvar nome de usuário',

    'LATEST_VERSION'		=> 'Última versão',
	'LINE'					=> 'Linha',
	'LINE_ADDED'			=> 'Adicionadas',
	'LINE_MODIFIED'			=> 'Alteradas',
	'LINE_REMOVED'			=> 'Excluídas',
	'LINE_UNMODIFIED'		=> 'Não alteradas',
	'LOGIN_UPDATE_EXPLAIN'	=> 'Para atualizar a sua instalação, você deve autenticar o seu registro.',

	'MAPPING_FILE_STRUCTURE'	=> 'Para facilitar a atualização, aqui está o local do arquivo que mapeia a instalação de seu phpBB.',

    'MERGE_MODIFICATIONS_OPTION'	=> 'Fundir modificações',

	'MERGE_NO_MERGE_NEW_OPTION'	=> 'Não fundir - utilizar novos arquivos',
	'MERGE_NO_MERGE_MOD_OPTION'	=> 'Não fundir - utilizar arquivos instalados atualmente',
	'MERGE_MOD_FILE_OPTION'		=> 'Fundir modificações (remove o novo código phpBB com o bloqueio do conflito)',
	'MERGE_NEW_FILE_OPTION'		=> 'Fundir modificações (remove o código modificado com o bloqueio do conflito)',
	'MERGE_SELECT_ERROR'		=> 'Os modos de unir arquivos em conflito não foram selecionados corretamente.',
    'MERGING_FILES'             => 'Diferenças de fusão',
    'MERGING_FILES_EXPLAIN'     => 'Atualmente coletando as modificações finais do arquivo.<br /><br />Por favor, aguarde até que o phpBB tenha completado todas as operações nos arquivos modificados.',
	
	'NEW_FILE'						=> 'Fim do conflito',
    'NEW_USERNAME'					=> 'Novo nome de usuário',
	'NO_AUTH_UPDATE'				=> 'Você não está autorizado a atualizar este painel',
	'NO_ERRORS'						=> 'Sem erros',
	'NO_UPDATE_FILES'				=> 'Sem atualização para os arquivos seguintes',
	'NO_UPDATE_FILES_EXPLAIN'		=> 'Os arquivos seguintes são novos ou modificados, mas o diretório em que eles normalmente se encontram não pôde ser encontrado em sua instalação. Se esta lista contém arquivos para os diretórios como /language ou /styles que você tenha alterado, sua estrutura de diretório e a atualização deverão ficar incompletos.',
	'NO_UPDATE_FILES_OUTDATED'		=> 'Nenhum diretório de atualização válido foi encontrado, por favor, certifique-se de ter enviado corretamente os arquivos.<br /><br />A sua instalação <strong>não</strong> está pronta. As atualizações estão disponíveis para a sua versão do phpBB %1$s, por favor visite a página <a href="https://www.phpbb.com/downloads/" rel="external">https://www.phpbb.com/downloads/</a> para baixar o pacote correto de atualização da versão %2$s para a versão %3$s.',
	'NO_UPDATE_FILES_UP_TO_DATE'	=> 'A sua versão está pronta. Não é necessário executar a ferramenta de atualização. Se você deseja ter a absoluta certeza, verifique se enviou corretamente os arquivos de atualização.',
	'NO_UPDATE_INFO'				=> 'A informação do arquivo de atualização não pôde ser encontrada.',
	'NO_UPDATES_REQUIRED'			=> 'Sem atualizações necessárias',
	'NO_VISIBLE_CHANGES'			=> 'Sem alterações visíveis',
	'NOTICE'						=> 'Aviso',
	'NUM_CONFLICTS'					=> 'Número de conflitos',
	'NUMBER_OF_FILES_COLLECTED'     => 'Atualmente diferenças a partir de %1$d de %2$d arquivos foram verificadas.<br />Por favor, aguarde até que todos os arquivos sejam verificados.',

	'OLD_UPDATE_FILES'		=> 'Os arquivos de atualização não estão prontos. Os arquivos de atualização encontrados são do phpBB %1$s para o phpBB %2$s, mas a última versão do phpBB é a %3$s.',

    'PACKAGE_UPDATES_TO'				=> 'O pacote atual irá atualizar para a versão',
	'PERFORM_DATABASE_UPDATE'			=> 'Executar atualização do banco de dados',
	'PERFORM_DATABASE_UPDATE_EXPLAIN'	=> 'Abaixo você encontrará um link para o script de atualização do banco de dados. A atualização do banco de dados poderá levar algum tempo, por favor não pare esta execução até que esteja concluída. Após o banco de dados ter sido atualizado, apenas siga as instruções para continuar o processo de atualização.',
	'PREVIOUS_VERSION'					=> 'Versão anterior',
	'PROGRESS'							=> 'Progresso',

	'RELEASE_ANNOUNCEMENT'		=> 'Anúncio',
	'RESULT'					=> 'Resultado',
	'RUN_DATABASE_SCRIPT'		=> 'Atualizar banco de dados',

	'SELECT_DIFF_MODE'			=> 'Selecionar modo de diferenciação',
	'SELECT_DOWNLOAD_FORMAT'	=> 'Selecionar formato do arquivo para download',
	'SELECT_FTP_SETTINGS'		=> 'Selecionar configurações de FTP',
	'SHOW_DIFF_CONFLICT'		=> 'Exibir diferenças/conflitos',
	'SHOW_DIFF_DELETED'			=> 'Exibir conteúdo do arquivo',
	'SHOW_DIFF_FINAL'			=> 'Exibir arquivo resultante',
	'SHOW_DIFF_MODIFIED'		=> 'Exibir diferenças unidas',
	'SHOW_DIFF_NEW'				=> 'Exibir conteúdo do arquivo',
	'SHOW_DIFF_NEW_CONFLICT'	=> 'Exibir diferenças',
	'SHOW_DIFF_NOT_MODIFIED'	=> 'Exibir diferenças',
	'SOME_QUERIES_FAILED'		=> 'Alguns erros foram encontrados, as informações e erros estão listados abaixo.',
	'SQL'						=> 'SQL',
	'SQL_FAILURE_EXPLAIN'		=> 'Mas provavelmente não há nada com o que se preocupar, a atualização irá continuar. Para solucionar este problema, você deve acessar o <a href="http://www.suportephpbb.com.br/">Suporte phpBB</a> para solicitar ajuda. Veja o <a href="../docs/README.html">README</a> para informações de como obter ajudas extras.',
	'STAGE_FILE_CHECK'			=> 'Verificar arquivos',
	'STAGE_UPDATE_DB'			=> 'Atualizar banco de dados',
	'STAGE_UPDATE_FILES'		=> 'Atualizar arquivos',
	'STAGE_VERSION_CHECK'		=> 'Verificar versão',
	'STATUS_CONFLICT'			=> 'Arquivo modificado produzindo conflitos',
	'STATUS_DELETED'			=> 'Arquivo excluído',
	'STATUS_MODIFIED'			=> 'Arquivo modificado',
	'STATUS_NEW'				=> 'Novo arquivo',
	'STATUS_NEW_CONFLICT'		=> 'Novo arquivo em conflito',
	'STATUS_NOT_MODIFIED'		=> 'Arquivo não modificado',
	'STATUS_UP_TO_DATE'			=> 'Arquivo já atualizado',

	'TOGGLE_DISPLAY'            => 'Exibir/Ocultar lista de arquivos',
	'TRY_DOWNLOAD_METHOD'		=> 'Você pode tentar o método de download dos arquivos modificados.<br />Este método sempre funciona e é também o pacote de atualização recomendado.',
	'TRY_DOWNLOAD_METHOD_BUTTON'=> 'Tente este método agora',
	
	'UPDATE_COMPLETED'				=> 'Atualização completa',
	'UPDATE_DATABASE'				=> 'Atualizar banco de dados',
	'UPDATE_DATABASE_EXPLAIN'		=> 'Na próxima etapa o banco de dados será atualizado.',
	'UPDATE_DATABASE_SCHEMA'		=> 'Atualizando o schema do banco de dados',
	'UPDATE_FILES'					=> 'Atualizar arquivos',
	'UPDATE_FILES_NOTICE'			=> 'Por favor, certifique-se de ter atualizado os arquivos de seu painel também, este arquivo está apenas atualizando o seu banco de dados.',
	'UPDATE_INSTALLATION'			=> 'Atualizar instalação do phpBB',
	'UPDATE_INSTALLATION_EXPLAIN'	=> 'Aqui você pode atualizar a instalação do seu phpBB para a última versão.<br />Durantes este processo, todos os seus arquivos serão devidamente checados em sua integridade. Você pode revisar todas as diferenças e arquivos antes da atualização.<br /><br />A própria atualização do arquivo pode ser realizada de duas maneiras.</p><h2>Atualização Manual</h2><p>Com esta atualização, você pode baixar uma seleção pessoal de arquivos modificados para ter certeza de que você não perderá as modificações realizadas nestes. Depois de ter baixado este pacote, você deve manualmente enviar os arquivos para os seus respectivos diretórios e pastas. Em seguida, você pode fazer o estágio da verificação do arquivo novamente para ver se você moveu corretamente os seus arquivos.</p><h2>Atualização Automática com FTP</h2><p>Este método é similar ao primeiro, mas você não precisa baixar os arquivos modificados e enviá-los ao seu servidor. Isto será executado para você. Em ordem para utilizar este método, você precisa saber as informações de seu registro de FTP desde que você seja exigido para isso. Depois de finalizado, você será redirecionado para a verificação dos arquivos novamente para ter a certeza de que tudo foi atualizado corretamente.<br /><br />',
	'UPDATE_INSTRUCTIONS'			=> '

		<h1>Anúncio de lançamento</h1>

		<p>Por favor, leia o anúncio de lançamento da mais nova versão antes de continuar com o processo de atualização, pois aqui poderá conter informações importantes. E também estarão disponíveis os links para download do pacote oficial e o code changes.</p>

		<br />

		<h1>Como atualizar a sua instalação com o Pacote de Atualização Automática</h1>

		<p>O método de atualização recomendado aqui é apenas válido para o pacote de atualização automática. Você também pode atualizar a sua instalação utilizando os métodos listados no INSTALL.html. As etapas de atualização automática do phpBB3 são as seguintes:</p>

		<ul style="margin-left: 20px; font-size: 1.1em;">
			<li>Vá até a <a href="https://www.phpbb.com/downloads/" title="https://www.phpbb.com/downloads/">página de downloads do phpBB.com</a> e baixe o arquivo do "Automatic Update Package" correto.<br /><br /></li>
			<li>Descompacte o arquivo.<br /><br /></li>
			<li>Envie os diretórios "install" e "vendor" completamente descompactados para o diretório raiz do seu phpBB (onde encontra-se o arquivo config.php).<br /><br /></li>
		</ul>

		<p>Depois de enviado, o seu fórum se encontrará offline para os usuários normais conforme o diretório de instalação que você enviou agora estiver presente.<br /><br />
		<strong><a href="%1$s" title="%1$s">Agora inicie o processo de instalação inserindo em seu navegador o endereço da pasta /install</a>.</strong><br />
		<br />
		Você será levado em seguida ao processo de atualização. Você será devidamente avisado quando a atualização estiver completa.
		</p>
	',
	'UPDATE_METHOD'					=> 'Método de atualização',
	'UPDATE_METHOD_EXPLAIN'			=> 'Você pode agora selecionar o método de atualização desejado. Utilizando o envio de FTP, aparecerá uma tela onde você deverá escrever as informações de seu registro de FTP. Com este método, os arquivos serão automaticamente movidos para o novo local e backups dos arquivos antigos serão criados com a extensão .bak ao nome do arquivo. Se você escolher fazer o download dos arquivos modificados, você poderá descompactá-los e enviá-los para os seus locais corretos manualmente depois.',
    'UPDATE_REQUIRES_FILE'			=> 'O atualizador necessita que o arquivo seguinte esteja presente: %s',
	'UPDATE_SUCCESS'				=> 'A atualização foi executada com sucesso',
	'UPDATE_SUCCESS_EXPLAIN'		=> 'Todos os arquivos foram atualizados com sucesso. A próxima etapa envolve verificar todos os arquivos novamente para ter certeza de que os arquivos foram atualizados corretamente.',
	'UPDATE_VERSION_OPTIMIZE'		=> 'Atualizando versão e otimizando as tabelas',
	'UPDATING_DATA'					=> 'Atualizando os dados',
	'UPDATING_TO_LATEST_STABLE'		=> 'Atualizando banco de dados para o novo lançamento',
	'UPDATED_VERSION'				=> 'Versão atualizada',
	'UPLOAD_METHOD'					=> 'Método de envio',

	'UPDATE_DB_SUCCESS'				=> 'A atualização do banco de dados foi executada com sucesso.',
	'UPDATE_FILE_SUCCESS'			=> 'Arquivos atualizados com sucesso.',
    'USER_ACTIVE'					=> 'Ativar usuário',
	'USER_INACTIVE'					=> 'Desativar usuário',

	'VERSION_CHECK'				=> 'Verificação de versão',
	'VERSION_CHECK_EXPLAIN'		=> 'Aqui você pode verificar se a sua instalação do phpBB está atualizada.',
	'VERSION_NOT_UP_TO_DATE'	=> 'A sua versão do phpBB não está atualizada. Por favor, continue o processo de atualização.',
	'VERSION_NOT_UP_TO_DATE_ACP'	=> 'A sua versão do phpBB não está atualizada.<br />Abaixo você encontrará um link para o anúncio de lançamento da última versão, o qual contém maiores informações e instruções de como efetuar a atualização.',
	'VERSION_NOT_UP_TO_DATE_TITLE'	=> 'A sua versão do phpBB não está atualizada.',
	'VERSION_UP_TO_DATE'		=> 'A sua instalação está atualizada. Embora não haja atualizações no momento, você deve prosseguir para que seja realizada uma verificação de validade dos arquivos.',
	'VERSION_UP_TO_DATE_ACP'	=> 'A sua instalação está atualizada. Não há atualizações disponíveis no momento.',
	'VIEWING_FILE_CONTENTS'		=> 'Visualizando conteúdo do arquivo',
	'VIEWING_FILE_DIFF'			=> 'Visualizando diferenças do arquivo',

	'WRONG_INFO_FILE_FORMAT'	=> 'Informação de formato do arquivo incorreta',
));

// Default database schema entries...
$lang = array_merge($lang, array(
	'CONFIG_BOARD_EMAIL_SIG'		=> 'Atenciosamente, a Administração.',
	'CONFIG_SITE_DESC'				=> 'Um pequeno texto para descrever o seu painel',
	'CONFIG_SITENAME'				=> 'seudominio.com',

	'DEFAULT_INSTALL_POST'			=> 'Esta é apenas uma mensagem de exemplo em sua instalação do phpBB3. Tudo parece estar funcionando normalmente. Você pode excluir esta mensagem se desejar e continuar a configurar o seu painel. Durante o processo de instalação, a sua primeira categoria e o seu primeiro fórum foram assinalados em um set de permissões apropriado aos grupos de usuários pré-definidos, como administradores, bots, moderadores globais, visitantes, usuários registrados e usuários registrados da COPPA. Se você optar por excluir sua primeira categoria e o seu primeiro fórum, não se esqueça de atribuir as permissões para todos estes grupos em relação a todas as novas categorias e fóruns que criar. É recomendável que você renomeie a sua primeira categoria e o seu primeiro fórum e apenas copie as permissões destes enquanto criar suas novas categorias e fóruns. Divirta-se!',

	'FORUMS_FIRST_CATEGORY'			=> 'Sua primeira categoria',
	'FORUMS_TEST_FORUM_DESC'		=> 'Descrição de seu primeiro fórum.',
	'FORUMS_TEST_FORUM_TITLE'		=> 'Seu primeiro fórum',
	'RANKS_SITE_ADMIN_TITLE'		=> 'Administrador',
	'REPORT_WAREZ'                  => 'A mensagem denunciada possui endereços ilegais ou softwares pirateados.',
    'REPORT_SPAM'                   => 'A mensagem denunciada possui apenas o propósito de anunciar algum outro website ou produto.',
    'REPORT_OFF_TOPIC'              => 'A mensagem denunciada encontra-se fora de discussão no tópico.',
    'REPORT_OTHER'                  => 'A mensagem denunciada não se encaixa em qualquer outra categoria. Por favor, utilize o campo de informações adicionais.',

	'SMILIES_ARROW'					=> 'Seta',
	'SMILIES_CONFUSED'				=> 'Confuso',
	'SMILIES_COOL'					=> 'Cool',
	'SMILIES_CRYING'				=> 'Chorando ou Muito Triste',
	'SMILIES_EMARRASSED'			=> 'Envergonhado',
	'SMILIES_EVIL'					=> 'Mal ou Muito Nervoso',
	'SMILIES_EXCLAMATION'			=> 'Exclamação',
	'SMILIES_GEEK'					=> 'Geek',
	'SMILIES_IDEA'					=> 'Idea',
	'SMILIES_LAUGHING'				=> 'Laughing',
	'SMILIES_MAD'					=> 'Nervoso',
	'SMILIES_MR_GREEN'				=> 'Mr. Green',
	'SMILIES_NEUTRAL'				=> 'Neutro',
	'SMILIES_QUESTION'				=> 'Questão',
	'SMILIES_RAZZ'					=> 'Razz',
	'SMILIES_ROLLING_EYES'			=> 'Virando os olhos',
	'SMILIES_SAD'					=> 'Triste',
	'SMILIES_SHOCKED'				=> 'Chocado',
	'SMILIES_SMILE'					=> 'Sorridente',
	'SMILIES_SURPRISED'				=> 'Surpreso',
	'SMILIES_TWISTED_EVIL'			=> 'Twisted Evil',
	'SMILIES_UBER_GEEK'				=> 'Uber Geek',
	'SMILIES_VERY_HAPPY'			=> 'Muito Feliz',
	'SMILIES_WINK'					=> 'Piscar os olhos',

	'TOPICS_TOPIC_TITLE'			=> 'Bem-vindo ao phpBB3',
));
