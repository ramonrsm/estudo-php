<?php

    session_start();

    //Depois de verificar o login e senha, reiniciar o ID da sessão
    session_destroy();

    session_start();
    
    session_regenerate_id();
    
    echo session_id();

?>