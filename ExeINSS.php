<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio INSS</title>
</head>
<body>
    <form action="#" method="post">
        <label for="">Quanto você ganha por hora: </label>
        <input type="text" name="por_hora" id = "por_hora">
        <label for="">Horas trabalhadas no mês: </label>
        <input type="text" name="trabalhadas" id="trabalhadas">
        <button type="submit">Enviar</button>
    </form>
    <?php
        $por_hora = $_POST["por_hora"];
        $trabalhadas = $_POST["trabalhadas"];
        $bruto = $por_hora * $trabalhadas;
        $inss =  ($bruto / 100) * 8;
        $imposto =  ($bruto / 100) * 11;
        $sindicato =  ($bruto / 100) * 5;
        $liquido = $bruto - ($inss + $imposto + $sindicato);
        echo '<script type="text/javascript">alert("+ Salario Bruto: R$ ' . $bruto . '\n - IR (11%): R$ ' . $imposto. '\n - INSS (8%): R$ ' . $inss. '\n - Sindicato (5%): R$ ' . $sindicato. '\n = Salario Liquido: R$ ' . $liquido.'")</script>';
    ?>
</body>
</html>