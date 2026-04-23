
    <?php
   $produtos = [
    ["nome" => "Celular", "preco" => "R$ 1500", "categoria" => "Eletrônicos"],
    ["nome" => "Notebook", "preco" => "R$ 5000", "categoria" => "Eletrônicos"],
    ["nome" => "Geladeira", "preco" => "R$ 4000", "categoria" => "Eletrônicos"],
    
    ["nome" => "Macarrão", "preco" => "R$ 20", "categoria" => "Comidas"],
    ["nome" => "Arroz", "preco" => "R$ 15", "categoria" => "Comidas"],
    ["nome" => "Feijão", "preco" => "R$ 18", "categoria" => "Comidas"],
    
    ["nome" => "Palmito", "preco" => "R$ 25", "categoria" => "Enlatados"],
    ["nome" => "Azeitona", "preco" => "R$ 19", "categoria" => "Enlatados"],
    ["nome" => "Sardinha", "preco" => "R$ 10", "categoria" => "Enlatados"]
];
    $cores = [
        "Eletrônicos" => "#a2d2ff",
        "Comidas" => "#FFDE21",
        "Enlatados" => "#FF2C2C"
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
        table {
            width: 50%;
            border-collapse: collapse;
            text-align: left;
            margin: 20px auto;

        }
        th, td {
            border: 1px solid #333;
            padding: 10px;
        }
        th {
            background-color: #333;
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