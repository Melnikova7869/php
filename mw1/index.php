<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <main>
        <?php
          /*  1 --------------------- */
            $a = 27;
            $b = 12;
            $red = round(sqrt($a**2 + $b**2),2);
            echo $red."<br>";
            /*  2 --------------------- */
            $give = "Дают";
            $take = "бери";
            $beat = "бьют";
            $run = "беги";
            echo $give. " - ".$take. ", ".$beat." - ".$run."<br>";
            /*  3 --------------------- */
            /* floor float */
            $a = 4.3;
            $b = 7.7;
            $c = "5.5";
            $d = "3.4 кг";
    
            echo "значение потолка: ".$a.", значение пола: ".$a.", округляем = ".round($a)."<br>";
            echo "значение потолка: ".$b.", значение пола: ".$b.", округляем = ".round($b)."<br>";
            echo "значение потолка: ".$c.", значение пола: ".$c.", округляем = ".round($c)."<br>";
            echo "значение потолка: ".$d.", значение пола: ".$d.", округляем = ".round((int)$d)."<br>";
 
        /*  4 --------------------- */
        $a = 14;
        $b = 21;
        $c = "ласточек";
        
        $d = $a + $b;
        echo $d." ".$c."<br>";
         /*  5 --------------------- */
        $a = 54;
        $b = 6;
        $c = "попугаев";
         
        $d = $a / $b;
        echo $d." ".$c."<br>";

        /*  5 --------------------- */
        $a = 2;
        $b = "2";
        $d = "2a";
        echo $a." === ".$b."  ".($a === $b ? "Истина" : "Ложь")."<br>";
        echo $a." > ".$b."  ".($a < $b ? "Истина" : "Ложь")."<br>";
        echo $a." < ".$b."  ".($a > $b ? "Истина" : "Ложь")."<br>";
        echo $a." == ".$d."  ".($a == $d ? "Истина" : "Ложь")."<br>";
        echo $a." === ".$d."  ".($a === $d ? "Истина" : "Ложь")."<br>";
        echo $a." > ".$d."  ".($a > $d ? "Истина" : "Ложь")."<br>";
        echo $a." >= ".$d."  ".($a >= $d ? "Истина" : "Ложь")."<br>";
        /*  6 --------------------- */
        $a = 2;
        $b = 2.0;
        $c = '2';
        $d = 'two';
        $g = true;
        $f = false;

        echo "Исходный тип: ".gettype($a)." Полученное значение: ".(bool)$a."<br>";
        echo "Исходный тип: ".gettype($b)." Полученное значение: ".(bool)$b."<br>";
        echo "Исходный тип: ".gettype($c)." Полученное значение: ".(bool)$c."<br>";
        echo "Исходный тип: ".gettype($d)." Полученное значение: ".(bool)$d."<br>";
        echo "Исходный тип: ".gettype($g)." Полученное значение: ".(bool)$g."<br>";
        echo "Исходный тип: ".gettype($f)." Полученное значение: ".(bool)$f."<br>";

        /*  7 --------------------- */
        $a = 7;
        $b = '8';

        $result = ($a ** $b) > ($b ** $a) ? "$a ^ $b = " . ($a ** $b) : "a = $a, b = $b";
        echo $result."<br>";

        /*  8 --------------------- */

        $a = 0;
        $b = 12;

        if ($a) {
            echo "Отношение b к a: " . ($b / $a)."<br>";
        } else {
            echo "a в булевом типе: " . (bool)$a."<br>";
        }

        /*  9 --------------------- */
        $c = -27;
        $b = 12;

        if ($c > 0 && $b > 0) {
            echo "c ^ b = " . ($c ** $b);
        } elseif ($c < 0 && $b < 0) {
            echo "c + b = " . ($c + $b);
        } else {
            echo "c * b = " . ($c * $b);
        }


        ?>
    </main> 
</body>
</html>