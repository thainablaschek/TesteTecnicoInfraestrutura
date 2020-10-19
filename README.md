# TesteTecnicoInfraestrutura
Teste técnico de aptidão para vaga de infraestrutura 


Descrição do projeto
"Desenvolver e hospedar uma aplicação web simples que receberá comentários.
Esses dados deverão ser armazenados em um banco de dados MySQL. Esse
formulário será disponibilizado para uma grande quantidade de clientes, desta
forma, precisamos garantir que o ambiente seja escalável e altamente
disponível."


Getting started
Para executar o projeto, será necessário instalar os seguintes programas:
- Docker-compose
- Docker 

Desenvolvimento
Para iniciar o desenvolvimento, é necessário clonar o projeto do GitHub num diretório de sua preferência:
cd "diretorio de sua preferencia"
git clone --------------------


Construção (Build)
Para construir o projeto com o Docker, executar os comando abaixo:
- docker-compose up

Depois acessar o http://localhost:3000/ logar como admin senha: ------------ ir e em plugiins -> datasource -> prometheus. Configurar com o nome Prometheus e a URL: http://127.0.0.1:9090
- Acessar: + -> import -> Import via panel json, importar o conteudo:

----------
->Load 

Features
O projeto pode ser utilizado para criar uma base de dados de comentarios e quais os eventuais nomes, logo pode ser realizado o monitoramento a partir do Grafana para saber como estão sendo utilados os logs da aplicação.

Testes
Para testar acessar o 127.0.0.1:9090 no navegador, clicar no enviar e a partir do grafana verificar os graficos gerados. 

Licença
Não licenciado.
