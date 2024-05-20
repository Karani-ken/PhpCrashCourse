<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    //scalar types(contains one value)
    $string = "Kenneth"; //default ""
    $int = 635353; //default 0
    $float = 3.45; //default 0
    $bool = true; //default false

    $array = []; //["john","jason"]
    $object = null;
    ?>
    <?php
    $name = "Kenneth Karani"
    ?>
    <p>Hello my name is <?php echo $name; ?> </p>
    <?php
    //super globals
   /* $_SERVER[""];
    $_GET[""];
    $_POST[""];
    $_REQUEST[""];
    $_FILES[""];
    $_COOKIE[""];
    $_SESSION[""];
    $_ENV[""]*/
    ?>
    <h1>Form handling</h1>
    <form action="includes/formhandler.php" method="post">
        <label for="firstname">First name</label> <br>
        <input type="text" id="firstname" name="firstname" placeholder="firstname"> <br>
        <label for="lastname">last name</label> <br>
        <input type="text" id="lastname" name="lastname" placeholder="lastname"> <br>
        <select name="favoritepet" id="favoritepet">
            <option value="none">none</option>
            <option value="dog">dog</option>
            <option value="cat">cat</option>
            <option value="bird">bird</option>
        </select>
        <br> <br>
        <button type="submit">Submit</button>
    </form>

</body>

</html>