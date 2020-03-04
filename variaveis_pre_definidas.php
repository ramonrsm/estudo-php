<?php 
    $nome = (int) $_GET["b"];
    //var_dump($nome);
    $ip = $_SERVER["REMOTE_ADDR"];
    echo $ip;

    echo '<br/>';
    
    $script_name = $_SERVER["SCRIPT_NAME"];
    echo $script_name;

    echo '<br/>';

    $server_software = $_SERVER["SERVER_SOFTWARE"];
    echo $server_software;

    echo '<br/>';
?>