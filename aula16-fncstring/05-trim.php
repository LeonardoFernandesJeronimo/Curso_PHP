<!DOCTYPE html>
<html lang="pt-Br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso de PHP</title>
</head>
<body>
<div>
    <?php 
        $nome = "   Jose da Silva   ";
        echo (strlen($nome));
        
        $novo = trim($nome);
        echo("<br>$novo ");

        echo(strlen($novo));
    ?>
</div>
</body>
</html>