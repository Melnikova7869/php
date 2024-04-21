<?php
$arr = ['a', 'b', 'c', 'b', 'a'];

$counts = array_count_values($arr);

foreach ($counts as $letter => $count) {
    echo "Буква $letter встречается $count раз <br>";
}

/* ---------------------------------------- */

$arr1 = array(1, 2, 3);
$arr2 = array('a', 'b', 'c');

$newArr = array_merge($arr1, $arr2);

print_r($newArr);

/* ----------------------------------------*/

$arr = array('a', '-', 'b', '-', 'c', '-', 'd');

$pos = array_search('-', $arr);

if ($pos == true) {
    array_splice($arr, $pos, 1);
}

echo '<br>';
print_r($arr); 
echo '<br>';

/* ----------------------------------------*/

if (isset($_GET['number'])) {
    $number = (int)$_GET['number'];
    $square = $number * $number;

    echo 'Число: '. $number.' Квадрат: '.$square."<br>";
} 

/* ---------------------------------------- */

$arr = array(
    'Коля' => '1000$',
    'Вася' => '500$',
    'Петя' => '200$'
);

echo 'Зарплата Коли: '.$arr['Коля']."<br>";
echo 'Зарплата Пети: '.$arr['Петя']."<br>";

/* ----------------------------------------- */

function isNumberInRange($number) {
    return $number > 0 && $number < 10;
}

$arr = array(1, 4, -3, 10, 15, -1, 5, 2, 1, 22, 65);

$newArr = array_filter($arr, 'isNumberInRange');

print_r($newArr);

?>