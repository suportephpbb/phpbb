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

$synonyms = array( 
	'abençoar'	=> 'abençoado', 
	'abreviar'	=> 'reduzir', 
	'acomodar'	=> 'relaxar', 
	'administração'	=> 'sustentação', 
	'altura'	=> 'estatura', 
	'andré'		=> 'nome', 
	'anemia'	=> 'doença', 
	'anêmico'	=> 'doente', 
	'anestesia'	=> 'sensibilidade', 
	'anexo'		=> 'arquivo', 
	'anúncios'	=> 'notícias', 
	'apatia'	=> 'indiferença', 
	'armadura'	=> 'uniforme', 
	'arqueiro'	=> 'guerreiro', 
	'arqueologia'	=> 'antiguidade', 
	'arqueozologia'	=> 'arqueozoico', 
	'ártico'	=> 'do norte', 
	'atendimento'	=> 'recepção', 
	'ausência'	=> 'falta', 
	'avião'		=> 'aeronave', 

	'biologia'	=> 'natural', 

	'calendário'	 => 'data', 
	'cancelado'	=> 'eliminado', 
	'capturar'	=> 'prender', 
	'carro'		=> 'automóvel', 
	'catálogo'	=> 'guia', 
	'cenozoico'	=> 'antigo', 
	'centro'	=> 'meio', 
	'churrasco'	=> 'churrasqueira', 
	'cinza'		=> 'grisalho', 
	'comissão'	=> 'multidão', 
	'conceder'	=> 'entregar', 
	'concordar'	=> 'combinar', 
	'conexão'	=> 'ligação', 
	'cor'		=> 'tom', 
	'criar'		 => 'gerar', 
	'curriculum'	 => 'currículo', 

	'defesa'	=> 'proteção', 
	'desconhecido'  => 'ignorado', 
	'descrição'	=> 'características', 
	'desculpas'	=> 'perdão', 
	'desenvolver'	=> 'progredir', 
	'disciplina'	 => 'comportamento', 

	'enciclopédia'  => 'obras', 
	'equipes'	=> 'grupos', 
	'escritos'	=> 'textos', 
	'estético'		 => 'visual', 
	'estrangeiro'	=> 'externo', 
	'etimologia'	 => 'etimológico', 
	'executando'	 => 'rodando', 
	'existência'	 => 'vida', 
	'exorbitante'	=> 'exagero', 
	'exuberante'	 => 'abundante', 

	'favorito'	=> 'predileto', 
	'feto'		=> 'ser vivo', 
	'ficção'	=> 'efeitos', 
	'flores'	=> 'florescente', 

	'galera'	=> 'pessoal', 
	'genealogia'	=> 'genealógica', 
	'ginecologia'	=> 'ginecologista', 
	'gramática'	=> 'língua', 
	'guerrilha'	=> 'revolta', 

	'haver'		=> 'existir', 
	'hemácia'	=> 'hemoglobina', 
	'hematina'	=> 'glóbulos', 
	'hematite'	=> 'células', 
	'hematologia'	=> 'sangue', 
	'hipoteca'	=> 'hipotecar', 
	'honra'		=> 'dignidade', 

	'ID'		 => 'identificação', 
	'inocular'	=> 'inoculação', 
	'instalar'	=> 'instalação', 
	'irrelevante'	=> 'sem importância', 

	'jan'		=> 'janeiro', 
	'joias'		 => 'bijuteria', 
	'julgamento'	 => 'sentença', 

	'km'		=> 'quilômetro', 

	'lazer'		 => 'descanço', 
	'licença'	=> 'autorização', 
	'limite'	=> 'fronteira', 
	'liquificar'	 => 'líquido', 

	'm'			=> 'metro', 
	'manutenção'	=> 'gerência', 
	'mar'		=> 'março', 
	'medieval'	=> 'clássico', 
	'milha'		=> 'medida', 
	'miscelânea'	=> 'mistura', 

	'números'		=> 'quarenta', 

	'ocorrência'	=> 'acontecimento', 
	'ofensa'	=> 'mágoa', 
	'ok'		=> 'correto', 
	'omissão'	=> 'falta', 
	'organizar'	=> 'arrumar', 
	'otimizar'	=> 'ótimo', 

	'país'		=> 'nação', 
	'paleografia'	=> 'decifrar', 
	'paleolítico'	=> 'idade da pedra', 
	'paleontologia'	=> 'fósseis', 
	'paleontólogo'	=> 'paleontologista', 
	'paleozoico'	=> 'era primária', 
	'panfleto'	=> 'bilhete', 
	'paralelo'	=> 'semelhante', 
	'parlamento'	 => 'assembleia', 
	'PC'		=> 'computador', 
	'pediatra'	=> 'infantil', 
	'pediatria'	=> 'crianças', 
	'peralta'	=> 'peralta', 
	'perodontia'	=> 'perodontia', 
	'phpBB'		 => 'Suporte phpBB', 
	'pijamas'	=> 'vestes', 
	'porto'		=> 'parada', 
	'possuir'	=> 'ter', 
	'praticar'	=> 'desempenhar', 
	'projeto'	=> 'programa', 
	'vc'					=> 'você',
	'tb'					=> 'também',
	'tbr'					=> 'trabalhar',
	'provisório'	=> 'temporário', 
	'psi'		=> 'psicologia', 

	'guito'					=> 'dinheiro',

	'questionário'	=> 'interrogatório', 

	'rarefazer'	=> 'dilatar', 
	'receber'	=> 'aceitar', 
	'recomendar'	=> 'aconselhar', 
	'registro'	=> 'cadastro', 
	'resistência'	=> 'relutância', 
	'resumir'	=> 'sintetizar', 
	'reunião'	=> 'comitê', 
	'rotulado'	=> 'nomeado', 

	'sabor'		=> 'gosto', 
	'salvador'	=> 'herói', 
	'separar'	=> 'dividir', 
	'set'		=> 'setembro', 
	'sincero'	=> 'verdadeiro', 
	'sincronizar'	=> 'ajustar', 
	'substituído'	=> 'trocado', 
	'sucesso'	=> 'êxito', 
	'superintendente'	=> 'supervisor', 
	'surpresa'	=> 'inesperado', 

	'teatro'	=> 'cinema', 
	'trabalhador'	=> 'funcionário', 
	'trabalhadores'	=> 'funcionários', 
	'trabalho'	=> 'emprego', 
	'tradução'	=> 'adaptação', 
	'transferido'	=> 'transmitido', 

	'usual'		 => 'comum', 

	'valor'		 => 'nota', 
	'vencer'	=> 'derrotar', 
	'verificar'	=> 'checar', 
	'vigor'		 => 'vitalidade', 
	'visível'	=> 'notável', 
	'vol'		 => 'volume', 
); 
