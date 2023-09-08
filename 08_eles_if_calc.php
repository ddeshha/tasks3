<?php
$num1 = 10;
$num2 = 5;
$operator = "+";

if ($operator == "+") {
    echo $num1 + $num2;
} else if ($operator == "-") {
    echo $num1 - $num2;
} else if ($operator == "*") {
    echo $num1 * $num2;
} else if ($operator == "/") {
    echo $num1 / $num2;
} else if ($operator == "^") {
    echo pow($num1, $num2);
} else if ($operator == "%") {
    echo $num1 % $num2;
} else {
    echo "Invalid operator";
}
?>
