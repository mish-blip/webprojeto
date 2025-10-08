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

ajeitando o db -->>
no terminal do projeto:
1. install composer 

no phpmyadmin:
criar database com o nome 'flight_projeto'

no terminal do projeto:
2. vendor\bin\phinx 