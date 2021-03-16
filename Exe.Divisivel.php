<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio Divisivel</title>
</head>
<body>
<form method="post" action="#">
    <label>Numero: </label>
    <input type="text" name = "num" id = "num">
    <button type = "submit">Enviar</button>
</form>

<?php
/*Entrar com um número e informar se ele é
divisível por 10, por 5, por 2 ou se não é
divisível por nenhum destes*/ 
    $num = $_POST["num"];
    if($num % 2 == 0 || $num % 5 == 0 || $num % 10 == 0){
        echo '<script type="text/javascript">alert("É sim divisivel por 10, 5 ou 2")</script>';
    }
    else{
        echo '<script type="text/javascript">alert("Não é divisivel por 10, 5 ou 2")</script>';
    }
?>
</body>
</html>