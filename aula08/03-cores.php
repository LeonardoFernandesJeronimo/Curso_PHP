<!DOCTYPE html>
<html lang="pt-br">
<head>
    
    <?php
        $txt = $_GET["t"];
        $tam = $_GET["tam"];
        $cor = $_GET["cor"];
    ?>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso de PHP</title>
    <style>
        span.texto {
            font-size: <?php echo $tam; ?>;
            color: <?php echo $cor; ?>;
        }
    </style>
</head>
<body>
    <div>
        <?php
          echo "<span class='texto'>$txt</span>";
        ?>
    </div>
</body>
</html>