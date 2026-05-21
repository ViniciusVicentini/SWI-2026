<?php
    $nomes = ["Ronaldo", "Cleber", "Cleiton", "Morato", "Henzo"];
    $nomes[] = "Enzo";
    $nomes[1] = "Gustavo";

    foreach ($nomes as $nome) {
        echo $nome . "<br>";
    }
?>