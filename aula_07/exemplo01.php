<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo 01 - Lista de Itens</title>
</head>
<body>
    <h1>Lista de Itens</h1>
        <ul>
            <!-- Aqui começa o laço de repetição -->
            <?php
                for ($i = 1; $i <=3; $i++) {
                    echo "<li> Item $i </li>";
                }
            ?>

        </ul>
</body>
</html>