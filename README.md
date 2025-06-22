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

## Configurações de banco de dados
- Requisitos:
    - mysql-server
    - Aplicativos gráficos para gerenciamento de bancos de dados (DBeaver, MysqlWorkbench)

- Após a instalação, definir uma senha para o banco local (em alguns casos, sem a senha, os aplicativos gráficos não conseguem acessar realizar a conexão). `sudo mysql -u root -p`
    - Alterar a senha da máquina local
    `ALTER USER 'root'@'localhost' IDENTIFIED with mysql_native_password by '{new_password}';`
    - Resetar privilégios (importante)
    `FLUSH PRIVILEGES`

sudo dnf install php-mysqlnd


## Futuras feats
Criar um arquivo dockerfile para instalar dependencias

FROM php:8.2-apache

- Instala PDO MySQL
RUN docker-php-ext-install pdo pdo_mysql

- Copia os arquivos do seu projeto
COPY . /var/www/html