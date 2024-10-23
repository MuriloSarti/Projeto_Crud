<?php
include_once('config.php');

if (!empty($_GET['id'])) {
    $id = $_GET['id'];
    $sqlSelect = "SELECT * FROM usuarios WHERE id=$id";
    $result = $conexao->query($sqlSelect);
    if ($result->num_rows > 0) {
        while ($user_data = mysqli_fetch_assoc($result)) {
            $nome = $user_data['nome'];
            $senha = $user_data['senha'];
            $email = $user_data['email'];
            $telefone = $user_data['telefone'];
            $data_nasc = $user_data['data_nasc'];
        }
    } else {
        header('Location: sistema.php');
    }
} else {
    header('Location: sistema.php');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="lampada.png" type="image/x-icon">
    <script src="https://code.jquery.com/jquery-3.7.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.js"></script>
    <title>Pagina de Editar</title>
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
    </style>
</head>

<body>
    <a class="h" href="sistema.php">Voltar</a>
    <div class="box">
        <form action="saveEdit.php" method="POST">
            <div>
                <h1>Editar Cliente</h1>
                <br>
                <div class="inputBox">
                    <input type="text" name="nome" id="nome" class="inputUser" value=<?php echo $nome; ?> required>
                    <label for="nome" class="labelInput">Nome completo</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="senha" id="senha" class="inputUser" value=<?php echo $senha; ?> required>
                    <label for="senha" class="labelInput">Senha</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="email" id="email" class="inputUser" value=<?php echo $email; ?> required>
                    <label for="email" class="labelInput">Email</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="tel" name="telefone" id="telefone" class="inputUser" value=<?php echo $telefone; ?> required>
                    <label for="telefone" class="labelInput">Telefone</label>
                </div>
                <br>
                <label for="data_nascimento"><b>Data de Nascimento:</b></label>
                <input type="text" name="data_nascimento" class="inputUser" id="date" value=<?php echo $data_nasc; ?> required>
                <br><br>
                <input type="hidden" name="id" value=<?php echo $id; ?>>
                <input type="submit" name="update" id="submit">
            </div>
        </form>
    </div>

    <script>
        $('#telefone').mask('(00) 0000-0000');

        $('#date').mask('00/00/0000');
    </script>
</body>

</html>