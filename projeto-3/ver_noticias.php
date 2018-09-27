<?php
    include 'conecta.php';
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Ver Notícias</title>
    <meta name="viewport" content="width=device-width, initial-scale=1"> 
    <link rel="stylesheet" type="text/css" href="ProjetoCSS.css">
   
    <script src="main.js"></script>
</head>
<body>

<?php

$conexao = new Conecta();
$conexao = $conexao->getInstance();

$id = $_GET['id'];

$st = $conexao->query ("select * from noticias where id = '$id'"); 

while($lista = $st->fetch(PDO::FETCH_ASSOC)){
    $id = $lista['id'];
    $titulo = $lista['titulo'];
    $subtitulo = $lista['subtitulo'];
    $corpo = $lista['corpo'];
    $autor = $lista['autor'];
}

?>

<div class="ver_noticia" >
    <h1><?php echo $titulo ?></h1><br>
    <h2><?php echo $subtitulo?></h2>
</div>
<div class = "ver_noticia_p">
<br>
    <p><?php echo $corpo?></p><br>
    <p><lable>Autor: </label><?php echo $autor?></p>
</div>
</body>
</html>