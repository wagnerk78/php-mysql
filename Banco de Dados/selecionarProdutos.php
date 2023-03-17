<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de produtos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        function confirmarExclusao(id, prod) {
            if (window.confirm("Deseja realmente exluir o produto? \n " + id + " - " + prod + "?")) {
                window.location = "excluirProduto.php?idProduto=" + id;
            }
        }
    </script>
</head>

<body>
    <h2>Lista de Produtos cadastrados</h2>
    <a href="cadastrarProdutos.php">Adicionar Produto</a>
    <br>
    <br>
    <?php
    include_once("conexao.php");
    $sql = "select * from tbprodutos order by idProduto";
    $dadosProdutos = $conn->query($sql);
    if ($dadosProdutos->num_rows > 0) {
    ?>
        <table class="table">
            <tr class="table-dark">
                <th>Id</th>
                <th>Nome do Produto</th>
                <th>Categoria do Produto</th>
                <th>Descrição do Produto</th>
                <th>Editar</th>
                <th>Excluir</th>
            </tr>
            <?php
            while ($exibirProduto = $dadosProdutos->fetch_assoc()) {
            ?>
                <tr>
                    <td> <?php echo $exibirProduto["idProduto"] ?> </td>
                    <td> <?php echo $exibirProduto["nmProduto"] ?> </td>
                    <?php
                    $sqlCategoria = "select * from tbcategoria where idCategoria = " . $exibirProduto["idCategoria"];
                    $dadosCategoria = $conn->query($sqlCategoria);
                    $exibirCategoria = $dadosCategoria->fetch_assoc();
                    ?>
                    <td> <?php echo $exibirCategoria["nmCategoria"] ?> </td>
                    <td> <?php echo $exibirProduto["descProduto"] ?> </td>
                    <td><a href="editarProdutos.php?idProduto=<?php echo $exibirProduto["idProduto"] ?> ">Editar</a></td>
                    <td><a href="#" onclick="confirmarExclusao(<?php echo $exibirProduto['idProduto'] ?>, '<?php echo $exibirProduto['nmProduto'] ?>')">Excluir</a></td>
                </tr>
            <?php
            }
            ?>
        </table>
    <?php
    } else {
        echo "Deu ruim!";
    };
    ?>
</body>

</html>