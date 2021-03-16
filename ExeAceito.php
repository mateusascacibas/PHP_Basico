<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio Aceito</title>
</head>
<body>
    <form action="#" method="post">
    <label for="">Digite seu nome: </label>
    <input type="text" name = "nome" id = "nome">
    <label for="">Digite sua idade: </label>
    <input type="text" name = "idade" id = "idade">
    <label for="">Selecione seu sexo: </label>
    <select name="sexo" id = "sexo">
        <option value=1>Masculino</option>
        <option value=2>Feminino</option>
    </select>
    <button type = "submit">Enviar</button>
    </form>
    <?php
    /**Entrar com nome, sexo e idade de uma
    pessoa. Se a pessoa for do sexo feminino e
    tiver menos que 25 anos, imprimir nome e a
    a mensagem: ACEITA. Caso contrário,
    imprimir nome e a mensagem: NÃO ACEITA. */
        $nome = $_POST["nome"];
        $idade = $_POST["idade"];
        $sexo = $_POST["sexo"];

        if($sexo == 2 && $idade < 25){
            echo '<script type="text/javascript">alert("' .$nome. ' Aceita") </script>';
        }
        else{
            echo '<script type="text/javascript">alert("' .$nome. ' Não Aceito(a)") </script>';
        }
    ?>
</body>
</html>