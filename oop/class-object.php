<?php

class MathOperation
{
    function sum($a, $b)
    {
        return $a + $b;
    }

    function mul($a, $b)
    {
        return $a * $b;
    }
}

$math = new MathOperation();

echo $math->sum(10, 20);

echo "<br/>";

echo $math->mul(10, 20);

echo "<br/>";
