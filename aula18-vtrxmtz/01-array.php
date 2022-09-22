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
        <table border="1"><tr>
            <?php 
                $n = array(3, 5, 8, 2);
                $n[] = 7;
                print_r($n);

                $c = range(5, 20, 5);
                print_r($c)
                
            ?>
        </table>
    </pre>
</div>
</body>
</html>