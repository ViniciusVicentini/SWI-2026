<?php
    $temperaturas = [22.5, 24.0, 25.5, 23.0];

    function calcularMediaTemperatura($listaDeTemperaturas) {
            $qntd = count($listaDeTemperaturas);
            $soma = array_sum($listaDeTemperaturas);
            $media = $soma / $qntd;
            return $media;

    }

    
    echo "a média final das temperaturas é: ". calcularMediaTemperatura($temperaturas);


?>