<?php
include_once("conexao.php");

$idCategoria = $_GET["idCategoria"];

$sql = "DELETE FROM tbCategoria WHERE idCategoria = $idCategoria";

if ($conn->query($sql) === TRUE) {
?>
    <script>
        alert("Categoria excluída com sucesso.");
        window.location = "selecionarCategoria.php";
    </script>
<?php
} else {
?>
    <script>
        alert("Erro ao excluir produtos!");
        window.location = "selecionarCategoria.php";
    </script>
<?php
}
?>