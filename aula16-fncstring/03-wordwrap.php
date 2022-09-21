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
       $txt = "Aqui temos um texto gigante criado pelo PHP e vai mostrar o funcionamentodo Wordwrap.";
       $res = wordwrap($txt,5,"<br>\n", true); 
       echo ($res);

       $txt = "<br><br>Aqui temos um texto gigante criado pelo PHP e vai mostrar o funcionamentodo Wordwrap.";
       $res = wordwrap($txt,5,"<br>\n", false); 
       echo ($res);
    ?>
</div>
</body>
</html>