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
        //Encontra a posição da string
        $frase = "Estou aprendendo PHP no Curso em Video de PHP";
        $cont = substr_count($frase, "PHP");
        print ("PHP encontrado $cont vezes");
    ?>
</div>
</body>
</html>