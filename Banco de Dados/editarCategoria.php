<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Categoria</title>
</head>

<body>
    <?php
    include_once("conexao.php");
    ?>
    <h2>Editar Categoria</h2>

    <?php
    $idCategoria = $_GET["idCategoria"];
    $sql = "SELECT * FROM tbcategoria WHERE idCategoria = $idCategoria";
    $executa = $conn->query($sql);
    $produto = $executa->fetch_assoc();
    ?>
    <form action="updateCategoria.php" method="post">
        <label for="idCategoria"> Id da Categoria: </label>
        <br>
        <input type="text" name="idCategoria" id="idCategoria" value="<?php echo $produto["idCategoria"] ?>" readonly>
        <br> <br>
        <label for="txtCategoria"> Nome da Categoria</label>
        <br>
        <input type="text" name="txtCategoria" id="txtCategoria" value="<?php echo $produto["nmCategoria"] ?>">
        <br>
        <br>
        <input type="submit" value="Salvar">
        <input type="reset" value="Cancelar">
    </form>

</body>

</html>