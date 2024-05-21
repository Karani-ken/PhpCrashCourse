<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $firstname = htmlspecialchars($_POST["firstname"]);
    $lastname = htmlspecialchars($_POST["lastname"]);
    $favoritepet = htmlspecialchars($_POST["favoritepet"]);

    echo "<p>These are the submitted details </p>";
    echo $firstname;
    echo "<br>";
    echo $lastname;
    echo "<br>";
    echo $favoritepet;
    header("Location: ../index.php");
}