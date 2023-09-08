,<?php 

            $x = 10;

            if ($x == 10):

            for ($i = 1; $i <= 10; $i++):

            echo $i;

            echo '<br>';

            endfor;
            

            elseif($x !== 10):  echo str_repeat("_", 8);


            endif;
