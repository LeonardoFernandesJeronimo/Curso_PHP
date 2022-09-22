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
    <pre>
        <?php 
            $m = array(
                array(2,3),
                array(3,4),
                array(9,5));
            $m [0] [1] = $m [2] [0];
            print_r($m);
            

        ?>
    </pre>
</div>
</body>
</html>