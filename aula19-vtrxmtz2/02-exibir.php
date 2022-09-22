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
            echo "O vetor tem " . count($v) . " elementos.<br>";
            print_r($v);

            echo "<br>";

            //Outra maneira
            $v = array("A","J","M","X","K");
            $tot = count($v);
            echo "O vetor tem $tot elementos.<br>";
            print_r($v);
        ?>
    </pre>
</div>
</body>
</html>