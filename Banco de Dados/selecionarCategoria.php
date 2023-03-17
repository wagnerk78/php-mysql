<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Categorias</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<script>
        function confirmarExclusao(id, prod) {
            if (window.confirm("Deseja realmente exluir a categoria? \n " + id + " - " + prod + "?")) {
                window.location = "excluirCategoria.php?idCategoria=" + id;
            }
        }
    </script>
<body>
    <h2>Lista de categorias cadastrados</h2>
    <br>
    <br>
    <?php
    include_once("conexao.php");
    $sql = "SELECT * FROM tbcategoria order by idCategoria";
    $dadosProdutos = $conn->query($sql);
    if ($dadosProdutos->num_rows > 0) {
    ?>
        <table class="table">
            <tr class="table-dark">
                <th>Id</th>
                <th>Nome da Categoria</th>
                <th>Editar</th>
                <th>Excluir</th>
            </tr>
            <?php
            while ($exibirProduto = $dadosProdutos->fetch_assoc()) {
            ?>
                <tr>
                    <td> <?php echo $exibirProduto["idCategoria"] ?> </td>
                    <td> <?php echo $exibirProduto["nmCategoria"] ?> </td>
                    <td><a href="editarCategoria.php?idCategoria=<?php echo $exibirProduto["idCategoria"] ?> ">Editar</a></td>
                    <td><a href="#" onclick="confirmarExclusao(<?php echo $exibirProduto['idCategoria'] ?>, '<?php echo $exibirProduto['nmCategoria'] ?>')">Excluir</a></td>
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