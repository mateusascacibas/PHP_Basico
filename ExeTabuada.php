<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabuada</title>

    <style>
    h1{
        text-align: center;
    }
    
    </style>
</head>
<body>
    <h1>Tabuada</h1>
    <form action="#" method="post">
    <label>Digite um numero: </label>
    <input type="text" name ="num" id= "num">
    <button type = "submit">Enviar</button>
    <br>
    </form>

    <?php 
    $num = $_POST["num"];

    if($num <> 0){
        for($i = 1; $i <= 10; $i++){
            $result = $num * $i;
            echo "<p>{$num} x {$i} = {$result} </p>";
           
        }
    }
   

    ?>
</body>
</html>