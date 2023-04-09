<?php 
require("conexao-banco.php");

mysqli_query($conexao, "INSERT INTO usuarios (id, nome, email, user, senha) VALUES (NULL, 'Jose dos Santos', 'maria@email.com', 'maria', 'maria')");

mysqli_close($conexao);
?>