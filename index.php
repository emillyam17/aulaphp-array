<?php
 include "header.php"; 
 
 include "dados.php";
 //conteudos de um array
 //echo "<pre>";
 //print_r($series);
 //echo "</pre>";
 ?>
 <main>
    <h1>series em destaque:</h1>
    <div class="grid">
        <?php
            foreach ($series as $serie) {
                $id = $serie ["id"];
                $nome = $serie ["nome"];
                $imagem = $serie ["imagem"];
                echo "<div class='coluna'> 
                <img src='imagens/{$imagem}'> 
                <p> <strong> {$nome}</strong></p>
                <p> 
                <a href= 'serie.php?id={$id}'>
                detalhes
                </a>
                </div>";
            }
        ?>
    </div>
 </main>
<?php include "footer.php"; ?>

