<?php 
require("conexao-banco.php");

$resultado = mysqli_query($conexao, "SELECT * FROM usuarios");

while($registro = mysqli_fetch_array($resultado)) {
    echo $registro['nome'];
    echo "<br>";
}

mysqli_close($conexao);
?>