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
            $nota1 = $_GET["nota1"];
            $nota2 = $_GET["nota2"];
            $m = ($nota1 + $nota2) / 2;
            echo "A média entre $nota1 e $nota2 é igual a $m";
            if ($m < 4) {
                echo " e está reprovoado.";
            } else if ($m >= 5 && $m <= 7) {
                echo " e está de recuperação.";
            } else {
                echo " e está aprovado.";
            }
        ?>
        <br/><a href="exercicio03.html">Voltar</a>
    </div>
</body>
</html>