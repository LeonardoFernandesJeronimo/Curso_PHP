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
                $c = range(0,20,2);
                foreach ($c as $v) {
                print("<td>$v ");
                }
            ?>
        </table>
    </pre>
</div>
</body>
</html>