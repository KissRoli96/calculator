<?php


/**
 * @param $numberOne
 * @param $numberTwo
 * @return mixed
 */
function numbersAddition($numberOne, $numberTwo)
{
    return $numberOne + $numberTwo;
}

/**
 * @param $numberOne
 * @param $numberTwo
 * @return mixed
 */
function numbersSubtraction($numberOne, $numberTwo)
{
    return $numberOne - $numberTwo;
}

/**
 * @param $numberOne
 * @param $numberTwo
 * @return float|int
 */
function numbersMultiplication($numberOne, $numberTwo)
{
    return $numberOne * $numberTwo;
}

/**
 * @param $numberOne
 * @param $numberTwo
 * @return float|int
 */
function numbersDivide($numberOne, $numberTwo)
{
    if ($numberTwo == 0) {
            echo "0 val nem osztunk ertelmetlen muvelet!";

    }

    return $numberOne / $numberTwo;
}

/**
 * @param $a
 * @param $b
 * @param $c
 * @return false|float|int|string
 */
function quadraticEquationSolver($a, $b, $c)
{
    $d = $b*$b - 4*$a*$c;

    if ($d < 0 ) {

       return "The equation has no real solutions!";

    } elseif ($d == 0) {

        $x =  (-$b / 2*$a);
        return $x;
    } else {
        $x1 = ((-$b + sqrt($d)) / (2*$a)) . "<br>";
        $x2 =  ((-$b - sqrt($d)) / (2*$a));
        return $x1 . "    " . $x2 ;
    }

    return false;
}
