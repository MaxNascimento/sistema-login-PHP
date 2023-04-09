<?php 
require("conexao-banco.php");

mysqli_query($conexao, "UPDATE usuarios SET nome = 'Manoel Pereira' WHERE id = 2");
echo "Registros alterados: " . mysqli_affected_rows($conexao);

mysqli_close($conexao);
?>