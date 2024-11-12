<?php

//Создать функцию принимающую массив произвольной вложенности и определяющий любой элемент номер которого передан параметром во всех вложенных массивах.

$array = [
    "level1" => [
        "level2" => [
            "level3a" => [1, 2, "apple", [3, 4, "banana", [5, "cherry"]]],
            "level3b" => ["nested" => [6, 7, "grape", ["nested2" => [8, "peach"]]]]
        ],
        "anotherLevel2" => [
            9, "mango", [10, "pear", [11, "plum", [12, 13, "kiwi"]]]
        ]
    ],
    "level1b" => ["strawberry", [14, "melon", [15, 16, ["apricot", "orange" , "tomato", "apple", "pear"]]]]
];

function show_choose_elements(array $array , int $int) {
    $result = [];
    foreach ($array as $key => $elem) {
        if (is_array($elem)) {
            if (isset($elem[$int])) {
                $result[] = $elem[$int];
            }
            $result = array_merge($result, show_choose_elements($elem, $int));
        }
    }
    return $result;
}

var_dump(show_choose_elements($array , 1));

//Создать функцию которая считает все буквы b в переданной строке, в случае если передается не строка функция должна возвращать false

function count_letter_b($string) {
    if(!is_string($string)) return false;
    else {
        return substr_count(mb_strtolower($string), 'b');
    }
}
var_dump(count_letter_b('abasfasbasfsafbasfasfbasfsafbbbsasBBBb'));

//Создать функцию которая считает сумму значений всех элементов массива произвольной глубины
$array = [10, "apple", [5, "banana", [15, 10, "carrot"], 8], "dog", 12, ["elephant", [3, 7, "fox"], 5], "grape", 5];

function sum_arrays(array $array) {
    $sum_array = array_sum($array);
    foreach($array as $child) {
        $sum_array += is_array($child) ? sum_arrays($child) : 0;
    }
    return $sum_array;
}
print_r(sum_arrays($array));

//Создать функцию которая определит сколько квадратов меньшего размера можно вписать в квадрат большего размера размер возвращать в float

function define_count_smaller_square(int $bigger_num , int $smaller_num) {
    return pow($bigger_num , 2) / pow($smaller_num , 2);
}

var_dump(define_count_smaller_square(10 , 8));
