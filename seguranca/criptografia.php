<?php 

    define('SECRET_IV', pack('a16', 'senha'));
    define('SECRET', pack('a16', 'senha'));

    $data = [
        "nome" => "RamonRsM"
    ];

    $openssl = openssl_encrypt(
        json_encode($data),
        'AES-128-CBC',
        SECRET,
        0,
        SECRET_IV
    );

    echo $openssl . '<br>';

    $string = openssl_decrypt($openssl, 'AES-128-CBC', SECRET, 0, SECRET_IV);

    $array = json_decode($string, true);

    echo $array['nome'];

    //var_dump(json_decode($string, true));
?>