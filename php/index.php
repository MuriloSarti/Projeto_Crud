<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="lampada.png" type="image/x-icon">
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
            background: linear-gradient(to right, black, #131212, black);
        }

        div {
            background-color: black;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            padding: 100px;
            color: #fff;
            width: 300px;
        }

        input {
            padding: 15px;
            border: none;
            outline: none;
            font-size: 15px;
        }

        .inputSubmit {
            background-color: white;
            border: none;
            padding: 10px;
            width: 100%;
            border-radius: 4px;
            color: white;
            font-size: 15px;
            color: black;

        }

        .inputSubmit:hover {
            background-color: gray;
            cursor: pointer;
            color: white;
        }

        .h {
            color: white;
            text-decoration: none;
            font-size: 20px;
        }
        
        .label_input {
            position: absolute;
            top: 0px;
            left: 0px;
            pointer-events: none;
            transition: .5s;
        }
        .inputUser {
            background: none;
            border: none;
            border-bottom: 1px solid ;
            outline: none;
            color: white;
            font-size: 15px;
            width: 100%;
            letter-spacing: 2px;
        }
        .inputUser:focus~.label_input,
        .inputUser:not(:placeholder-shown)~.label_input {
            top: -20px;
            font-size: 12px;
            color: blue;
        }

        .cda {
            color: white;
            text-decoration: none;
            top: 30px;
            position: relative;
            left: 100px;
            font-size: 20px;
        }

        .h1 {
            text-align: center;
            font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
        }

    </style>
</head>

<body>
    <div>
        <h1 class="h1">Login</h1>
        <form action="testLogin.php" method="POST">

            <input type="email" name="email" placeholder="Email" class="inputUser" required>
            <br><br>
            <input type="password" name="senha" placeholder="Senha" class="inputUser" required>
            <br><br>
            <input class="inputSubmit" type="submit" name="submit" value="Enviar">
            <a class="cda" href="formulario.php">Cadastre-se</a>
        </form>
    </div>
</body>

</html> 