<?php
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    // email: adm@gmail.com
    // senha: 1234

    if ($email == 'adm@gmail.com' && $senha == '1234') {
        //echo "vamos para a área restrita";
        $nome = "Vinicius";
        header('Location: restrito.php?nome=' .$nome);
    } else {
        //echo "volta para o formulário";
        header('Location: formulario.php');
    }
    
?>