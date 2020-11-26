<?php

include "head.php";
include "calculator.php";
include_once "function.php";

?>

<body>
<form action="calculator.php" method="post">
    <br>
    <div class="container">
        <div class="row">
            <div class="col-sm">
                <h2>Calculator</h2>

                numberOne: <input type="number" name="numberOne"><br>
                numberTwo: <input type="number" name="numberTwo"><br>

            </div>

            <div class="col-sm">
               <h2>Quadratic Solver</h2>
                a: <input type="number" name="a"><br>
                b: <input type="number" name="b"><br>
                c: <input type="number" name="c"><br>
            </div>

            <div class="col-sm border-dark" >
                <h2>Quadratic Solver Result</h2>
                <button type="submit" class="btn btn-primary" name="quad">Solve</button>
                Eredmény:
                            <?php
                             if (isset($_SESSION['quad_result']))
                                 echo $_SESSION['quad_result'];
                             ?>
            </div>
        </div>
    </div>

    <br>
    <div class="row">
        <div  class="col border border-dark" >
            <button type="submit" class="btn btn-primary" name="add">Addition</button>
            Eredmény:
            <?php
            if (isset($_SESSION['add_result']))
            echo $_SESSION['add_result'];
            ?>

        </div>
        <div class="col border border-dark">
            <button type="submit" class="btn btn-primary" name="sub">Subtraction</button>
            Eredmény:
            <?php
            if (isset($_SESSION['sub_result']))
                echo $_SESSION['sub_result'];

            ?>
        </div>
        <div class="border border-dark w-100"></div>
        <div class="border border-dark col">
            <button type="submit" class="btn btn-primary" name="multi">Multiplication</button>
            Eredmény:
            <?php
            if (isset($_SESSION['multi_result']))
            echo $_SESSION['multi_result'];
            ?>
        </div>
        <div class="border border-dark col">
            <button type="submit" class="btn btn-primary" name="divide">Divide</button>
            Eredmény:
            <?php
            if (isset($_SESSION['divide_result']))
            echo $_SESSION['divide_result'];
            ?>
        </div>
    </div>
    <br>
</form>

<?php

include "footer.php";

?>


