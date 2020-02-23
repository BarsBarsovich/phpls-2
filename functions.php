<?php
function task1(array $array, bool $isSimple)
{
    if ($isSimple) {
        echo implode(', ', $array);
    } else {
        foreach ($array as $value) {
            echo '<p>' . $value . '</p>';
        }
    }
}

function task2()
{
    $operator = '';
    $res = 0;
    foreach (func_get_args() as $n) {
        if (!is_int($n)) {
            $operator = $n;
        } else {
            switch ($operator) {
                case '-':
                    $res -= $n;
                    break;
                case '+':
                    $res += $n;
                    break;
                case '*':
                    if ($res === 0) {
                        $res = $n;
                    } else {
                        $res *= $n;
                    }
                    break;
                case '/':
                    if ($res === 0) {
                        $res = $n;
                    } else {
                        if ($n !== 0) {
                            $res /= $n;
                        }
                    }
                    break;
            }
        }
    }

    echo $res;

}


function task3(int $rows, int $cols)
{
    echo '<table border="1px solid">';
    for ($i = 0; $i <= $rows; $i++):
        echo '<tr><td>' . $i . ' </td>';

        for ($j = 0; $j <= $cols; $j++):
            if ($i > 0):
                $multiplyRes = $i * $j;
                echo '<td>' . $multiplyRes . '</td>';
            else:
                echo '<td>' . $j . '</td>';
            endif;
        endfor;
        echo '</tr>';
    endfor;
    echo '</table>';
}


function task4()
{
    $currentDate = time();
    echo date('d.m.Y H:i', $currentDate);
    echo PHP_EOL;
    echo strtotime('24.02.2016 0:0');
}


function task5()
{
    $carl = 'Карл у Клары украл Кораллы';
    echo str_replace('К', '', $carl) . PHP_EOL;
    $drinks = 'Две бутылки лимонада';
    echo str_replace('Две', 'Три', $drinks);
}

function task6(string $fileName)
{
    if (!file_exists($fileName)){
        file_put_contents($fileName, 'Hello again!');
    }
    echo file_get_contents($fileName);
}