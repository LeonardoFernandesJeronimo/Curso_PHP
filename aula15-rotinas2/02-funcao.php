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
        include "02-funcoes.php";
        echo "<h1>Testando novas funções</h1>";
        ola();
        mostraValor(10);
        echo "<h2>Finalizando Programa...</h2>";
        
        /*
        require "02-funcoes.php";
        echo "<h1>Testando novas funções</h1>";
        ola();
        mostraValor(10);
        echo "<h2>Finalizando Programa...</h2>";
        */

        /*
        include_once "02-funcoes.php";
        echo "<h1>Testando novas funções</h1>";
        ola();
        mostraValor(10);
        echo "<h2>Finalizando Programa...</h2>";
        */
    ?>
</div>
</body>
</html>