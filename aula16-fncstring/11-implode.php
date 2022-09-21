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
        $vetor[0] = "Curso";
        $vetor[1] = "em";
        $vetor[2] = "Video";
        $texto = implode("#", $vetor); 
        // ou usar join() da no mesmo.
        print($texto);
    ?>
</div>
</body>
</html>