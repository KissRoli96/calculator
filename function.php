<?php


function numbersAddition($numberOne,$numberTwo)
{
    return $numberOne + $numberTwo;
}

function numbersSubtraction($numberOne,$numberTwo)
{
    return $numberOne - $numberTwo;
}

function numbersMultiplication($numberOne,$numberTwo)
{
    return $numberOne * $numberTwo;
}

function numbersDivide($numberOne,$numberTwo)
{
    if($numberTwo == 0) {
            echo "0 val nem osztunk ertelmetlen muvelet!";

    }

    return $numberOne / $numberTwo;
}