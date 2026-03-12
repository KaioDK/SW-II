<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Processa</title>
</head>
<body>
    <?php 
        $nome = $_POST['nome'];
        $idade = $_POST['idade'];
        $email = $_POST['email'];
        $ano = date('Y');
        $nasc = $ano - $idade;

        //echo $nome
        // echo "<p>O nome é: $nome</p>";
        // echo "<p>A idade é: $idade</p>";
        // echo "<p>O email é: $email</p>";
    ?>

    <p>O nome é: <?php echo $nome?></p>
    <p>A idade é: <?php echo $idade?></p>
    <p>O email é: <?php echo $email?></p>
    <p>Seu ano de nascimento é: <?php echo $nasc ?> </p>
    <hr>

    <?php
        if ($idade < 18){
            echo "<p style = 'color: blue'> Você é menor de idade! </p>";
        }
        else
            echo "<p style = 'color: red'> Você é maior de idade! </p>";

    ?>
    </body>
</html>