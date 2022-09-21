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
        $n = isset($_GET["num"])?$_GET["num"]:1;
        for ($c=1; $c <=10 ; $c++) { 
            $r = $n * $c;
            echo "$n x $c = $r<br>";
        }
    ?>
    <a href="02-index.php">Voltar</a>
</div>
</body>
</html>