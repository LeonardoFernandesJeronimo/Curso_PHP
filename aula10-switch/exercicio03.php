<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso de PHP</title>
</head>
<body>
    <div>
        <?php
            $d = $_GET["ds"];
            switch ($d) {
                case 2:
                case 3:
                case 4:
                case 5:
                case 6:
                    echo "Levanta e vai estudar!!!";
                    break;
                case 7:
                case 8:
                    echo "Descanse!!";
                    break;
                default:
                    echo "Dia da semana inválido";    
            }
        ?>
        <a href="exercicio02.html">Voltar</a>
    </div>
</body>
</html>