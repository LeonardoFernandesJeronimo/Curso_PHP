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
            $v = array("A","J","B","E","K");
            print_r($v);
            
            // Coloca os elementos em ordem.
            sort($v);
            
            print_r($v);

            echo "<br><br><br>";

            $v = array("A","J","B","E","K");
            print_r($v);
            
            // Coloca os elementos em ordem reversa.
            rsort($v);
            
            print_r($v);

            echo "<br><br><br>";

            $v = array("A","J","B","E","K");
            print_r($v);
            
            // Ordena tanto os elementos quantos os indices em ordem.
            asort($v);
            
            print_r($v);

            echo "<br><br><br>";

            $v = array("A","J","B","E","K");
            print_r($v);
            
            // Ordena tanto os elementos quantos os indices em ordem reversa.
            arsort($v);
            
            print_r($v);

            echo "<br><br><br>";

            $v = array(2=>"A",1=>"J",0=>"B",3=>"E",4=>"K");
            print_r($v);
            
            // Ordena  os indices em ordem.
            ksort($v);

            print_r($v);

            echo "<br><br><br>";

            $v = array(2=>"A",1=>"J",0=>"B",3=>"E",4=>"K");
            print_r($v);

            // Ordena  os indices em ordem reversa.
            krsort($v);
            
            print_r($v);
        ?>
    </pre>
</div>
</body>
</html>