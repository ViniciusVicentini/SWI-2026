<?php
    $notas = [8.5, 6.0, 4.5, 9.0, 7.2, 5.5, 3.8, 10.0, 6.8, 4.9];
    $contador = 1;
    $aprovados = 0;
    $reprovados = 0;
    $recuperação = 0;
    $qtnd = count($notas);
    $soma = array_sum($notas);
    $media = $soma / $qtnd;
    

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

    foreach ($notas as $nota) {
        $situacao = classificarAluno($nota);
        switch ($situacao) {
            case "Aprovado":
            $aprovados = $aprovados + 1;
            break;
            

            case "Reprovado":
            $reprovados = $reprovados + 1;
            break;

            case "Recuperação":
            $recuperação = $recuperação + 1;
            break;
        }
    }

    // -------------------------------------------------------------------

    foreach ($notas as $nota) {
        echo "Aluno: " . $contador ++  . " Nota =  $nota  ====> " . classificarAluno($nota)." <br>" ;
    }


    echo "<br><br>";

    echo "Resumo da Sala: <br><br>";
    echo "Aprovados: $aprovados <br><br>";
    echo "Reprovados: $reprovados <br><br>";
    echo "Recuperação: $recuperação <br><br>";

    if ($media >= 7) {
        echo "Turma com um bom desempenho!";
    } else {
        echo "A turma precisa melhorar.";
    }

?>