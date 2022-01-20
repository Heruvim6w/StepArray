<?php

$array = [5,6,1,2,7,9,3,2,4,5];
echo '<h2> Input array: ' . implode(", ",$array) . '<h2/><br>';

function getElements($array, $n)
{
    $result = [];
    for ($i = 1; $i < $n; $i++)
    {
        if ($array[$i] > $array[$i - 1]) {
            $result[$i] = $array[$i];
        }
    }
    return $result;
}

function averageItems($array) {
    $avgArray = sumItems($array) / count($array);
    return $avgArray;
}

function sumItems($array) {
    return array_sum($array);
}


function getFigures(): array {
    $figures = [
      ['name' => 'circle',
        'width' => '40px',
        'border-radius' => '50%',
        'height' => '40px',
        'background' => 'red',
        'position' => 'absolute',
        'top' => 25,
        'left' => 25
      ],
      ['name' => 'square',
        'width' => '40px',
        'border-radius' => '0%',
        'height' => '40px',
        'background' => 'green',
        'position' => 'absolute',
        'top' => 60,
        'left' => 60
      ],
      ['name' => 'rounded_square',
        'width' => '40px',
        'border-radius' => '20%',
        'height' => '40px',
        'background' => 'blue',
        'position' => 'absolute',
        'top' => 50,
        'left' => 150
      ],
    ];
    return $figures;
}




function printElements($array) {
    //Вывод эелементов, которые больше предыдущего
    $elements = getElements($array, count($array));
    echo '<h5>Elements which are more than previous: ';
    foreach ($elements as $item) {
        echo $item;
    }
    echo '<h5/><br>';

    //Вывод суммы элементов
    $sumOfElements = sumItems($array);
    echo '<h5>Sum of elements: ' . $sumOfElements . '</h5>';

    //Вывод среднего значения
    $avg = averageItems($array);
    echo '<h5>Average of items: ' . $avg . '</h5>';

    //Вывод фигур
    $figures = getFigures();
    echo '<div class="figures">';
    foreach ($figures as $item) {
        echo '<div style="width: '. $item["width"] .
            '; height: ' . $item["height"] .
            '; border-radius: ' . $item["border-radius"] .
            '; background-color: ' . $item["background"] .
            '; position: ' . $item["position"] .
            '; top:  ' . $item["top"] .
            '; left:  ' . $item["left"] .
            '"></div>';
    }
    echo '</div>';
}
printElements($array);