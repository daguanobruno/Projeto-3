<?php

include("../conecta.php");

$conexao = new Conecta();
$conexao = $conexao->getInstance();

$st = $conexao->query("select * from noticias");
$noticias = ['arrNoticias' => []];
while($res = $st->fetch(PDO::FETCH_ASSOC)){
	$noticias['arrNoticias'][] = $res;
}

echo json_encode($noticias);

?>