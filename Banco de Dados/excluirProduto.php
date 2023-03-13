<?php
include_once("conexao.php");

$idProduto = $_GET["idProduto"];

$sql = "DELETE FROM tbProdutos WHERE idProduto = $idProduto";

if ($conn->query($sql) === TRUE) {
?>
    <script>
        alert("Registro excluído com sucesso.");
        window.location = "selecionarProdutos.php";
    </script>
<?php
} else {
?>
    <script>
        alert("Erro ao excluir produtos!");
        window.location = "selecionarProdutos.php";
    </script>
<?php
}
?>