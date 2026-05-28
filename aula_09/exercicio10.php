<?php
    $notas_aluno = [6,7.5,9,8];
    $qtnd = count($notas_aluno);
    $total = array_sum($notas_aluno);

    $media = $total / $qtnd;
    echo "a média do aluno é: " . $media
?>