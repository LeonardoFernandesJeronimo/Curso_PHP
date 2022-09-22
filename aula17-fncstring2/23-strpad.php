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
        //Encontra a posição da string
        $nome = "Leonardo";
        $novo = str_pad($nome, 50, " ",STR_PAD_LEFT);
        print("Meu aluno $novo é muito dedicado!");
    ?>
</div>
</body>
</html>