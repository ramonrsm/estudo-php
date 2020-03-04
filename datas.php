<?php 

    setlocale(LC_ALL, 'pt_BR', 'pt_BR.utf-8', 'portuguese');

    echo date("d/m/Y H:i:s");
    echo '<br>';
    echo 'Atual: ' . time();
    echo '<br>';
    echo '<br>';
    
    $timestamp = strtotime("2020-03-04");
    echo $timestamp;
    echo '<br>';
    echo date("l, d/m/Y", $timestamp);
    echo '<br>';
    echo ucwords(strftime("%A, %B"));
    echo '<br>';
    echo '<br>';

    echo 'Classe DateTime ---- <br>';
    $dateTime = new DateTime();

    $periodo = new DateInterval("P15D");
    echo '<br>';
    echo $dateTime->format("d/m/Y H:i:s") . '<br>';

    $dateTime->add($periodo);

    echo 'Somado 15 dias<br>';
    echo $dateTime->format("d/m/Y H:i:s");
?>