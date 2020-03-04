<?php 

    function teste($callback) {
        
        // Processo lento

        $callback();
    }

    teste(function () {
        echo 'Terminou<br>';
    });

    $fn = function ($a) {
        var_dump($a);
    };

    $fn('Teste');
?>