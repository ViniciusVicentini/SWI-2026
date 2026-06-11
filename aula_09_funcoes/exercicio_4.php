<?php
function verificarAcesso($senhaDigitada)
{
    if ($senhaDigitada == "123456") {
        return "Acesso Liberado <br>";
    } else {
        return "Acesso Negado <br>";
    }
}

echo verificarAcesso("123456");
echo verificarAcesso("Senha teste");
?>