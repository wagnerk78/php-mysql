<?php
include_once("conexao.php");

$nmCategoria = $_POST["txtCategoria"];


$sql = "INSERT INTO tbCategoria (nmCategoria)";
$sql .= " VALUES ('$nmCategoria')";

//echo $sql;

if ($conn->query($sql) === TRUE) {
?>
<script>
    alert("Categoria cadastrado com sucesso.");
    window.location = "selecionarCategoria.php";
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