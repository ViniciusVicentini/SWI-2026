<?php
    $a = 5;
    $b = 10;
    $r = (($a <= $b) XOR (2*$a == $b));
    if ($r) {
        echo "Verdadeiro";
    } else {
        echo "Falso";
    }

    //Resultado: Falso
?>