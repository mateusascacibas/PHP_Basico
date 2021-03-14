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
    <label>Digite um numero: </label>
    <input type="text" id = "num" name = "num">
    <button type = "submit">Enviar</button>
    </form>

    <?php 
        $num = $_POST['num'];

        if($num <> ""){
            if($num % 2 == 0){
                echo "<p> O numero {$num} é Par</p>";
            }
            
            else{
                echo "<p> O numero {$num} é Impar</p>";
            }
        }
       
    ?>
</body>
</html>