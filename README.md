# MVC

Sempre que uma aplicação for iniciada ou hospedada em um servidor, ele sempre irá procurar o arquivo index.php dentro de uma pasta public na raiz do projeto, esse no caso seria o entry point da aplicação

## Rodar a aplicação
php -S localhost:8080 -t public

## Composer
O composer é um gerenciador de dependências do PHP (A Dependency Manager for PHP) assim como o Maven, Gradle ou NPM.
Ele usa como base um arquivo composer.json e precisa do comando composer para instalar as dependências. (sudo composer dump-autoload -o)
Ao utilizar o comando ele cria uma pasta chamada vendor, onde estarão os arquivos de dependência (igual ao node modules).

### Comandos do composer
- sudo composer require: Ao utilizar esse comando é aberto um prompt para pesquisa de dependências.


