<?php 
// Conexão com o MySQL.
$conexao = mysqli_connect("localhost", "root", "root", "aula");

if ($conexao == false) {
	echo mysqli_connect_error();
}
?>