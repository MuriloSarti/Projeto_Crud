<?php
// isset -> serve para saber se uma variável está definida
include_once('config.php');
session_start();
if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $data_nasc = $_POST['data_nascimento'];

    $sqlInsert = "UPDATE usuarios 
        SET nome='$nome',email='$email',telefone='$telefone',data_nasc='$data_nasc'
        WHERE id=$id";
    $result = $conexao->query($sqlInsert);

    $_SESSION['msg'] = 'Cadastrado com sucesso';
    /*
        echo '<pre>';
        print_r($_SESSION);
        die;
        */
}


header('Location: sistema.php');
