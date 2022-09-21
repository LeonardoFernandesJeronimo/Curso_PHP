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
        function teste ($x) {
            $x += 2;
            echo "<p>O valor de X e $x</p>";
        }

        $a = 3;
        teste($a);
        echo "<p>O valor de A e $a</p>";


        
        // Por referencia
        function teste2 (&$x) {
            $x += 2;
            echo "<p>O valor de X e $x</p>";
        }

        $b = 3;
        teste2($b);
        echo "<p>O valor de A e $b</p>"
    ?>
</div>
</body>
</html>