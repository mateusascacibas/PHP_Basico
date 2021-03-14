<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fatorial</title>
</head>
<body>
    <form action="#" method="post">
    <label>Digite um numero: </label>
    <input type="text" id = "num" name = "num">
    <button type = "submit">Enviar</button>
    </form>

    <?php 
        $num = $_POST['num'];
        $fatorial = 1;


       

        if($num <> ""){
            for($i = 1; $i <= $num; $i++){
                $fatorial = $i * $fatorial;
            }
            echo "<p> O fatorial de {$num} é: {$fatorial} </p>";
        }
       
    ?>

</body>
</html>