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
*/
if (!defined('IN_PHPBB'))
{
	exit;
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

$help = array( 
   array( 
      0 => '--', 
      1 => 'Sobre o Login e o Registro' 
   ), 
	array(
		0 => 'Por que preciso registar-me?',
		1 => 'Compete ao administrador do fórum decidir se para poder criar mensagens, o registo é obrigatório. No entanto; o registo dá-lhe acesso a ferramentas adicionais não disponíveis aos visitantes, como imagens definíveis avatar, mensagens privadas, e-mail de outros usuários, subscrição de Grupos, etc Leva apenas alguns minutos para registrar, então é recomendável que o faça.'
	),
  array( 
      0 => 'O que é a COPPA?', 
      1 => 'A COPPA (Child Online Privacy and Protection Act) é uma Lei de 1998 dos Estados Unidos que exige que aos websites que apenas possam receber informações de menores abaixo de 13 anos de idade com a devida autorização de seus pais ou responsáveis, ou sob qualquer outro método legalmente aceito em que possa ser autorizada a coleta de dados desses menores. No Brasil, esta lei não vigora e por isso não é realmente necessária a aplicação desta função, mas é sempre recomendável que os administradores apliquem as regras de suas comunidades e andem sempre de acordo com a lei vigente do país. Se você está inseguro quanto a aplicação da seguinte lei, contate um conselho judicial para maiores informações. Por favor, note que o Grupo phpBB não pode ser responsabilizado ou contatado para possíveis problemas legais e/ou judiciais de qualquer natureza, exceto sobre as linhas descritas por este sistema.' 
   ), 
   array( 
      0 => 'Por que não consigo me registrar?', 
      1 => 'É possível que o administrador tenha banido o seu endereço de IP ou adicionado como nome de usuário proibido o que você deseja registrar. O registro também pode ter sido desativado por razões privadas. Para mais informações, contate o administrador do fórum.'
   ), 
   array( 
      0 => 'Registrei-me mas não consigo entrar!', 
      1 => 'Primeiro, verifique se está escrevendo o seu nome de usuário e senha corretamente. Caso estejam corretos, então uma entre duas coisas podem estar acontecendo. Se a função COPPA estiver ativa no fórum e você especificou ter menos de 13 anos de idade em seu registro, você terá que seguir às instruções que recebeu. Se este não é o seu caso, será que o seu registro encontra-se ativado? Alguns fóruns exigem que o registro de novos usuários seja ativado, tanto por você como por um administrador, antes que seja efetuado o login; está informação encontra-se presente durante o registro. Se recebeu um e-mail, então siga às suas instruções. Se não recebeu e-mail algum, você deve ter escrito um endereço de e-mail incorreto ou o mesmo foi detectado por um filtro de spam. Se você tem certeza que o endereço de e-mail que forneceu é válido e correto, então tente contatar o administrador do fórum.' 
   ), 
   array( 
      0 => 'Porque é que não consigo entrar no fórum?', 
      1 => 'Existem diversas possibilidades para tal acontecer. Primeiro, certifique-se de que seu nome de usuário e senha estão corretos. Se estiverem, contate o administrador do painel para ter certeza de que você não foi banido. É possível também que tenha ocorrido um erro de configuração, o qual precise ser corrigido.' 
   ), 
   array( 
      0 => 'Registrei-me anteriormente mas não consigo mais entrar?!', 
      1 => 'É possível que o administrador tenha excluído o seu registro por algum motivo. É comum administradores excluírem registros de usuários que não enviaram mensagens durante um longo período, para reduzir o tamanho do seu banco de dados. Tente registrar-se novamente e participar das discussões do fórum.' 
   ), 
   array( 
      0 => 'Esqueci a senha!', 
      1 => 'Não entre em pânico! Você deve solicitar uma nova senha. Apesar da sua senha não poder ser recuperada pela administração do fórum, pode no entanto ser feito como que se nunca a tivesse registrado, ou seja, como que se estivesse entrando pela primeira vez. Para fazer isto, clique em <em>Esqueci a senha</em> ao efetuar o login, e seguindo às instruções, voltará a entrar no fórum em questão de minutos.' 
   ), 
   array( 
      0 => 'Por que entro automaticamente no fórum?', 
      1 => 'Se não assinalar <em>Lembrar minhas informações</em>, você não entrará automaticamente da próxima vez que visitar o fórum. Isto evita o uso abusivo da sua conta por parte de outras pessoas. Para manter-se online e não necessitar escrever o seu nome de usuário e senha, assinale a caixa quando estiver efetuando o login. Isto não é recomendável caso acesse o fórum através de um computador compartilhado por outros usuários, ou seja, bibliotecas, café internet ou cyber café, universidades, etc. Se não consegue visualizar a checkbox, é possível que o administrador tenha desativado esta ferramenta.' 
   ), 
 array( 
      0 => 'O que a opção de “Excluir todos os cookies deste painel” faz?', 
      1 => 'Simplesmente exclui todos os cookies gerados pelo sistema phpBB3, os quais lhe mantém autenticado dentro do fórum e que também permitem o funcionamento de determinadas opções ativadas pelo administrador. Se você estiver com problemas de entrar e sair na comunidade, deletar os cookies pode ser uma ajuda alternativa.', 
   ), 
   array( 
      0 => '--', 
      1 => 'Sobre as Preferências e Configuração de usuários' 
   ), 
   array( 
      0 => 'Como altero a minha configuração?', 
      1 => 'Se você é um usuário registrado, toda a sua configuração é salva no banco de dados do painel. Para alterá-la, clique em painel de controle do usuário; um link pode ser geralmente encontrado no topo da página. Este sistema lhe permitirá alterar toda a sua configuração e preferências.' 
   ), 
   array( 
      0 => 'Como posso ocultar o meu nome de usuário da lista de usuários online?', 
      1 => 'Em seu painel de controle do usuário, dentro da categoria "Preferências", você encontrará uma opção nomeada <em>Ocultar seus status online</em>. Se selecionar Sim, apenas você, o administrador e os moderadores poderão ver que está online. Passará a ser considerado pelo sistema como um usuário invisível.' 
   ), 
   array( 
      0 => 'A data e hora estão erradas!', 
      1 => 'As datas provavelmente estão corretas, porém pode ocorrer que você visualize as horas em um fuso horário diferente de onde você normalmente se encontra ou inicialmente programou. Se esse é o seu caso, você deve alterar no seu painel de controle do usuário a opção para o seu fuso horário local, ou seja, Brasil, Londres, Paris, Nova Iorque, Sidney, ou onde você estiver. Note que a mudança do fuso horário, bem como a maior parte das configurações, só é permitida a usuários registrados. Se você ainda não se registrou, é hora para que se registre no fórum!' 
   ), 
   array( 
      0 => 'Alterei o fuso Horário, mas a data e hora continuam erradas!', 
      1 => 'Se você tem certeza de que selecionou o fuso horário e horário de verão/DST corretamente e a hora continua errada, então o horário armazenado no relógio do servidor está incorreto. Por favor, contate o administrador para que o problema seja resolvido.' 
   ), 
   array( 
      0 => 'O idioma da minha nacionalidade não está na lista!', 
      1 => 'O administrador pode não ter instalado o seu idioma ou o phpBB ainda não foi traduzido para o mesmo. Peça ao administrador que instale o seu pacote de idiomas e, caso não exista, você poderá criar uma nova tradução. Mais informações, consulte a página oficial do Grupo phpBB (clicar no link ao fundo desta página).' 
   ), 
	array(
		0 => 'O que são as imagens ao lado do meu nome de usuário?',
		1 => 'Há duas imagens que podem aparecer junto com um nome de usuário quando se veem as mensagens. Uma delas pode ser uma imagem associada à sua classificação, geralmente na forma de blocos, estrelas ou pontos, indicando a quantidade de mensagens que tenha feito ou o seu estatuto no Fórum. Outra, geralmente uma imagem maior, é conhecida como um Avatar, que é normalmente única ou pertencente a cada usuário. Cabe ao Administrador permitir ou não o uso de Avatar e definir como podem ser usados. Se não conseguir utilizar Avatares, contate o Administrador do Fórum.',
	),
   array( 
      0 => 'Como posso exibir uma imagem junto ao meu nome de usuário?', 
      1 => 'Deve haver duas imagens junto de cada nome de usuário quando se visualizam as mensagens. Dependendo do estilo em uso, a primeira representa o rank do usuário, normalmente em forma de blocos ou estrelas indicando a quantidade de mensagens que o usuário possui ou o seu estatuto no fórum. A segunda, geralmente uma imagem larga, é conhecida como avatar, que é normalmente única ou pessoal a cada usuário. Está ao critério do administrador permitir ou não o uso de avatares, e como os usuários podem enviar estas imagens. Se você não está autorizado a utilizar avatares, contate o administrador para receber uma justificativa.' 
   ), 
   array( 
      0 => 'Como posso alterar o meu rank?', 
      1 => 'Os ranks, os quais aparecem abaixo do nome de usuário, indicam o número de mensagens enviadas ou identificam determinados usuários, ex. moderadores e administradores. Em geral, você não pode alterar diretamente o seu rank, bem como eles são determinados pelo administrador do fórum. Por favor, não abuse do envio de mensagens desnecessárias apenas para aumentar o seu rank. A maior parte dos fóruns não tolera este tipo de atitude e os moderadores ou administradores irão simplesmente diminuir o seu contador de mensagens.' 
   ), 
   array( 
      0 => 'Quando clico no e-mail de um usuário, uma página aparece solicitando que eu faça o login?!', 
      1 => 'Apenas usuários registrados poderão enviar e-mails a outros usuários através do formulário exclusivo do fórum, e apenas se o administrador tiver ativado esta função. Isso é para evitar o uso malicioso do sistema de e-mails por usuários anônimos.' 
   ), 
   array( 
      0 => '--', 
      1 => 'Sobre as mensagens' 
   ), 
   array( 
      0 => 'Como posso enviar uma mensagem?', 
      1 => 'Para enviar um novo tópico em um fórum, clique no botão relevante das páginas dos fóruns e tópicos. Você deve se registrar antes de enviar uma mensagem. Uma lista de suas permissões de cada fórum está disponível no fundo das páginas dos fóruns e tópicos. Exemplo: Você pode enviar novos tópicos, votar em enquetes, etc.' 
   ), 
   array( 
      0 => 'Como posso editar ou excluir uma mensagem?', 
      1 => 'A menos que seja um administrador ou moderador do painel, você apenas pode editar ou excluir as suas próprias mensagens. Você pode editar uma mensagem clicando no botão de edição para a mensagem relevante, algumas vezes por um período limitado após ser enviada. Caso alguém já tenha respondido a essa mensagem, você encontrará um pequeno texto ao fundo, mencionando que foi editada e eventualmente quantas vezes. Isto não aparece apenas caso essa mensagem ainda não tenha obtido respostas; não aparecerá caso a alteração seja efetuada por algum administrador ou moderador, mas possivelmente eles deixarão uma nota dizendo o motivo ou critério usado. Por favor, note que usuários normais não podem excluir uma mensagem após alguém já ter enviado uma resposta.'
   ), 
   array( 
      0 => 'Como posso adicionar assinatura a uma mensagem?', 
      1 => 'Para adicionar uma assinatura em suas mensagens, você deverá primeiro criar uma em seu painel de controle do usuário. Uma vez criada, marque a opção <em>Anexar assinatura</em> nas opções referentes ao envio de mensagens para adicionar sua assinatura. Você também pode adicionar sua assinatura por padrão para todas as suas mensagens enviadas selecionando a opção correta em seu perfil. Se fizer isto, você pode prevenir que uma assinatura seja anexada a mensagens individuais durante o envio de novas mensagens.' 
   ), 
   array( 
      0 => 'Como posso adicionar uma enquete?', 
      1 => 'Quando enviar um novo tópico ou editar a primeira mensagem de um tópico, clique na aba "Criar uma enquete" abaixo do corpo da mensagem; se você não conseguir ver esta opção, é porque provavelmente não possui permissão para criar enquetes ou o tópico não é de sua autoria. Você deve escrever um título para a enquete e em seguida, escrever pelo menos duas opções de voto, certificando-se de colocar cada opção em uma linha separada na área de texto. Você poderá também especificar o número de opções que um usuário poderá selecionar ao votar em "Opções por usuário", estipular um tempo limite para a enquete (sendo 0 ilimitado), e por último a opção de permitir aos usuários a mudança de voto.' 
   ),
	array(
	  0 => 'Por que não posso adicionar mais opções de voto?',
	  1 => 'O limite de opções de voto é configurado pelo administrador do fórum. Se você sentir que precisa adicionar mais opções de voto do que a quantidade permitida, contate o administrador para solicitar as devidas permissões.'
   ), 
  array( 
      0 => 'Como posso editar ou excluir uma enquete?', 
      1 => 'Da mesma forma que as mensagens, as enquetes apenas poderão ser editadas pelo seu autor, moderadores ou administradores do fórum. Para editar uma enquete, clique na primeira mensagem do tópico; esta mensagem é a que tem a enquete associada ao tópico. Caso ninguém tenha submetido voto, o seu autor poderá excluir a enquete ou editar as suas opções de voto. Contudo, se usuários já tiverem submetido os seus votos, apenas moderadores e administradores podem editar ou excluir essa enquete. Isso é para evitar com que sejam alteradas as opções de voto de enquetes em curso.' 
   ), 
  array( 
      0 => 'Por que não consigo entrar em um fórum?', 
      1 => 'O acesso a alguns fóruns poderá estar limitado apenas a determinados usuários ou grupos. Para ver, ler, enviar mensagens, etc., você precisa de uma autorização especial. Apenas o moderador desse fórum e um administrador podem permitir esse acesso. Entre em contato, caso julgue necessário.' 
   ), 
	array(
		0 => 'Por que não consigo adicionar anexos?',
		1 => 'O uso de anexos é garantido por fórum, por grupo ou por usuário. O administrador do fórum talvez não permita que anexos sejam adicionados especificando no fórum que você esteja postando ou que apenas certos grupos possam adicionar anexos. Se você não tem certeza sobre o que pode ser enviado, contate o administrador para maiores informações.'
	),
   array( 
      0 => 'Por que eu recebi uma advertência?', 
      1 => 'Cada administrador possui suas próprias regras para o seu website. Se ele perceber que elas estão sendo ignoradas, você receberá uma advertência. Por favor, note que esta é a decisão do administrador do fórum, e o Grupo phpBB não possui autoridade nenhuma sobre a advertência enviada em seu website. Contate o administrador se você não sabe as razões pelas quais recebeu esta advertência.' 
   ), 
   array( 
      0 => 'Como eu posso denunciar mensagens?', 
      1 => 'Se o administrador tiver ativado esta opção, vá até a mensagem que você deseja denunciar e verá um botão que é utilizado para denunciar mensagens. Clicando ali, você será encaminhado às etapas necessárias para executar esta operação.' 
   ), 
   array( 
      0 => 'O que é o botão “Salvar” no envio de tópicos?', 
      1 => 'Esta opção lhe permite salvar o rascunho de uma determinada mensagem que você deseje enviar em um outro momento. Para recarregá-la, vá ao painel de controle do usuário e siga as devidas opções.' 
   ), 
   array( 
      0 => 'O que a minha mensagem necessita para ser aprovada?', 
      1 => 'O administrador pode decidir se no fórum em que você está postando, as mensagens precisem ser revisadas ou não. E também é possível que o administrador tenha adicionado você a um grupo de usuários que precise ter suas mensagens aprovadas antes de enviá-las ao fórum. Por favor, contate o administrador para maiores informações.' 
   ), 
   array( 
      0 => 'Como eu posso ressuscitar os meus tópicos?', 
      1 => 'Clicando em “Ressuscitar Tópico”, quando você estiver visualizando o mesmo, você pode atualizar e levantar o tópico para o topo do fórum na primeira página. Porém, se você não ver a opção, então esta ferramenta encontra-se desativada. E também é possível efetuar isto simplesmente respondendo ao tópico desejado. Entretanto, fique atento para as regras do website em que você está acessando.' 
   ), 
   array( 
      0 => '--', 
      1 => 'Sobre os Formatos e Tipos de tópicos' 
   ), 
   array( 
      0 => 'O que é BBCode?', 
      1 => 'O BBCode é uma implementação especial do HTML. A possibilidade de se usar BBCode nas suas mensagens é determinada pelo administrador do fórum. Adicionalmente, você poderá desativar o BBCode em cada mensagem. O BBCode por si mesmo é similar em estilo ao HTML, as etiquetas (tags) são incluídas em colchetes "[ e ]" ao invés de &lt;exemplo&gt;, proporcionando uma maior facilidade na formatação de seus textos e mensagens dentro do fórum. Para mais informações, consulte o guia de BBCode, acessível no envio de novas mensagens.' 
   ), 
   array( 
      0 => 'Posso utilizar HTML?', 
      1 => 'Não. Não é possível enviar mensagens em HTML no sistema phpBB3. A maioria dos formatos utilizados em HTML podem ser reproduzidos na utilização das tags de BBCode.' 
   ), 
   array( 
      0 => 'O que são smilies?', 
      1 => 'Os smilies, ou emoticons, são pequenas representações gráficas que podem ser usadas para expressar algum sentimento utilizando poucos caracteres, ou seja, :) quer dizer feliz, :( quer dizer triste. Uma lista completa de smilies pode ser vista no formulário junto à caixa de cada mensagem. Tente evitar o uso excessivo dos smilies, já que podem tornar uma mensagem ilegível, podendo o administrador ou um moderador excluí-los ou deletar a mensagem inteira. O administrador também pode ter configurado um limite para o número de smilies que você pode utilizar em uma mensagem.' 
   ), 
   array( 
      0 => 'Posso exibir imagens?', 
      1 => 'As imagens em geral, podem ser exibidas em suas mensagens. Se o administrador tiver autorizado o envio de anexos, você poderá enviar sua imagem ao painel. De outro modo, você pode exibir uma imagem armazenada em um servidor publicamente acessível, ex. http://www.example.com/my-picture.gif. Você não pode exibir imagens salvas no seu próprio PC (a menos que possua um servidor publicamente acessível), nem imagens armazenadas sob mecanismos que requeiram autenticação, como por exemplo caixas de correio eletrônico do hotmail ou yahoo!, páginas protegidas por senha, etc. Para exibir uma imagem use a tag BBCode [img].' 
   ), 
   array( 
      0 => 'O que são anúncios globais?', 
      1 => 'Os anúncios globais contém normalmente informações importantes e devem ser lidos logo que possível. Eles irão aparecer no topo de todos os fóruns e também no seu painel de controle do usuário. Se você pode ou não utilizar essa função, depende das permissões que lhe foram atribuídas pelo administrador do fórum.' 
   ), 
   array( 
      0 => 'O que são anúncios?', 
      1 => 'Os anúncios contém normalmente informações importantes e devem ser lidos logo que possível. Os anúncios são automaticamente colocados no topo de cada página de cada fórum onde são postados. Se você pode ou não utilizar essa função, depende das permissões que lhe foram atribuídas pelo administrador do fórum.' 
   ), 
   array( 
      0 => 'O que são tópicos fixos?', 
      1 => 'Os tópicos fixos aparecem abaixo dos anúncios, e apenas na primeira página de cada fórum. São tópicos com conteúdo importante e devem ser lidos logo que possível. Da mesma forma que os anúncios, está ao critério do administrador determinar as permissões necessárias para enviar tópicos fixos em cada fórum.' 
   ), 
   array( 
      0 => 'O que são tópicos trancados?', 
      1 => 'Os tópicos trancados são assim colocados por um administrador, ou moderador de cada fórum. Quando um tópico se encontra trancado, os usuários do fórum não podem mais respondê-lo, e qualquer enquete em curso logo será concluída. Apenas administradores e moderadores podem responder nestes tópicos, e você poderá também trancar os seus próprios tópicos, dependendo das permissões que lhe foram atribuídas pelo administrador do fórum. Algum determinado tópico pode ser trancado por diversos motivos.' 
   ), 
   array( 
      0 => 'O que são ícones de tópicos?', 
      1 => 'Os ícones de tópicos são imagens que podem ser associadas com as mensagens para indicar o seu conteúdo. Se você pode ou não utilizar essa função, depende das permissões que lhe foram atribuídas pelo administrador do fórum.' 
   ),
	// This block will switch the FAQ-Questions to the second template column
	array(
		0 => '--',
		1 => '--'
	),  
   array( 
      0 => '--', 
      1 => 'Sobre os Níveis de usuários e Grupos' 
   ), 
   array( 
      0 => 'O que são administradores?', 
      1 => 'Os administradores são os usuários com o nível máximo de controle sobre todos os aspectos do fórum. Podem controlar toda a operação dos fóruns, incluindo criar, editar ou excluir fóruns, determinar permissões, banir usuários, criar grupos de usuários ou moderadores, etc. E ainda possuem todos os poderes de um moderador global em todas os fóruns existentes.' 
   ), 
   array( 
      0 => 'O que são moderadores?', 
      1 => 'Os moderadores são os usuários (ou grupos de usuários) em que seu trabalho é supervisionar diariamente o andamento dos fóruns que lhes estejam designadas. Eles possuem o poder de editar ou excluir mensagens, trancar, destrancar, mover e subdividir tópicos nos fóruns onde são moderadores. Geralmente os moderadores fiscalizam mensagens que possam ir além do assunto em discussão ou o uso de material abusivo e/ou ofensivo.' 
   ), 
   array( 
      0 => 'O que são grupos de usuários?', 
      1 => 'Os grupos de usuários são uma forma dos administradores agruparem os usuários da comunidade. Cada usuário pode pertencer a vários grupos (isto difere da maioria dos outros tipos de quadros de mensagens) e a cada grupo podem ser atribuídos direitos de acesso individuais. Isto torna mais fácil aos administradores destinar vários usuários como moderadores de um determinado fórum ou dar-lhes acesso a um fórum privado, etc.' 
   ), 
   array( 
      0 => 'Onde estão e como me inscrevo em um grupo de usuários?', 
      1 => 'Você pode ver todos os grupo através do link "Grupos de usuários" em seu painel de controle do usuário. Para inscrever-se em um, proceda clicando no botão apropriado. Nem todos os grupos possuem um acesso aberto, alguns estão fechados e alguns poderão inclusive encontrar-se invisíveis. Se o grupo estiver aberto, você poderá solicitar sua inscrição clicando no botão apropriado. Se o grupo necessitar de aprovação, você poderá solicitar sua inscrição clicando no botão apropriado. O líder do grupo precisará aprovar a sua inscrição, podendo perguntar-lhe o motivo do mesmo. Por favor, não insista ao líder do grupo caso a sua inscrição seja recusada. Ele deverá informá-lo a respeito de qualquer decisão e temos certeza de que terá uma boa justificativa para tal.' 
   ), 
   array( 
      0 => 'Como posso ser líder de um grupo?', 
      1 => 'Os grupos de usuários são inicialmente criados pelo administrador do fórum, o qual encarrega alguém de ser responsável pelo mesmo, no caso, o líder do grupo. Se está interessado em criar um grupo de usuários, você deverá primeiramente contatar o administrador com uma mensagem privada circunstanciada.' 
   ), 
   array( 
      0 => 'Por que alguns grupos aparecem em diferentes cores?', 
      1 => 'O administrador do fórum pode assinalar cores aos membros de um determinado grupo, para identificá-los diante de outros usuários e grupos distintos.' 
   ), 
   array( 
      0 => 'O que é um “Grupo padrão”?', 
      1 => 'Se você é membro de mais de um grupo de usuários, será determinado qual cor e rank lhe serão atribuídos por padrão. O administrador poderá lhe conceder a opção de escolha do seu grupo padrão através de seu painel de controle do usuário.' 
   ), 
   array( 
      0 => 'O que é o link “Equipe do fórum”?', 
      1 => 'Esta página exibirá uma lista de todos os membros da equipe do fórum, incluindo os administradores e moderadores com todos os seus respectivos detalhes e informações adicionais.' 
   ), 
   array( 
      0 => '--', 
      1 => 'Sobre as Mensagens Privadas' 
   ), 
   array( 
      0 => 'Não consigo enviar mensagens privadas!', 
      1 => 'Existem três razões para que tal possa acontecer: você não está registrado no fórum e/ou não se encontra autenticado, o administrador terá desativado a opção de enviar mensagens privadas em todo o fórum ou você encontra-se proibido de enviar mensagens. Se este último é o seu caso, então você deverá perguntar ao administrador qual o motivo, caso realmente não saiba.' 
   ), 
   array( 
      0 => 'Recebo mensagens privadas indesejáveis!', 
      1 => 'Você pode bloquear as mensagens privadas enviadas por um usuário em específico utilizando o seu painel de controle do usuário. Se estiver recebendo mensagens indesejáveis por parte de algum usuário, contate o administrador do fórum para que possa proibir o determinado usuário de enviar este tipo de mensagem.' 
   ), 
   array( 
      0 => 'Recebi de alguém neste fórum mensagens de e-mail com assuntos irrelevantes ou abusivos!', 
      1 => 'Embora o sistema de e-mails deste fórum possuir funções de segurança que tentem detectar usuários que enviem este tipo de mensagens, lamentamos que tal tenha acontecido. Você deve informar o acontecido ao administrador do fórum com uma cópia completa do e-mail recebido, sendo muito importante que inclua os cabeçalhos (nestes encontram-se os detalhes do usuário que enviou o e-mail). O administrador poderá então agir em conformidade.' 
   ), 
   array( 
      0 => '--', 
      1 => 'Sobre os Amigos e Inimigos' 
   ), 
   array( 
      0 => 'O que é a lista de amigos e inimigos?', 
      1 => 'Você pode utilizar esta lista para organizar os demais usuários do fórum. Os usuários adicionados em sua lista de amigos serão listados em seu painel de controle do usuário com acesso rápido para ver seus status online e para enviá-los mensagens privadas. Se você solicitar ao suporte de templates, as mensagens enviadas por estes usuários poderão aparecer em destaque. Se você adicionar um usuário em sua lista de inimigos, então qualquer mensagem enviada por ele será ocultada de forma padrão.' 
   ), 
   array( 
      0 => 'Como eu posso adicionar/excluir usuários de minha lista de amigos e inimigos?', 
      1 => 'Você pode adicionar usuários em sua lista de duas formas. Através do perfil de cada usuário existe um link para adicioná-los à sua lista. De maneira alternativa, em seu painel de controle do usuário, você pode adicionar usuários escrevendo diretamente os seus nomes de usuários. Você pode também excluir usuários de sua lista utilizando esta mesma página.' 
   ), 
   array( 
      0 => '--', 
      1 => 'Sobre a Pesquisa' 
   ), 
   array( 
      0 => 'Como eu posso pesquisar?', 
      1 => 'Escrevendo um termo de pesquisa na respectiva página localizada no índice do fórum, visualizando tópicos ou fóruns. A pesquisa avançada pode ser acessada clicando no link "Pesquisar avançada" que encontra-se disponível em todas as páginas do fórum. Como acessar a pesquisa dependerá também do estilo em uso.' 
   ), 
   array( 
      0 => 'Por que a minha pesquisa resultou em nenhuma ocorrência?', 
      1 => 'Sua pesquisa foi provavelmente muito vaga e foram escritos muitos termos comuns que não são incluídos pelo phpBB3. Seja mais específico e utilize as opções disponíveis com a pesquisa avançada.' 
   ), 
   array( 
      0 => 'Por que a minha pesquisa resultou em uma página em branco!?', 
      1 => 'A sua pesquisa resultou em inúmeras ocorrências. Use a pesquisa avançada e seja mais específico nos termos escritos e selecione fóruns onde possam ser pesquisados.' 
   ), 
   array( 
      0 => 'Como eu posso pesquisar por usuários?', 
      1 => 'Vá até a página "Membros" e clique no link "Pesquisar um usuário".' 
   ), 
   array( 
      0 => 'Como eu posso pesquisar minhas próprias mensagens e tópicos?', 
      1 => 'As suas próprias mensagens podem ser exibidas clicando em "Pesquisar mensagens do usuário" através do painel de controle do usuário ou apenas pelo seu próprio perfil. Para encontrar os seus tópicos, utilize a pesquisa avançada e preencha as diversas opções apropriadamente.' 
   ), 
   array( 
      0 => '--', 
      1 => 'Sobre a Subscrição de tópicos e Favoritos' 
   ), 
   array( 
      0 => 'Qual é a diferença existente entre os favoritos e a subscrição?', 
      1 => 'Os favoritos no phpBB3 são muito parecidos com os favoritos de seu navegador. Você não será necessariamente alertado quando houver alguma atualização, mas poderá retornar depois ao tópico desejado. Ao contrário disso, a subscrição irá notificar-lhe quando houver qualquer atualização ao tópico ou fórum pelo seu método ou métodos selecionados.' 
   ), 
   array( 
      0 => 'Como eu posso subscrever um tópico ou fórum específico?', 
      1 => 'Para subscrever um fórum específico, você deve clicar no link nomeado "Subscrever fórum" ao entrar no fórum desejado. Para subscrever um tópico, você pode tanto responder ao tópico marcando a caixa de subscrição, quanto clicar no link nomeado "Subscrever tópico" através do tópico em questão.' 
   ), 
   array( 
      0 => 'Como eu posso excluir minhas subscrições?', 
      1 => 'Para excluir as suas subscrições, você simplesmente deverá ir ao seu painel de controle do usuário e seguir as devidas instruções para suas subscrições.' 
   ), 
   array( 
      0 => '--', 
      1 => 'Sobre os Anexos' 
   ), 
   array( 
      0 => 'Quais os anexos que são permitidos no fórum?', 
      1 => 'Cada administrador pode permitir ou não os diversos tipo de anexos que desejar em seu painel. Se você não tem certeza sobre o que pode ser enviado, contate o administrador para maiores informações.' 
   ), 
   array( 
      0 => 'Como eu posso encontrar todos os meus anexos?', 
      1 => 'Para encontrar a lista de anexos que você enviou, vá ao seu painel de controle do usuário e siga os links para a área de anexos desejada.' 
   ), 
   array( 
      0 => '--', 
      1 => 'Sobre o Sistema phpBB3' 
   ), 
   array( 
      0 => 'Quem escreveu o phpBB?', 
      1 => 'Este software (em sua forma não modificada) é produzido, publicado e com direitos reservados ao <a href="https://www.phpbb.com/">phpBB Group</a>. Está disponível sob a licença GNU General Public Licence e pode ser distribuído gratuitamente. Verifique o link para mais informações.'
   ), 
   array( 
      0 => 'Quem traduziu o phpBB?', 
      1 => 'O phpBB foi traduzido por <a href="http://www.suportephpbb.com.br/">Suporte phpBB</a> e seus colaboradores, sendo esta tradução gratuita e disponível no link anterior. A tradução do Suporte phpBB é a oficial à Língua Portuguesa do Brasil. Para mais informações, visite o Suporte phpBB!' 
   ), 
   array( 
      0 => 'Porque não há a função X?', 
      1 => 'Este software foi escrito e licenciado pelo phpBB Group. Se acha que alguma função pode ser adicionada ou deseja reportar um erro, por favor visite o website <a href="http://area51.phpbb.com/">phpBB Area51</a>, onde você encontrará recursos para fazer isso.'
   ), 
   array( 
      0 => 'Contatos sobre questões abusivas e/ou ilegais relacionadas a este fórum', 
      1 => 'Qualquer administrador listado na página "Equipe do fórum" deve ser um alvo apropriado para as suas dúvidas. Se você não obter resposta, deverá contatar o dono do domínio (faça uma <a href="http://www.google.com/search?q=whois">pesquisa</a>) ou, caso o fórum esteja hospedado em um servidor grátis (por exemplo, CJB.NET, Free Forums, Yahoo!, etc.), a gerência desse serviço. Por favor, note que o Grupo phpBB não possui <strong>absolutamente nenhuma jurisdição</strong> e não pode ser responsável sobre quando, onde e por quem este fórum é utilizado. Não existe motivo em contatar o Grupo phpBB em relação a qualquer questão legal (interrupção e desistência, de responsabilidade, comentário difamatório, etc.) <strong>não diretamente relacionado</strong> com o site phpBB.com ou o software discreto do phpBB por si próprio. Caso envie algum e-mail ao Grupo phpBB acerca do <strong>uso de terceiros</strong> deste software, poderá receber uma resposta concisa ou não receber resposta alguma.' 
   ),
	array(
		0 => 'Como faço para entrar em contato com o administrador do fórum?',
		1 => 'Todos os usuários do fórum podem usar o formulário “Contate-nos”, se a opção estiver ativada.<br />Os usuários podem usar o link “Equipe do fórum”.',
	),
);
