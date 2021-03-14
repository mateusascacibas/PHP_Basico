<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Impar ou Par</title>
</head>
<body>
<form action="#" method="post">
    <label>Digite a nota 1: </label>
    <input type="text" id = "num1" name = "num1">
    <label>Digite a nota 2: </label>
    <input type="text" id = "num2" name = "num2">
    <label>Digite a nota 3: </label>
    <input type="text" id = "num3" name = "num3">
    <button type = "submit">Enviar</button>
    </form>

    <?php 
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        $num3 = $_POST['num3'];

        $soma = $num1 + $num2 + $num3;
        $media = $soma / 3;
        $media = number_format($media, 2, '.', '');

        if($num1 <> ""){
            if($media >= 6){
                echo "<p> Aprovado com média {$media} </p>";
            }
            else{
                echo "<p> Reprovado com média {$media} </p>";
            }
        }
       
    ?>
</body>
</html>