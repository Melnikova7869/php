<?php
/* // If the submit button has been pressed
if(isset($_POST['submit']))
{
    // Check number values
    if(is_numeric($_POST['number1']) && is_numeric($_POST['number2']))
    {
        // Calculate total
        if($_POST['operation'] == 'plus')
        {
            $total = $_POST['number1'] + $_POST['number2'];	
        }
        if($_POST['operation'] == 'minus')
        {
            $total = $_POST['number1'] - $_POST['number2'];	
        }
        if($_POST['operation'] == 'times')
        {
            $total = $_POST['number1'] * $_POST['number2'];	
        }
        if($_POST['operation'] == 'divided by')
        {
            $total = $_POST['number1'] / $_POST['number2'];	
        }
        
        // Print total to the browser
        echo "<h1>{$_POST['number1']} {$_POST['operation']} {$_POST['number2']} equals {$total}</h1>";
    
    } else {
        
        // Print error message to the browser
        echo 'Numeric values are required';
    
    }
} */
// Функция для обработки ввода

if (isset($_POST['expression'])) {
    $expression = $_POST['expression'];


    $result = evaluateExpression($expression);

    echo json_encode(array('result' => $result));
} else {
    echo json_encode(array('error' => 'No expression provided'));
}

function evaluateExpression($expression) {
    $tokens = preg_split('/([\+\-\*\/\(\)])/', $expression, -1, PREG_SPLIT_NO_EMPTY | PREG_SPLIT_DELIM_CAPTURE);

    $rpn = infixToRPN($tokens);

    $result = evaluateRPN($rpn);

    return $result;
}

function infixToRPN($tokens) {
    $output = array();
    $stack = array(); 

    $precedence = array(
        '+' => 1,
        '-' => 1,
        '*' => 2,
        '/' => 2
    );

    foreach ($tokens as $token) {
        if (is_numeric($token)) {
            $output[] = $token;
        } elseif ($token == '(') {
            $stack[] = $token;
        } elseif ($token == ')') {
            while ($stack && end($stack) != '(') {
                $output[] = array_pop($stack);
            }
            array_pop($stack);
        } else {
            while ($stack && end($stack) != '(' && $precedence[$token] <= $precedence[end($stack)]) {
                $output[] = array_pop($stack);
            }
            $stack[] = $token;
        }
    }

    while ($stack) {
        $output[] = array_pop($stack);
    }

    return $output;
}

function evaluateRPN($tokens) {
    $stack = array();

    foreach ($tokens as $token) {
        if (is_numeric($token)) {
            $stack[] = $token;
        } else {
            $operand2 = array_pop($stack);
            $operand1 = array_pop($stack);

            switch ($token) {
                case '+':
                    $stack[] = $operand1 + $operand2;
                    break;
                case '-':
                    $stack[] = $operand1 - $operand2;
                    break;
                case '*':
                    $stack[] = $operand1 * $operand2;
                    break;
                case '/':
                    if ($operand2 != 0) {
                        $stack[] = $operand1 / $operand2;
                    } else {
                        return "Error: Division by zero";
                    }
                    break;
            }
        }
    }

    return $stack[0]; 
}


?>