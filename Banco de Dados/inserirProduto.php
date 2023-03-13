<?php
include_once("conexao.php");

$nmProduto = $_POST["txtProduto"];
$categoria = $_POST["ddlCategoria"];
$descProduto = $_POST["txtDescricao"];

$sql = "INSERT INTO tbProdutos (nmProduto, idCategoria, descProduto)";
$sql .= " VALUES ('$nmProduto', $categoria, '$descProduto')";

//echo $sql;

if ($conn->query($sql) === TRUE) {
?>
<script>
    alert("Produto cadastrado com sucesso.");
    window.location = "selecionarProdutos.php";
</script>


<?php
} else {
?>
<script>
    alert("Erro ao cadastrar produto.");
    window.history.back();
</script>


<?php
}



?>