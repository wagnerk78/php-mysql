<?php
include_once("conexao.php");

$idProduto = $_POST["idProduto"];
$produto = $_POST["txtProduto"];
$descricao = $_POST["txtDescricao"];
$categoria = $_POST["ddlCategoria"];

$sql = "UPDATE tbProdutos SET nmProduto = '$produto', descProduto = '$descricao', 
idCategoria = $categoria WHERE idProduto = $idProduto ";

// echo $sql;

if ($conn->query($sql) === TRUE) {
?>
    <script>
        alert("Produto alterado com sucesso!");
        window.location = "selecionarProdutos.php";
    </script>


<?php
} else {
?>
    <script>
        alert("Erro ao alterar produto.");
        window.history.back();
    </script>


<?php
}



?>