mvc pastas

bibliotecas:
- eloquent (facilita o SQL, talvez pesquise semelhatne pro phy)
- phinx? para criar o banco de dados

usei o phinx para adicionar ao código a estrutura do DB para ser mais
fácil rodar em outras máquinas (phinx.php estabelece conexão, 
db\migrations tem as migrations de tabelas adicionadas)
o nome do database é flight_projeto 
para criar na maquina, install composer e criar o db no phpmyadmin e
(esqueci)

 o eloquent facilita os comandos php no código
 a pasta .htaaccess  da erro no codigo vscode mas funciona

tem q ter:
1.  **XAMPP:** Com os módulos Apache e MySQL.
2.  **Composer:** O gerenciador de dependências para PHP.
3.  **Git:** Para clonar o repositório.

ajeitando o db -->>
no terminal do projeto:
1. install composer 
2. composer install

no phpmyadmin:
criar database com o nome 'flight_projeto'

no terminal do projeto:
2. vendor\bin\phinx 
