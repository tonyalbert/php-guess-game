<?php 

function game() {
    $num = rand(0, 11);

    $tentativa = 0;

    $i = 1;

    while($num != $tentativa) {
        echo 'Digite um número: ';
        $tentativa = fgets(STDIN); 
        if(!is_numeric($tentativa)) {
            echo 'Insira um valor válido' . PHP_EOL;
            continue;
        }
        if($tentativa < $num) {
            echo 'Valor muito baixo' . PHP_EOL;
            $i++;
        } elseif($tentativa > $num) {
            echo 'Valor muito alto' . PHP_EOL;
                $i++;
        } else {
            echo 'Parabéns! Você acertou.';
        }
    }


    echo "Você acertou em $i tentativas" . PHP_EOL;
}

