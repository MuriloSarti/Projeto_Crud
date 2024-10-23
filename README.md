CRUD PHP
Este projeto é um exemplo básico de um sistema CRUD (Create, Read, Update, Delete) usando apenas PHP e MySQL. Ele permite a adição, visualização, edição e exclusão de registros em um banco de dados.

📋 Pré-requisitos
PHP (versão 7.4 ou superior)
MySQL (ou MariaDB)
Servidor Web (como Apache ou Nginx)
Navegador Web
🚀 Começando
1. Clone o Repositório
bash
Copiar código
git clone https://github.com/seu-usuario/crud-php.git
2. Configuração do Banco de Dados
Crie um banco de dados no MySQL:

sql
Copiar código
CREATE DATABASE crud_php;
Crie a tabela users para o CRUD:

sql
Copiar código
CREATE TABLE users (
  id INT(11) AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(100) NOT NULL,
  email VARCHAR(100) NOT NULL,
  age INT(3) NOT NULL,
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
Configuração do arquivo config.php:

No arquivo config.php, atualize as credenciais de banco de dados:

php
Copiar código
<?php
$servername = "localhost";
$username = "seu-usuario";
$password = "sua-senha";
$dbname = "crud_php";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
?>
3. Executando o Projeto
Inicie seu servidor local (pode ser com o XAMPP, WAMP ou simplesmente usando o servidor embutido do PHP):

bash
Copiar código
php -S localhost:8000
Abra o navegador e acesse http://localhost:8000.

📂 Estrutura de Diretórios
bash
Copiar código
/crud-php
|-- config.php        # Configuração de conexão com o banco de dados
|-- create.php        # Página para criar um novo registro
|-- index.php         # Página principal para listar registros
|-- update.php        # Página para editar um registro
|-- delete.php        # Script para deletar um registro
|-- styles.css        # Arquivo de estilos (opcional)
🛠️ Funcionalidades
Criar: Adiciona um novo usuário ao banco de dados.
Ler: Lista todos os usuários cadastrados.
Atualizar: Permite a edição de informações do usuário.
Deletar: Remove um usuário específico do banco de dados.
✨ Como Contribuir
Fork o projeto
Crie uma branch para sua feature (git checkout -b minha-feature)
Faça commit das suas alterações (git commit -m 'Adiciona minha feature')
Push para a sua branch (git push origin minha-feature)
Abra um Pull Request
📄 Licença
Este projeto está sob a licença MIT. Veja o arquivo LICENSE para mais detalhes.
