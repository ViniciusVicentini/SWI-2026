<?php
    $valores = [80,20,4,1,400,44];

    foreach ($valores as $valor) {
        echo $valor . "<br>";
    }


    sort($valores);
    foreach ($valores as $valor) {
        echo $valor . "<br>";
    }
?>