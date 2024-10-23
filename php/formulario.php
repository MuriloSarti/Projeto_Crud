<?php

if (isset($_POST['submit'])) {

    include_once('config.php');

    $nome = $_POST['nome'];
    $senha = $_POST['senha'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $data_nasc = $_POST['data_nascimento'];

    $result = mysqli_query($conexao, "INSERT INTO usuarios(nome,senha,email,telefone,data_nasc)
    VALUES ('$nome','$senha','$email','$telefone','$data_nasc')");


    header('Location: index.php');
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="/Projeto Gn para treinar CRUD/css/form.css">
    <link rel="shortcut icon" href="lampada.png" type="image/x-icon">
    <script src="https://code.jquery.com/jquery-3.7.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página de Cadastro</title>
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
            background: linear-gradient(to right, black, #131212, black);
        }

        .box {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: black;
            padding: 15px;
            border-radius: 15px;
            width: 30%;
            color: white;
        }


        .inputBox {
            position: relative;
        }

        .inputUser {
            background: none;
            outline: none;
            color: white;
            font-size: 15px;
            width: 100%;
            letter-spacing: 2px;
        }

        .label_input {
            position: absolute;
            top: 0px;
            left: 0px;
            pointer-events: none;
            transition: .5s;
        }

        .inputUser:focus~.label_input,
        .inputUser:not(:placeholder-shown)~.label_input {
            top: -20px;
            font-size: 12px;
            color: white;
        }

        #data_nascimento {
            border: none;
            padding: 8px;
            border-radius: 10px;
            outline: none;
            font-size: 15px;

        }

        #submit {
            background-image: linear-gradient(to right, black, gray);
            width: 100%;
            border: none;
            padding: 15px;
            color: white;
            font-size: 15px;
            border-radius: 10px;
            cursor: pointer;
        }

        #submit:hover {
            background-image: linear-gradient(to right, #1f1f1f, #555555);
        }

        .h {
            color: white;
            text-decoration: none;
            font-size: 20px;
        }

        .hh {
            text-align: center;
        }
    </style>
</head>

<body>
    <a class="h" href="index.php">Voltar</a>
    <div class="box">
        <form action="formulario.php" method="POST">
            <div>

                <h1 class="hh"> Formulario clientes</h1>
                <br>
                <div class="inputBox">
                    <input type="text" name="nome" id="nome" class="inputUser" required>
                    <label for="nome" class="label_input">Nome Completo</label>
                </div>
                <br>
                <br>
                <div class="inputBox">
                    <input type="email" name="email" id="email" class="inputUser" required>
                    <label for="email" class="label_input">Email</label>
                </div>
                <br>
                <br>
                <div class="inputBox">
                    <input type="password" name="senha" id="senha" class="inputUser" required>
                    <label for="senha" class="label_input">Senha</label>
                </div>
                <br>
                <br>
                <div class="inputBox">
                    <input type="cel" name="telefone" id="telefone" class="inputUser" required>
                    <label for="telefone" class="label_input">Telefone</label>
                </div>
                <br>
                <br>
                <label for="nome"> <b> Data de Nascimento </b> </label>
                <input type="text" name="data_nascimento" class="inputUser" id="date" class="inputUser" required>
            </div>
        </form>
    </div>

    <script>
        $('#telefone').mask('(00) 0000-0000');

        $('#date').mask('00/00/0000');
    </script>

</body>


</html>