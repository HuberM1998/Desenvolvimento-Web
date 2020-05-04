<?php
    $arquivo = fopen('arquivo.hd', 'a');
    $titulo = str_replace('#', '-', $_POST['titulo']);
    $categoria = str_replace('#', '-', $_POST['categoria']);
    $decricao = str_replace('#', '-', $_POST['descricao']);
    $texto = $titulo . '#' .  $categoria . '#' . $descricao . PHP_EOL;

    fwrite($arquivo, $texto);
    fclose($arquivo);
    header('Location: abrir_chamado.php')
?>