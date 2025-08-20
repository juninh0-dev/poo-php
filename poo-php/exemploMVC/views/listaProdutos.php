<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista produtos</title>
</head>
<body>
    <h1>Produtos</h1>
    <table border="1">
        <a href="">Novo Produto</a>
        <tr>
            <th>Produto</th>
            <th>Preço</th>
            <th>Estoque</th>
            <th>Ações</th>
        </tr>
    </table>
    <?php 
        foreach($resultado as $dados){
            echo "<tr>
                <td>{$dados->nome}</td>
                <td>{$dados->$preco}</td>
                <td>{$dados->$estoque}</td>
            </tr>";
        }
    ?>
</body>
</html>