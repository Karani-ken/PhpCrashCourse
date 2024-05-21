<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Control flow</title>
</head>

<body>
    <?php
    //if statements

    $a = 1;
    $b = 4;
    $bool = true;

    if ($a == 1) {
        echo "a is equal to one";
    } else if ($b == 3) {
        echo "b is equal to three";
    } else {
        echo "none of the conditions is true";
    }
    echo "<br>";
    //switch case 
    switch ($a) {
        case 1:
            echo "a is one";
            break;
        case 2:
            echo "a is 2";
            break;
        default:
            echo "none is true";
    }
    echo "<br>";
    //match case
    $result = match($a){
        1 => "a is one",
        2 => "a is two",
        default => " none is true",
    };
    echo $result;

    ?>

</body>

</html>