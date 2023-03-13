<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Produto</title>
</head>

<body>
    <?php
    include_once("conexao.php");
    ?>
    <h2>Editar Produto</h2>

    <?php
    $idProduto = $_GET["idProduto"];
    $sql = "SELECT * FROM tbProdutos WHERE idProduto = $idProduto";
    $executa = $conn->query($sql);
    $produto = $executa->fetch_assoc();


    ?>



    <form action="updateProduto.php" method="post">
        <label for="idProduto"> Id do produto: </label>
        <br>
        <input type="text" name="idProduto" id="idProduto" value="<?php echo $produto["idProduto"] ?>" readonly>
        <br> <br>
        <label for="txtProduto"> Nome do produto</label>
        <br>
        <input type="text" name="txtProduto" id="txtProduto" value="<?php echo $produto["nmProduto"] ?>">
        <br>
        <br>
        <label for="ddlCategoria"> Categoria do produto</label>
        <br>
        <select name="ddlCategoria" id="ddlCategoria">
            <option value="0">--Selecione uma categoria--</option>
            <?php
            $sql = "select * from tbcategoria order by nmcategoria asc";
            $registros = $conn->query($sql);
            while ($exibir = $registros->fetch_assoc()) {
            ?>
                <option value="<?php echo $exibir["idCategoria"] ?>" <?php echo ($exibir["idCategoria"] == $produto["idCategoria"])?"selected":"" ?>>
                    <?php echo $exibir["nmCategoria"] ?>
                </option>
            <?php
            }
            ?>
        </select>
        <br>
        <br>
        <label for="txtDescricao">Descrição do produto</label>
        <br>
        <textArea name="txtDescricao" id="txtDescricao" cols="30" rows="10"><?php echo $produto["descProduto"]; ?>
    </textArea>
        <br>
        <input type="submit" value="Salvar">
        <input type="reset" value="Cancelar">
    </form>

</body>

</html>