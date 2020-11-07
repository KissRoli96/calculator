<?php

session_start();
include "function.php";

if(isset($_POST['numberOne']) && isset($_POST['numberTwo']))

    $numberOne = $_POST['numberOne'];
    $numberTwo = $_POST['numberTwo'];


if(isset($_POST['a']) && isset($_POST['b']) && isset($_POST['c']))

    $a = $_POST['a'];
    $b = $_POST['b'];
    $c = $_POST['c'];




switch(true)
{
    case isset($_POST['add']):
             $_SESSION['add_result'] = numbersAddition($numberOne,$numberTwo);
             header('Location: http://localhost/alga/calculator/index.php');
             break;

    case isset($_POST['sub']):
            $_SESSION['sub_result'] = numbersSubtraction($numberOne,$numberTwo);
            header('Location: http://localhost/alga/calculator/index.php');
            break;

    case isset($_POST['multi']):
            $_SESSION['multi_result'] = numbersMultiplication($numberOne,$numberTwo);
            header('Location: http://localhost/alga/calculator/index.php');
            break;

    case isset($_POST['divide']);
            $_SESSION['divide_result'] = numbersDivide($numberOne,$numberTwo);
            header('Location: http://localhost/alga/calculator/index.php');
            break;

    case isset($_POST['quad']);
            $_SESSION['quad_result'] = quadraticEquationSolver($a, $b, $c);
            header('Location: http://localhost/alga/calculator/index.php');
            break;

}










