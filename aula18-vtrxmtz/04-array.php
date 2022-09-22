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
                //Usando array
                $cad = array("nome" => "Leonardo", "idade" => 30, "peso" => 87.45);
                $cad["fuma"] = true;
                print_r($cad);

                //Usando foreach
                $cad = array("nome" => "Leonardo", "idade" => 30, "peso" => 87.45);
                
                foreach ($cad as $key => $value) {
                    echo "O campo $key possui o conteudo $value <br>";    
                }
                
            ?>
        </table>
    </pre>
</div>
</body>
</html>