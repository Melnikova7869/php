<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <header>
    </header>
    <main>
        <?php
           $equation = "27 - X = 17";
           $leftSide = "";
           $rightSide = "";
           $operator = "";
           
           for ($i = 0; $i < strlen($equation); $i++) {
             if ($equation[$i] === "=") {
               $operator = "=";
               break;
             }
             $leftSide .= $equation[$i];
           }
           for ($i = $i + 1; $i < strlen($equation); $i++) {
             $rightSide .= $equation[$i];
           }
           
           $xPosition = strpos($leftSide, "X");
           
           if ($xPosition === false) {
             $x = $rightSide - $leftSide;
           } else {
             $x = $rightSide - (floatval(str_replace("X", "", $leftSide)));
           }

           $x = str_replace("-", "", $x);
           
           echo "X = " . $x;
           
        ?>
    </main>
    <footer></footer>
</body>
</html>