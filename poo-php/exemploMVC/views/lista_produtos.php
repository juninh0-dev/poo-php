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
        <a href="index.php?controle=produtoController&metodo=inserir">Novo Produto</a>
        <tr>
            <th>Produto</th>
            <th>Preço</th>
            <th>Estoque</th>
            <th>Ações</th>
        </tr>
        <?php 
        foreach($resultado as $dados){
            $preco = number_format($dados->preco_produto,2,",",".");
            $estoque = number_format($dados->estoque_produto,0,"",".");
            echo "
            <tr>
                <td>{$dados->nome_produto}</td>
                <td>$preco</td>
                <td>$estoque</td>
                <td><a href='index.php?controle=produtoController&metodo=alterar'>Alterar</a>
                &nbsp;&nbsp;
                <a href='index.php?controle=produtoController&metodo=deletar'>Excluir</a>
                &nbsp;&nbsp;</td>
            </tr>";
        }
    ?>
    </table>
    
</body>
</html>