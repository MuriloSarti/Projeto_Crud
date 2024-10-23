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
