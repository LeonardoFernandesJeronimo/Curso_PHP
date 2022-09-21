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
        function soma ($a, $b) {
            return $a + $b;
        }

        $x = -4;
        $y = 8;
        $r = soma ($x, $y);
        echo "A soma entre $x e $y é $r";
    ?>
</div>
</body>
</html>