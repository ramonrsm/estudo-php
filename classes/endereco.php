<?php

    class Endereco {
        private $logradoro;
        private $numero;
        private $cidade;

        public function __construct($logradoro, $numero, $cidade) {
            $this->logradoro = $logradoro;
            $this->numero = $numero;
            $this->cidade = $cidade;
        }

        /*public function __destruct() {
            var_dump('DESTRUIR...');
        }*/

        public function __toString() {
            return $this->logradoro . ', ' . $this->numero . ', ' . $this->cidade;
        }
    }

    $meuEndereco = new Endereco('rua tal', '677', 'Fortaleza');
    var_dump($meuEndereco);
    echo '<br>';
    echo $meuEndereco->__toString() . '<br>';
?>