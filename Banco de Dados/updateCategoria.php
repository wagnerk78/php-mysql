<?php
include_once("conexao.php");

$idCategoria = $_POST["idCategoria"];
$categoria = $_POST["txtCategoria"];


$sql = "UPDATE tbcategoria SET nmCategoria = '$categoria' WHERE idCategoria = $idCategoria ";

echo $sql;

if ($conn->query($sql) === TRUE) {
?>
    <script>
        alert("Categoria alterada com sucesso!");
        window.location = "selecionarCategoria.php";
    </script>


<?php
} else {
?>
    <script>
        alert("Erro ao alterar categoria.");
        window.history.back();
    </script>


<?php
}



?>