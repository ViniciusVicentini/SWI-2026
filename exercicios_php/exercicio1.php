<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 1</title>
    <style>
        table,th,tr,td {
            border: 1px solid orangered;
            color: white;
        }

        td {
            
        }

    </style>
</head>
<body>
    <h1>1) Tabela Estilizada com Cores Alternativas</h1>
<?php
    echo "<table>";
    
    $total_linhas = 8;
    $total_colunas = 4;

    for ($i = 1; $i <= $total_linhas; $i++) {
        if ($i % 2 == 0) {
            $CorDeFundo = "#FF0000";
        } else {
            $CorDeFundo = "#0000FF";
        }

    echo "<tr style='background-color: $CorDeFundo;'>";

    for ($j = 1; $j <= $total_colunas; $j++) {
        echo "<td> linha $i coluna $j </td>";
    }

        echo "</tr>";

}
    echo "</table>";
?>
</body>
</html>