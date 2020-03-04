<?php

/*function funcaoDinamica() {
    $args = func_get_args();
    return $args;
}

var_dump(funcaoDinamica("Bom dia", 10));*/

//echo json_encode(funcaoDinamica("Bom dia", 10));

function tiposEscalaveis(int ...$valores) {
    return array_sum($valores);
}

echo tiposEscalaveis(2, 2);
echo '<br>';
echo tiposEscalaveis(20, 20);
echo '<br>';
echo tiposEscalaveis(1.5, 2.3);

?>