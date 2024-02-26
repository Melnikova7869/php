<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <header>
        <h1>Hello, World!</h1>
        <img src="Mospolite.png">
    </header>
    <main>
        <?php
            $a = 2;
            $b = "2";
            $c = 5.7;
            $d = (int)$c; 
            echo gettype($c);
            define("pi", 3.14);
            echo pi;
            echo $a + $b;
            echo $a.$b;
            $a = 2.2;
            $d = 3.7;
            echo "a = ".$a."floor = ".floor($a); 
            echo "a = ".$d."round = ".floor($a); 
            echo "a = ".$a."ceil = ".floor($a); 

            echo 2**10;
            $quit = "тише";
            $go = "едешь";
            $will = "будешь";
            echo "$quit $go дальше $will";
            echo $quet."".$go. " дальше ".$will;
            
            $a = 2;
            $b = 3;
            echo "$a + $b = ($a + $b)";
            echo $a. "+" .$b." ".$a + $b;

            $a = 1;
            $b = "3";
            var_dump($a === $b);
            var_dump($a < $b); 

            echo $a and $b;
            echo $a && $b;
            echo $a || $b;


            echo $a++;
            echo ++$a;

            echo $a--;
            
            $a = 3;
            $b = 4;
            echo $c = ($a > $b)? $a : $b;
             if ($a > $b) echo $a;
             else if ($a == $b) echo "ok";
             else echo $b;

             switch($a + $b) {
                case 3: echo "warninng<br>";
                    break;
                case 7: echo "ok<br>";
                    break;
                case 6: echo "don't believe<br>";
                    break;
                default: echo "any<br>";
                    break;
             }

            echo `<br>----------------------</br>`;
            $i = 2;
            $S = 0;
            switch($i) {
                case 1: $S++;
                case 2: $S++;
                case 3: $S++;
                case 4: $S++;
                case 5: $S++;
                case 6: $S++;
            }
            echo $S;
            $x = 5;
            while ($x < 10) {
                echo $x."<br>";
                $x++;
            }

            echo `<br>----------------------</br>`;

            do {
                echo $x."<br>";
                $x--;
            } while ($x > 5);

        $arr = array(1,2,3,4,5);
        for ($i = 0; $i < count($arr); $i++){
            echo $arr[$i]
        }     
        ?>
    </main>
    <footer></footer>
</body>
</html>