<?php
    $notas = [8.5, 6.0, 4.5, 9.0, 7.2, 5.5, 3.8, 10.0, 6.8, 4.9];
    $contador = 1;
    $aprovados = 0;
    $reprovados = 0;
    $recuperação = 0;
    

    function classificarAluno($nota) {
        if ($nota >= 7) {
            return "Aprovado";
        } if ($nota >= 5 && $nota < 7 ) {
            return  "Recuperação";
        } if ($nota < 5) {
            return "Reprovado";
        } else {
            return "Nota Invalida";
        }
    }

    foreach ($notas as $key) {
        switch ($key) {
            case "Aprovado";
            $aprovados = $aprovados + 1;

            case "Reprovado";
            $reprovados = $reprovados + 1;

            case "Recuperação";
            $recuperação = $recuperação + 1;
        }
    }

    // -------------------------------------------------------------------

    foreach ($notas as $key) {
        echo "Aluno: " . $contador ++  . " Nota =  $key  ====> " . classificarAluno($key)." <br>" ;
    }
?>