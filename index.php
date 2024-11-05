<?php      
    $arr = [1, 2, 3, 7, 31, 4, 1, 8, 6];
    
    //посчитать длину массива
    var_dump(count($arr));

    //переместить первые 4 элемента массива в конец массива

        // Variant 1
        for($i = 0; $i < 4; $i++) {
            array_push($arr , $arr[0]);
            array_shift($arr); 
        }

        // Variant 2
        $arr = [1, 2, 3, 7, 31, 4, 1, 8, 6];

        for($i = 0; $i < 4; $i++) {
            array_push($arr , $arr[$i]);
        }

        var_dump(array_slice($arr , 4));
        
        // Variant 3
        $arr = [1, 2, 3, 7, 31, 4, 1, 8, 6];

        var_dump(array_merge(array_slice($arr , 4) , array_slice($arr , 0 , 4)));

    //получить сумму 4,5,6 элемента
    $arr = [1, 2, 3, 7, 31, 4, 1, 8, 6];
        // Variant 1
    var_dump($arr[3] + $arr[4] + $arr[5]);
        // Variant 2
    var_dump(array_sum(array_splice($arr , 3 , 3)));

    $firstArr = [ 
        'one' => 1,
        'two' => 2,
        'three' => 3,        
        'foure' => 5,        
        'five' => 12,         
        ];
        
        $secondArr = [        
        'one' => 1,        
        'seven' => 22,        
        'three' => 32,         
        'foure' => 5,         
        'five' => 13,        
        'six' => 37,       
        ];

        function check_sample_key($key1, $key2)
        {
            if ($key1 == $key2)
                return 0;
            else if ($key1 > $key2)
                return 1;
            else
                return -1;
        }

        // найти все элементы которые отсутствуют в первом массиве и присутствуют во втором

        var_dump(array_diff_ukey($secondArr , $firstArr , 'check_sample_key'));

        // найти все элементы которые присутствую в первом и отсутствуют во втором

        var_dump(array_diff_ukey($firstArr , $secondArr , 'check_sample_key'));
        
        // найти все элементы значения которых совпадают 

        var_dump(array_intersect($firstArr, $secondArr));

        // найти все элементы значения которых отличается

        var_dump(array_merge(array_diff($firstArr , $secondArr) , array_diff($secondArr , $firstArr)));
        
        $thirdtArr = [
            'one' => 1,
            'two' => [             
                'one' => 1,              
                'seven' => 22,            
                'three' => 32,            
            ],            
            'three' => [          
                'one' => 1,            
                'two' => 2,            
            ],
            'foure' => 5,              
            'five' => [             
                'three' => 32,             
                'foure' => 5,             
                'five' => 12,
            ],  
            ];
            //получить все вторые элементы вложенных массивов
            
            $second_elements = [];
            
            foreach ($thirdtArr as $elements) {
                if (is_array($elements)) {
                    $values = array_values($elements);
                    if (isset($values[1])) {
                        $second_elements[] = $values[1];
                    }
                }
            }
            
            print_r($second_elements);

            //получить общее количество элементов в массиве

            var_dump(count($thirdtArr, COUNT_RECURSIVE));


            //получить сумму всех значений в массиве

            function sum_arrays(array $array) {
                $sum_array = array_sum($array);
                foreach($array as $child) {
                    $sum_array += is_array($child) ? sum_arrays($child) : 0;
                }
                return $sum_array;
            }
            print_r(sum_arrays($thirdtArr));