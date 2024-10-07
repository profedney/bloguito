# Bloguito

**Bloguito** é um blog fórum ou página de mensagens minimalista desenvolvido em PHP, onde as mensagens dos usuários são armazenadas em um arquivo `.txt`. Este projeto é ideal para quem está aprendendo PHP e manipulação de arquivos de forma simples e prática.

## Características

- Armazenamento das mensagens em um arquivo `.txt`.
- Interface simples e funcional.
- Separação de estilo com `CSS`.
- Ideal para fins didáticos e pequenos projetos.

## Requisitos

Para rodar o Bloguito localmente, você precisará de:

- Servidor web com suporte a PHP (por exemplo, [XAMPP](https://www.apachefriends.org/) ou [WAMP](http://www.wampserver.com/)).
- Navegador moderno.

## Instalação

1. Faça o clone deste repositório em sua máquina local:

    ```bash
    git clone https://github.com/seu-usuario/bloguito.git
    ```

2. Coloque os arquivos em seu servidor local, por exemplo, na pasta `htdocs` (para XAMPP) ou `www` (para WAMP).

3. Certifique-se de que o servidor esteja rodando.

4. Acesse o Bloguito em seu navegador através de `http://localhost/bloguito/index.php`.

## Arquivos Principais

- **`index.php`**: Página principal do Bloguito, onde os usuários podem visualizar e postar mensagens.
- **`save_post.php`**: Script responsável por salvar as mensagens no arquivo `.txt`.
- **`style.css`**: Arquivo de estilo que define o layout e a aparência do Bloguito.
- **`posts.txt`**: Arquivo gerado automaticamente para armazenar as mensagens postadas pelos usuários.

## Como Funciona

### Postar Mensagens

1. Os usuários inserem seu nome e mensagem no formulário.
2. As mensagens são enviadas ao arquivo `save_post.php`, onde são formatadas e gravadas no arquivo `posts.txt`.
3. As mensagens são carregadas e exibidas na página principal `index.php`, mantendo a simplicidade do sistema.

### Exibição das Mensagens

As mensagens são carregadas e exibidas diretamente do arquivo `posts.txt`. Cada mensagem é separada por `|` e segue o formato:


O arquivo `index.php` carrega essas informações, formata e as exibe como blocos de mensagens.

## Contribuindo

Contribuições são bem-vindas! Se você encontrar algum problema ou tiver sugestões de melhoria, sinta-se à vontade para abrir uma [issue](https://github.com/seu-usuario/bloguito/issues) ou fazer um fork e enviar um Pull Request.

## Licença

Este projeto está licenciado sob a licença MIT. Veja o arquivo [LICENSE](LICENSE) para mais detalhes.
