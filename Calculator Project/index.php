<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
</head>

<body>
    <form action="<?php
                    echo htmlspecialchars($_SERVER["PHP_SELF"]);
                    ?>" method="post" style="padding: 10px; margin:20px;">
        <input type="number" name="num1" placeholder="enter the first number"> <br>
        <select name="operator">
            <option value="add">+</option>
            <option value="minus">-</option>
            <option value="multiply">*</option>
            <option value="divide">/</option>
        </select>
        <br>
        <input type="number" name="num2" placeholder="enter the second number"> <br>
        <button>Calculate</button>

    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        //grab data from inputs
        $num1 = filter_input(INPUT_POST, "num1", FILTER_SANITIZE_NUMBER_FLOAT);
        $num2 = filter_input(INPUT_POST, "num2", FILTER_SANITIZE_NUMBER_FLOAT);
        $operator = htmlspecialchars($_POST["operator"]);

       //error handlers
    $error = false;
    if (empty($num1) || empty($num2) || empty($operator)) {
        echo "<p>All fields are required!! </p>";
        $error = true;
    }
    if (is_numeric($num1) == false || is_numeric($num2) == false) {
        echo "<p>Please input numbers</p>";
        $error = true;
    }

    //clalculate if no errors
    if (!$error) {
        $value = 0;
        switch ($operator) {
            case "add":
                $value = $num1 + $num2;
                break;
            case "minus":
                $value = $num1 - $num2;
                break;
            case "multiply":
                $value = $num1 * $num2;
                break;
            case "divide":
                $value = $num1 / $num2;
                break;
            default:
                echo "<p> Something went wrong </p>";
        }
        echo "<p> result is equal to: ".
        $value. "</p>";
    }

    }
    
    ?>
</body>

</html>