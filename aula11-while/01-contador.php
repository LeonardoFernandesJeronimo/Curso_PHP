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
            $c = 1;
            while ($c <= 10) {
                echo $c . "<br/>";
                $c++;
            }

            $c = 10;
            while ($c >= 1) {
                echo $c. "<br/>";
                $c--;
            }

            $c = 10;
            while ($c >= 0) {
                echo $c. "<br/>";
                $c -= 2;
            }
        ?>
    </div>
</body>
</html>