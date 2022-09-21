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
        do {
            echo "$c ";
            $c++;
        } while ($c <= 10); 

        $c = 10;
        do {
            echo "$c ";
            $c--;
        } while ($c >= 1);
    ?>
</div>
</body>
</html>