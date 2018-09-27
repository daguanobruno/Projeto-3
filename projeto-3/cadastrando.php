<?php

include("conecta.php");

$titulo = $_POST['titulo'];
$subtitulo = $_POST['subtitulo'];
$corpo = $_POST['corpo'];
$autor = $_POST['autor'];


$sql = "INSERT INTO noticias (titulo, subtitulo, corpo, autor) VALUES (?, ?, ?, ?)";

$conexao = new Conecta();
$conexao = $conexao->getInstance();

$st = $conexao->prepare($sql);

	if($st->execute([$titulo, $subtitulo, $corpo, $autor])){
		$redirencionar = "index.php";
			header("location: $redirencionar");
	
} else {
	echo "Deu não!";	
}

?> 

