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
    <label>Digite um numero: </label>
    <input type="text" id = "num2" name = "num2">
    <button type = "submit">Enviar</button>
    </form>

    <?php 
        $num = $_POST['num'];
        $num2 = $_POST['num2'];
        $maior = 0;
        $menor = 0;
        if($num <> ""){
            if($num > $num2){
               $maior = $num;
               $menor = $num2;
            }
            else if($num2 > $num){
                $maior = $num2;
                $menor = $num;
            }
            
            echo "<p> O maior é o {$maior} e o menor é o {$menor} </p>";
        }
       
    ?>
</body>
</html>