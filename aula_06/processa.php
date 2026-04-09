
<?php
    $email = $_POST["email"];
    $senha = $_POST["senha"];
    
    if ($email == "adm@gmail.com" && $senha == "1234") {
        header("Location: autorizado.php");
        exit;
    } else {
        header("Location: erro.php");
        exit;
    }
?>


