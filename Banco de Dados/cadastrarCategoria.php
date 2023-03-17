<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Categoria</title>
</head>
<body>
<?php
    include_once("conexao.php");
?>
<h2>Cadastro de Categorias</h2>
<form action="inserirCategoria.php" method="post">
    <label for="txtCategoria"> Nome da Categoria</label>
    <br>
    <input type="text" name="txtCategoria" id="txtCategoria" required autofocus placeholder="Nome da Categoria">
    <br> 
    <br>
    <input type="submit" value="Salvar">
    <input type="reset" value="Cancelar">
</form>

</body>
</html>