<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo 05 - Tabela</title>
    <style>
        table,
        tr,
        th,
        td {
            border: 1px solid orange;
        }
    </style>
</head>

<body>
    <h1>Tabela</h1>

    <table>
        <tr>
            <th>RM:</th>
            <th>Nome:</th>
            <th>Email:</th>
        </tr>
        <?php
        for ($i = 1; $i <= 2; $i++) {
            echo "<tr>";
            for ($j = 1; $j <= 3; $j++) {
                echo "<td> linha $i coluna $j </td>";
            }
            echo "</tr>";
        }
        ?>
    </table>