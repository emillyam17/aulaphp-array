<?php
include "header.php";
include "dados.php";
//RECUPERAR O ID ENVIADO POR GET
$id = $_GET["id"] ?? NULL;
//verificar se o id esta branco
if (empty ($id)) {
    echo "<script> alert ('serie não encontrada');
    history.back(); </script>";
    exit;
}
$nome = $series[$id]["nome"];
$imagem = $series[$id] ["imagem"];
$sinopse = $series[$id]["sinopse"];
?>
<main>
    <div class="grid-2">
        <div class="coluna">
            <img src="imagens/<?=$imagem?>">    
        </div>
    </div>
</main>