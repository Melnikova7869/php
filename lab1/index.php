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

            
        ?>
    </main>
    <footer></footer>
</body>
</html>