<?php

$x = 0;

function fizzbuzz($x) {


    if ($x % 3 == 0 && $x % 5 == 0) : echo "fizzbuzz";

     elseif ($x % 3 == 0): echo "fizz";

     elseif ($x % 5 == 0) : echo "buzz";

    
    
    // else (echo "$x");  // idk why this error
    

    for ($i = 1; $i <= 50; $i++):

        fizzbuzz($i);

        echo "<br>";

    endfor;
    endif;
};