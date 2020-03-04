<?php
    $nome = 'ramon moura';
    $upper = strtoupper($nome);
    echo $upper;
    echo '<br>';

    $lower = strtolower($upper);
    echo $lower;
    echo '<br>';

    $capitalized =  ucwords($nome);
    echo $capitalized;
    echo '<br>';

    $first_capitalized =  ucfirst($nome);
    echo $first_capitalized;
    echo '<br>';
?>