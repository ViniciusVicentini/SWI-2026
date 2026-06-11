<?php
function msg($periodo)
{
    //     if ($periodo == "manhã") {
//         echo "BOM DIA";
//     } else {
//         if ($periodo == "tarde") {
//             echo "BOA TARDE";
//         } else {
//             if ($periodo == "noite") {
//                 echo "BOA NOITE";
//             } else {
//                 echo "VALOR INVÁLIDO";
//             }
//         }
//     }

    switch ($periodo) {
        case 'manhã':
            echo "BOM DIA";
            break;
        case 'tarde':
            echo "BOA TARDE";
            break;
        case 'noite':
            echo "BOA NOITE";
            break;

        default:
            echo "VALOR INVÁLIDO";
            break;
    }
}

msg("meianoite") 


?>







<!-- function calcularDesconto($valordaCompra) {
        $desconto = $valordaCompra * 0.10;

        $valorFinal = $valordaCompra - $desconto;

        return $valorFinal;
    }

    $totalCarrinho =  250.00; -->