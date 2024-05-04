# escolar1.0
 
Instalação do Sistema Escolar (CodeIgniter 3)
Este guia detalha os passos necessários para instalar e executar o Sistema Escolar em um ambiente local usando o CodeIgniter.

Pré-requisitos
PHP versão 7.4 ou superior instalado no seu sistema.
Banco de dados PostgreSQL versão 12 ou superior configurado e em execução.
Instalação
Baixe ou clone o repositório: Você pode baixar o repositório diretamente como um arquivo ZIP ou cloná-lo usando o Git. Se você estiver usando o Git, execute o seguinte comando no terminal:

bash

git clone https://caminho/para/o/escolar1.0


Coloque na pasta do servidor web: Após baixar ou clonar o repositório, coloque-o na pasta do seu servidor web local. Se estiver usando XAMPP, por exemplo, coloque-o na pasta htdocs.
Configuração do Banco de Dados: Crie um novo banco de dados PostgreSQL e importe o script de banco de dados fornecido no repositório para criar as tabelas necessárias que esta na pasta DATABASE não esquecer de criar manualmente o Banco de dados chamado escola.

configuração do config.php/databese.php:


	'hostname' => 'localhost',
	'username' => 'seu username',
	'password' => 'sua senha',
	'database' => 'escola',
	'dbdriver' => 'postgre',


Configuração do CodeIgniter: Dentro da pasta do projeto, vá para o arquivo application/config/database.php e atualize as configurações do banco de dados com as credenciais do seu banco de dados PostgreSQL.


Executar o Servidor Embutido PHP: Abra o terminal, navegue até a pasta do projeto do Sistema Escolar e execute o seguinte comando:


bash
Copy code
php -S localhost:8000


Acessar o Sistema: Abra o navegador da web e acesse o seguinte URL:

http://localhost:8000

Utilização

Explore os diferentes módulos e funcionalidades disponíveis no sistema, como gerenciamento de turmas, alunos, professores, etc.
Certifique-se de ajustar as configurações e personalizar o sistema de acordo com suas necessidades específicas.
