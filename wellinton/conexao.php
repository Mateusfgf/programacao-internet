<!--
Wellinton Vieira
Programação para Internet I
 -->

<?php
	$conn = new mysqli("localhost", "root", "root", "wellinton");
	if ($conn->connect_error) {
	    die("Erro: " . $conn->connect_error);
	}
?>
