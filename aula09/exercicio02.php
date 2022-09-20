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
            $a = isset($_GET["ano"])?$_GET["ano"]:1900;
            $i = date("Y") - $a;
            echo "Voce nasceu em $a e terá $i anos";
            if ($i < 16 ) {
                $tipoVoto = "não obrigatório.";
            } else if (($i >= 16 && $i < 18) || ($i> 65)) {
                $tipoVoto = "opcional.";
            } else {
                $tipoVoto = "obrigatório.";
            }
            echo " e seu voto é $tipoVoto";
        ?>
    </div>
</body>
</html>