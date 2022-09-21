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
        $v[0] = 4;
        $v[1] = 3;
        $v[2] = 8;
        print_r($v);
        
        echo "<br>";
        
        $v2 = array(3,7,6,2,1,9);
        print_r($v2);

        echo "<br>";
        
        $v3 = array(3,7,6.5,2.9,1,9);
        var_dump($v3);
    ?>
</div>
</body>
</html>