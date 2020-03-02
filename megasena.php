<?php
echo '<h2>Palpite Da Mega Sena Ladrona de dinheiro</h2>';
echo '<hr/>';

function DezenasDaMegaSena()
{

    $dezenas = array();
    $contador = 1;
    $linhaTemporaria = array();

    for ($coluna = 0; $coluna < 10; $coluna++) {

        for ($linha = 0; $linha < 6; $linha++) {
            array_push($linhaTemporaria, $contador);
            $contador++;
        }

        $dezenas[$coluna] = $linhaTemporaria;
        $linhaTemporaria = array();
    }

    return $dezenas;
}

function PalpiteDaMegaSena()
{

    $sena = array();

    while (count($sena) < 6) {
        $dezenaAleatoria = mt_rand(1, 60);

        if (!in_array($dezenaAleatoria, $sena)) {
            array_push($sena, $dezenaAleatoria);
        }
    }

    sort($sena);

    return $sena;
}

/*echo '<pre>';
    print_r(PalpiteDaMegaSena());
    echo '</pre><br/>';
    echo '<pre>';
    print_r(DezenasDaMegaSena());
    echo '</pre><br/>';*/
?>

<!DOCTYPE html>
<html lang="pt-Br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $hack = true;
    $dezenas = DezenasDaMegaSena();
    $sorteio = PalpiteDaMegaSena();

    $palpites[0] = $hack ? $sorteio : PalpiteDaMegaSena();
    $palpites[1] = PalpiteDaMegaSena();
    $palpites[2] = PalpiteDaMegaSena();
    ?>

    <h2>Números Sorteados: <?= implode(', ', $sorteio) ?></h2>
    <?php for ($i = 0; $i < 3; $i++) : ?>
        <h3>Palpite número <?= ($i + 1) ?>: <?= implode(', ', $palpites[$i]) ?></h3>
    <?php endfor; ?>

    <div style="display: flex; flex-wrap: wrap">
        <?php for ($i = 0; $i < 3; $i++) : ?>
            <table border="1" style="width:300px; margin-left: auto; margin-right: auto">
                <caption>Sorteio de número <?= ($i + 1) ?></caption>
                <tbody>
                    <?php for ($coluna = 0; $coluna < count($dezenas); $coluna++) : ?>
                        <tr>
                            <?php foreach ($dezenas[$coluna] as $linha) {
                                $style = '';

                                if (in_array($linha, $palpites[$i]) && in_array($linha, $sorteio)) $style = "<td style='background-color: #0000FF; color: #FFF'";
                                else $style = '';

                                echo "<td $style>$linha</td>";
                            }
                            ?>
                        </tr>
                    <?php endfor; ?>
                </tbody>
            </table>
            <br />
        <?php endfor; ?>
    </div>
</body>

</html>
