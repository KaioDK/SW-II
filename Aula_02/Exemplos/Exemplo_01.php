<?php
    for ( $i=0; $i <= 5; $i++) {
        echo $i;
        echo "<br>";
    }

    echo "<hr>";

    $nomes = ['FULANO', 'CICLANO', 'BELTRANO', 'KAIO', 'SOPHIA', 'ANDERSON'];

    foreach ($nomes as $indice => $valor) {
        echo $valor . "<br>";

    }
    //echo $nomes;

    // $qtde = count($nomes);
    // for ($i = 0; $i < $qtde; $i++) {
    //     echo $nomes [$i];
    //     echo '<br>';
    // }
    // echo '<hr>'
?>