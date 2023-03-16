<?php
if(isset($_GET['conteudo'])) {
    $conteudo = $_GET['conteudo'];
    
    if($conteudo == 'teste1') {
        echo '<h1>teste 1</h1>';
        echo '<p>Conteúdo da página 1</p>';
    } elseif($conteudo == 'pagina2') {
        echo '<h1>teste  2</h1>';
        echo '<p>Conteúdo da página 2</p>';
    } else {
        echo '<h1>Página não encontrada</h1>';
    }
} else {
    echo '<h1>Parâmetro "conteudo" não encontrado</h1>';
}
?>