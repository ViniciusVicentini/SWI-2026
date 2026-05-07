
    <?php
   $produtos = [
    ["nome" => "celular", "preco" => "R$ 1500", "categoria" => "eletrônicos"],
    ["nome" => "notebook", "preco" => "R$ 5000", "categoria" => "eletrônicos"],
    ["nome" => "geladeira", "preco" => "R$ 4000", "categoria" => "eletrônicos"],
    
    ["nome" => "macarrão", "preco" => "R$ 20", "categoria" => "comidas"],
    ["nome" => "arroz", "preco" => "R$ 15", "categoria" => "comidas"],
    ["nome" => "feijão", "preco" => "R$ 18", "categoria" => "comidas"],
    
    ["nome" => "palmito", "preco" => "R$ 25", "categoria" => "enlatados"],
    ["nome" => "azeitona", "preco" => "R$ 19", "categoria" => "enlatados"],
    ["nome" => "aardinha", "preco" => "R$ 10", "categoria" => "enlatados"]
];
    $cores = [
        "eletrônicos" => "#0c8aff",
        "comidas" => "#d30000",
        "enlatados" => "#ff792c"
    ];

    echo "<table border = '1px'>";
    
    echo "</table>";

    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 3</title>
    <style>

        th, td {
            border: 1px solid #020202;
        }
        th {
            background-color: #020202;
            color: white;
        }
    </style>
</head>
<body>
    <h1>Tabela com Produtos</h1>
    <table>
        <tr>
            <th>Nome do Produto</th>
            <th>Preço</th>
            <th>Categoria</th>
        </tr>
    <?php
    foreach ($produtos as $produto) {
        $categoria_atual = $produto['categoria'];

        $cor_da_linha = $cores[$categoria_atual];

        echo "<tr style='background-color: {$cor_da_linha};'>";

        echo "<td>" . $produto['nome'] . "</td>";
        echo "<td>" . $produto['preco'] . "</td>";
        echo "<td>" . $categoria_atual . "</td>";

        echo "</tr>";
    }
    ?>
    </table>
</body>
</html>