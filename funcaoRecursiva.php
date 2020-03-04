<?php

$hierarquia = array(
    array(
        'nome_cargo' => 'CEO',
        'subordinados' => array(
            array(
                'nome_cargo' => 'Diretor Comercial',
                'subordinados' => array(
                    array(
                        'nome_cargo' => 'Gerente de vendas'
                    )
                )
            ),
            array(
                'nome_cargo' => 'Diretor Finaceiro',
                'subordinados' => array(
                    array(
                        'nome_cargo' => 'Gerente de Contas a Pagar'
                    )
                )
            )
        )
    )
);

function exibir($cargos)
{

    if (!isset($cargos) && count($cargos) === 0) {
        echo 'Cargos vazio.';
        return;
    }

    $html = '<ul>';

    foreach ($cargos as $cargo) {

        $html .= '<li>';

        $html .= $cargo['nome_cargo'];

        if (isset($cargo['subordinados']) && count($cargo['subordinados']) > 0) {
            $html .= exibir($cargo['subordinados']);
        }

        $html .= '</li>';
    }

    $html .= '</ul>';

    return $html;
}

echo exibir($hierarquia);
