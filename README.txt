        projeto web
- pastas mvc
- framework flight
- eloquent (facilita o SQL)
- phinx? para criar/migrar o banco de dados

usei o phinx para adicionar ao código a estrutura do DB para ser mais
fácil rodar em outras máquinas (phinx.php estabelece conexão, 
db\migrations tem as migrations de tabelas adicionadas)
o nome do database é flight_projeto 

 o eloquent facilita os comandos php no código
 a pasta .htaaccess  da erro no codigo vscode mas funciona

tem q ter:
1.  XAMPP
php mais recente. - no arquivo php ir em php.ini e editar o zip (tira o ;)
2.  Composer
3.  Git

rodando:
- nome do arquivo: flight-projeto
- xampp mysql e apache 
- arquivo php.ini editado com o zip sem ;

1. no terminal do projeto:
composer install

2. no phpmyadmin:
criar database com o nome 'flight_projeto'

3. no terminal do projeto:
vendor\bin\phinx migrate  
*migra as tabelas do db

4. link pra acessar:
localhost/projeto-flight/public/
