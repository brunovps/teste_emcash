# Teste Em Cash

### Sobre o Projeto
Projeto criado para cadastrar polígonos e retornar o valor da soma de todos cadastrados via API REST.
Sua criação tem por finalidade testar as habilidades relacionado ao conteúdo citado acima.
### O que usamos?
Foi utilizado no desenvolvimento a linguagem PHP em sua versão 8.1.4, Laravel 9.7, Testes Unitários utilizando Phpunit, MySQL para persistir os dados e Insomnia para testar as rotas.
### Como iniciar
**Pré-Requisitos**
    - Laravel 9.7
    - PHP 8
    - Composer
    - Xampp ou Wamp
    - Programa para testar rotas de API (Insomnia ou Postman)
    
**Iniciando o Projeto**
Para instalar as dependências do projeto execute o código:
```sh
composer install
```
Acessar o phpmyadmin atraves do Xampp/Wamp, crie um novo banco com o nome **teste_emcash** e em seguida alterar o arquivo **.env** e inserir o código abaixo:
```sh
APP_NAME=Laravel
APP_ENV=local
APP_KEY=base64:jv20Xu6Jzd2Kru/uAOO8QEZIr97usseQurvcJwTurCw=
APP_DEBUG=true
APP_URL=http://localhost:8000

LOG_CHANNEL=stack
LOG_DEPRECATIONS_CHANNEL=null
LOG_LEVEL=debug

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=teste_emcash
DB_USERNAME=root
DB_PASSWORD=

BROADCAST_DRIVER=log
CACHE_DRIVER=file
FILESYSTEM_DISK=local
QUEUE_CONNECTION=sync
SESSION_DRIVER=file
SESSION_LIFETIME=120

MEMCACHED_HOST=127.0.0.1

REDIS_HOST=127.0.0.1
REDIS_PASSWORD=null
REDIS_PORT=6379

MAIL_MAILER=smtp
MAIL_HOST=mailhog
MAIL_PORT=1025
MAIL_USERNAME=null
MAIL_PASSWORD=null
MAIL_ENCRYPTION=null
MAIL_FROM_ADDRESS="hello@example.com"
MAIL_FROM_NAME="${APP_NAME}"

AWS_ACCESS_KEY_ID=
AWS_SECRET_ACCESS_KEY=
AWS_DEFAULT_REGION=us-east-1
AWS_BUCKET=
AWS_USE_PATH_STYLE_ENDPOINT=false

PUSHER_APP_ID=
PUSHER_APP_KEY=
PUSHER_APP_SECRET=
PUSHER_APP_CLUSTER=mt1

MIX_PUSHER_APP_KEY="${PUSHER_APP_KEY}"
MIX_PUSHER_APP_CLUSTER="${PUSHER_APP_CLUSTER}"
```
Após realizar os passos acima, execute o código abaixo para criar as migrations necessárias:
```sh
php artisan migrate
```
Execute o código abaixo para iniciar o servidor local após realizar as migrations:
```sh
php artisan serve
```
Para cadastrar um triângulo acesse a rota http://localhost:8000/api/triangle e inserir no corpo da requisição os valores para "base" e "height" do polígono.
**Exemplo**
```sh
{
	"base": 10,
	"height": 10
}
```
Para cadastrar um retãngulo acesse a rota http://localhost:8000/api/rectangle e inserir no corpo da requisição os valores para "base" e "height" do polígono.
**Exemplo**
```sh
{
	"base": 10,
	"height": 10
}
```
Para obter o resultado final com a soma da área de todos os polígonos cadastrados, acesse a rota http://localhost:8000/api/result e ela mostrará no body o valor final.
### Testes Unitários
Para realizar os testes unitários do sistema, podemos fazer de duas formas: executando todos os métodos de teste ou individualmente.
Para executar todos os métodos digite o código abaixo:
```sh
 vendor\bin\phpunit 
```
Para executar cada método individualmente, digite os códigos abaixo, um de cada vez:
```sh
  vendor\bin\phpunit --filter test_get_area_triangle
  vendor\bin\phpunit --filter test_get_area_rectangle
```
