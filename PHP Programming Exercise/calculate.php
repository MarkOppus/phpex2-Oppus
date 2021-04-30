<?php

class Calculate{

    function triangle ($sideA, $sideB)
    {
        $maxLength = $sideA + $sideB - 1;
        echo '<h1>' . 'Answer:' . $maxLength.'</h1>';
    }
    function binaryrepresentation($binary)
    { 
       $count = 0;
        while($binary)
       {
           $count += ($binary & 1);
           $binary = $binary >> 1;
       }

        echo '<h1>' . 'Answer: ' . $count . '</h1>';
    }
    function pathparts ($pathA, $pathB)
    {
        $output = str_replace('/', '', $pathA);
        $output .= "/" . str_replace('/', '', $pathB);
        echo '<h1>' . 'Answer: ' . $output . '</h1>';
    }
    function sastrynumber ($number)
    {
        $conc = $number . $number+1;
        $check = 0;
        for ($i = 1; $i * $i <= $conc; $i++) {
            if (($conc % $i == 0) && ($conc / $i == $i)) {
                $check = 1;
                echo '<h1>' . " ". $conc . " IS ". sqrt($conc) . ". IT IS A SASTRY NUMBER" . '</h1>';
        }
    }
        if($check == 0){
        echo $conc . " IS NOT A SASTRY NUMBER";
        }
    }

    

}