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
