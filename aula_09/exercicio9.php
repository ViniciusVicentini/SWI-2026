<?php
    $numeros = [1,2,3,4,5,6,7,8,9,10];
    $nova_lista = [];

    foreach($numeros as $numero) {
        if($numero % 2 == 0) {
            array_push($nova_lista, "$numero");
        }
    }

    foreach($nova_lista as $par) {
        echo $par . "<br>";
    }
?>