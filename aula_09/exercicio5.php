<?php
    $cores = ["vermelho","amarelo","laranja"];
    $cores[] = "azul";

    foreach($cores as $cor) {
        echo "cores originais: " . $cor . "<br>";
    }
    

    $tirar_cor = array_shift($cores);
    
    foreach($cores as $cor) {
        echo "cores depois do array_shift: " . $cor . "<br>";
    }
?>