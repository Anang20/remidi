<?php

$hp = [
    ["Samsung", "Samsung Galaxy Note20 Ultra", 14500000],
    ["Samsung", "Samsung Galaxy S20", 11400000],
    ["Samsung", "Samsung Galaxy A21s", 2299000],
    ["Realme", "Realme 5i", 1650000],
    ["Realme", "Realme 6 Pro", 4000000],
    ["Realme", "Realme 5 Pro", 2999000],
    ["Realme", "Realme 3", 2000000],
    ["Xiaomi", "Xiaomi Redmi Note 9 Pro", 3298000],
    ["Xiaomi", "Xiaomi Redmi Note 8 Pro", 3208000],
    ["Xiaomi", "Xiaomi Redmi 7a", 1300000],
    ["Vivo", "Vivo Y30", 2800000],
    ["Vivo", "Vivo Y20", 2200000],
    ["Vivo", "Vivo Y11", 1800000],
    ["Oppo", "Oppo A52", 2800000],
    ["Oppo", "Oppo Reno3", 3480000],
    ["Oppo", "Oppo A3S", 1000000],
    ["Oppo", "Oppo A12", 1500000]

];

// var_dump($hp);

// foreach ($hp as $key)
// {
//     echo $key[0].$key[1].$key[2]."\n";
// }

$temp_arr=[];

foreach ($hp as $key)
{
    $temp_arr[]=$key[0];
}

$new=array_unique($temp_arr);

foreach ($new as $key_x)
{
    echo $key_x."\n";
}