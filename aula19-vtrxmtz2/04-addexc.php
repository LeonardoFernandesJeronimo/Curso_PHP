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
            $v = array("A","J","M","X","K");
            print_r($v);
            
            // Add elementos na primeira posição.
            array_unshift($v, "L");
            
            print_r($v);

            echo "<br>";

            $v = array("A","J","M","X","K");
            print_r($v);
            
            // Exclui o primeiro elemento.
            array_shift($v);
            
            print_r($v);
        ?>
    </pre>
</div>
</body>
</html>