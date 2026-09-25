# Pacote de Idioma Português Brasileiro para phpBB

[![Build Status](https://github.com/suportephpbb/phpbb/actions/workflows/translation-validator.yml/badge.svg?branch=3.3.x)](https://github.com/suportephpbb/phpbb/actions/workflows/translation-validator.yml?query=branch%3A3.3.x)

Tradução oficial do phpBB para Português Brasileiro (pt_br), mantida pela comunidade [Suporte phpBB](https://www.suportephpbb.com.br/).

- **Versão da tradução:** 1.4.19
- **Compatibilidade:** phpBB 3.3.19 (branch 3.3.x)

## O que está incluído

- **Core do phpBB:** Todas as mensagens do sistema, instalador e painéis de controle (ACP, MCP e UCP) em `language/pt_br/`.
- **Tema prosilver:** Botões e imagens localizadas para o estilo padrão em `styles/prosilver/theme/pt_br/`.
- **Extensão VigLink:** Tradução da extensão oficial integrada ao phpBB em `ext/phpbb/viglink/language/pt_br/`.

## Requisitos

- phpBB 3.3.x instalado.
- Acesso aos arquivos do fórum (via FTP, SSH ou gerenciador de arquivos da hospedagem).
- Permissão de escrita nas pastas do phpBB.

## Instalação

1. Baixe o pacote mais recente no [phpBB.com](https://www.phpbb.com/customise/db/translation/brazilian_portuguese/).
2. Descompacte o arquivo `.zip` no seu computador.
3. Envie as pastas `ext`, `language` e `styles` para a pasta raiz da sua instalação do phpBB (onde ficam os arquivos `config.php`, `index.php`, etc.).
4. Acesse o **Painel de Administração (ACP)** do seu fórum.
5. Vá até a aba **Personalização** > **Pacotes de idiomas**.
6. Na lista de pacotes desinstalados, localize **Brazilian Portuguese (Português Brasileiro)** e clique em **Instalar**.
7. *(Opcional)* Para tornar o Português Brasileiro o padrão para visitantes e novos registros, acesse **Geral** > **Configuração do fórum** e altere a opção **Idioma padrão**.

## Como contribuir

Toda colaboração é muito bem-vinda! Se você encontrou algum erro de digitação, frase confusa, termo fora do padrão do phpBB ou alguma string que ainda esteja em inglês, você pode ajudar de duas maneiras:

1. **Abrindo uma issue:** Descreva onde a mensagem aparece e, se possível, sugira a melhoria.
2. **Enviando um pull request:** Se já fez o ajuste localmente, envie suas alterações diretamente para o repositório.

### Dicas para envio de contribuições

- **Codificação:** Salve sempre os arquivos em **UTF-8 sem BOM** para evitar problemas com acentos.
- **Consistência:** Siga o padrão de terminologia já consolidado no phpBB (por exemplo: *Fórum*, *Tópico*, *Mensagem*, *Painel de Administração*).
- **Variáveis e pontuação:** Mantenha as tags HTML, aspas e marcadores de posição (como `%s`, `%d`, `{USERNAME}`) intactos.
- **Validação local:** Se você tiver o Composer instalado, pode testar a integridade das strings antes de abrir o PR:
  ```bash
  composer install
  composer check
  ```

## Licença

Este pacote é distribuído sob a licença [GNU General Public License v2 (GPL-2.0)](LICENSE), em conformidade com a licença do próprio phpBB.

## Suporte e comunidade

- Fórum da comunidade: [suportephpbb.com.br](https://www.suportephpbb.com.br/)
- Repositório oficial: [github.com/suportephpbb/phpbb](https://github.com/suportephpbb/phpbb)

## Créditos

Agradecemos a todos que colaboram e ajudam a manter esta tradução em dia:

### Mantenedores
* [Chico Gois](https://www.phpbb.com/community/memberlist.php?mode=viewprofile&u=241433)
* [Vinny](https://www.phpbb.com/community/memberlist.php?mode=viewprofile&u=1065865)

### Colaboradores
* [acdona (Antonio Carlos Doná)](https://www.suportephpbb.com.br/forum/memberlist.php?mode=viewprofile&u=31780)
* [henrique.seven2011 (Saulo Henrique)](https://www.phpbb.com/community/memberlist.php?mode=viewprofile&u=1371157)

### Ex-colaboradores
* [Andre Távora](https://www.phpbb.com/community/memberlist.php?mode=viewprofile&u=302277)
* [jvc94](https://www.phpbb.com/community/memberlist.php?mode=viewprofile&u=1089185)
* [umarizal (Leandro dos Santos)](https://www.phpbb.com/community/memberlist.php?mode=viewprofile&u=512395)