<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $arr = array(1, 2, 3, 5, 123);
    $a = ['one' >= 1, 'two' >= 2];
    print_r($arr);
    print_r($a);
    foreach ($arr as $key => $value) {
        echo '' . $key . '' . $value . '' . '<br>';
    }

    $arr = array(
        array(1, 2, 3),
        array('a', 'b'),
        array(2, 3, 4, 5, 6, 7, 8),
    );
    foreach ($arr as $value) {
        foreach ($value as $elem) {
            echo "$elem,";
        }
        echo "<br>";
    }
    $N1 = [
        'key1' => [1, 2, 3],
        'key2' => [5, 3, 9],
        /* ['a', 'b', 'g'], */
    ];

    /*    $N1[2][0] = 'abc'; */
    usort($N1, 'compare');
    function compare($x, $y)
    {
        var_dump($x);
        echo '<br>';
        var_dump($y);
        echo '<br>';
        if ($x[1] == $y[1])
            return 0;
        elseif ($x[1] > $y[1])
            return 0;
        elseif ($x[1] < $y[1])
            return 1;
    }
    ;
    foreach ($N1 as $key => $value) {
        echo "$key=>";
        foreach ($value as $elem) {
            echo "$elem, ";
        }
        echo '<br>';
    }

    echo fack(5);
    function fack($n){
        $k = 1;
        for($i = 2; $i <= $n; $i++) $k*=$i;
        return $k;
    }
    echo '<br>';
    echo rek_fact(5);
    function rek_fact($n){ 
        if ($n == 1) return $n;
        else return $n*rek_fact($n-1);
    }

    list($lastName, $name, $old) = spisoc();
    echo "$lastName $name $old года";
    function spisoc() {
        $old = 4;
        return array('Petrov', 'Oleg', $old);
        }

    $a = 10;
    function sum($a, $b, $c) {
        return $a + $b + $c;
    }

    echo sum(1,4,5)

    

    ?> 
</body>

</html>