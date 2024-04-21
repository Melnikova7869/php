<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $str = 'Ivanov Ivan Ivanovich';
    $pattern = '/([A-Z][a-z])+ ([A-Z])[a-z]+ ([A-Z])[a-z]+/';
    preg_match($pattern, $str, $matches);
    var_dump($matches);
    echo '<br>';
    echo $matches[1] . ' ' . $matches[2] . ' . ' . $matches[3];

    $str = 'aabbccc';
    echo str_replace('a', '!', $str);
    echo '<br>';
    echo preg_replace('/a{2}/', '!', $str);
    echo '<br>';
    echo preg_replace('/123/', '!', '123 xxaxxxxa');
    echo '<br>';
    echo preg_replace('/xa*x/', '!', 'xxxxa xaaxx xxaaaxxx');
    echo '<br>';
    echo 'axx bxx bbxx exx';
    echo '<br>';
    echo preg_replace('/(a | b+)xx/', '!', 'axx bxx bbxx exx');
    echo '<br>';
    echo "aaa bcd xxx efg";
    echo '<br>';
    echo preg_replace('/(a|x){3}/', '!', "aaa bcd xxx efg");
    echo '<br>';
    echo "a\a abc";
    echo '<br>';
    echo preg_replace('/a\\\a/', '!', 'a\a abc');
    echo '<br>';
    $regex = '/(?<!\1)([a-z])\1/';

    $replacement = '!$1';

    $text = 'abbcdea';

    echo preg_replace($regex, $replacement, $text);
    echo '<br>';
    $regex = '/(\d{2})-(\d{2})-(\d{4})/';
    $replacement = '$3.$2.$1';
    $date = '31-12-2014';
    echo preg_replace($regex, $replacement, $date);
    echo '<br>';
    $regex = '/\.(jpg|jpeg)/i';
    $text = 'myfile.jpg';

    preg_match($regex, $text);
    echo $text;
    echo '<br>';

    $regex = '/^(2(?:\+){1,3}) 3$/';
    $text = '23 2+3 2++3 2+++3 345 567';

    preg_match_all($regex, $text, $matches);
    print_r($matches[0]);
    echo '<br>';
    $regex = '/^a(\d)a$/';
    $text = 'a1a a2a a3a a4a a5a aba aca';

    preg_match($regex, $text, $matches);
    echo $matches[0];
    echo '<br>';
    ?>

</html>