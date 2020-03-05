<?php 

    $pasta = "arquivo";
    $permissao = "0775";

    if(!is_dir($pasta)) mkdir($pasta, $permissao);

    echo "Diretório criado com sucesso";

?>