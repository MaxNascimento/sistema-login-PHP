<?php 
require("conexao-banco.php");

mysqli_query($conexao, "DELETE FROM usuarios WHERE id = 3");
echo "Registros apagados: " . mysqli_affected_rows($conexao);

mysqli_close($conexao);
?>