<?php
    function calcularAutonomia($capacidadeBateria, $consumoPorMinuto) {
        $tempo = $capacidadeBateria / $consumoPorMinuto;
       return "Tempo estimado de voo: $tempo minutos"; 
    }

    echo calcularAutonomia(90, 45);
?>