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
        //Seleciona o um numero de strings para aparecer, no exemplo abaixo começa na posição 0 e vai até a posição 5
       $site = "Curso em Video";
       $sub = substr($site, 0 , 5);
       echo "$sub ";
    ?>
</div>
</body>
</html>