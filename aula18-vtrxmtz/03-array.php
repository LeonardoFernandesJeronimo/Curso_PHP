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
                $v = array (
                    3 => 5,
                    1 => 9,
                    0 => 8,
                    8 => 7);
                //Para adicionar
                    $v[] = 10;
                //Para excluir
                unset($v[0]);
                print_r($v);
            ?>
        </table>
    </pre>
</div>
</body>
</html>