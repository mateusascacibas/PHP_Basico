<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio Positivo ou Negativo</title>
</head>
<body>
    <form action="#" method= "POST">
    <label>Digite um numero: </label>
    <input type="text" name= "num" id= "num">
    <button type = "submit">Enviar</button>
    </form>
    <?php 
        $num = $_POST["num"];
        $estado = "";
        if($num > 0){
            $estado = "Positivo ";
        }
        else if($num < 0){
            $estado = "Negativo ";
        }
        else{
            $estado = "Igual a zero";
        }

        if($num <> ""){
            echo '<script type="text/javascript">alert("O numero digitado é: ' . $estado . '")</script>';
        }


    ?>
</body>
</html>