<?php

$stdin = file_get_contents('php://stdin');
find_weights($stdin);

function find_weights($stdin) {
    $weights = explode(',', $stdin);
    sort($weights);
    $canoes_needed = 0;

    $chunked_array = array_chunk($weights, count($weights)/2);
    
    $lower_array = $chunked_array[0];
    $higher_array = $chunked_array[1];
    
    for ($i = count($higher_array)-1; $i > -1; $i--) {
        if ($higher_array[$i] >= 150) {
            $canoes_needed++;
            array_pop($higher_array);
        } else {
            if (($higher_array[$i] + $lower_array[0]) <= 150) {
                $canoes_needed++;
                array_shift($lower_array);
                array_pop($higher_array);
            } else {
                $canoes_needed++;
                array_pop($higher_array);
            }
        }
    }
    
    echo $canoes_needed;
}
