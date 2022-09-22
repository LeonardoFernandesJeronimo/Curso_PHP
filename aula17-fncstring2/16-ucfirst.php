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
        //Deixa tudo em letra minuscula
        $nome = "leonaRdo ferNanDes";
        $nome2 = ucfirst(strtolower($nome));
        echo "Seu nome é $nome2";
    ?>
</div>
</body>
</html>