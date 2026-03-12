<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Processa Dados</title>
</head>
<body>
    <?php
        $nome = $_GET['nome'];
        $email = $_GET['email'];
        $idade = $_GET['idade'];

        $ano_atual = date("Y");
        echo $ano_atual;
        $datanasc = $ano_atual - $idade;
    ?>

    <p>o nome digitado é: <?php echo $nome; ?></p>
    <p>o email digitado é: <?php echo $email; ?></p>
    <p>a idade digitada é: <?php echo $idade; ?></p>

    <p>A sua idade é: <?php echo $datanasc ?></p>
</body>
</html>