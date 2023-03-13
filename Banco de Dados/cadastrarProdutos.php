<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Produtos</title>
</head>
<body>
<?php
    include_once("conexao.php");
?>
<h2>Cadastro de Produtos</h2>
<form action="inserirProduto.php" method="post">
    <label for="txtProduto"> Nome do produto</label>
    <br>
    <input type="text" name="txtProduto" id="txtProduto" required autofocus placeholder="Nome do produto">
    <br> 
    <br>
    <label for="ddlCategoria"> Categoria do produto</label>
    <br>
    <select name="ddlCategoria" id="ddlCategoria">
    <option value="0">--Selecione uma categoria--</option>
    <?php
    $sql = "select * from tbcategoria order by nmcategoria asc";
    $registros = $conn->query($sql);
    while ($exibir = $registros->fetch_assoc()){
    ?>
    <option value="<?php echo $exibir["idCategoria"] ?>"> <?php echo $exibir["nmCategoria"] ?></option>
    <?php
    }
    ?>
    </select>
    <br> 
    <br>
    <label for="txtDescProduto">Descrição do produto</label>
    <br>
    <textArea name="txtDescricao" id="txtDescricao" cols="30" rows="10"></textArea>
    <br>
    <input type="submit" value="Salvar">
    <input type="reset" value="Cancelar">
</form>

</body>
</html>