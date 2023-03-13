<?php
define('HOST', 'localhost');
define('USER', 'root');
define('PASSWORD', '');
define('DB', 'bd_curso');


$conn = new mysqli(HOST, USER, PASSWORD, DB);

if($conn->connect_error) {
    die("Falha na conexão...");
}

//echo "Conectado com sucesso!"

?>