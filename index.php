<?php
/*
Jake Donaldson
4/15/21
URL : https://jdonaldson.greenriverdev.com/328/pp-arrays-git/pp-arrays-git/index.php
Pair Program 2
Turn on error reporting
*/
ini_set('display_errors', 1);
error_reporting(E_ALL);


?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP Array Practice</title>
</head>
<body>

<?php
    require("functions.php");
    echo "<p>PHP Array Practice</p>";

    $numbers = array(7,9,8,9,8,8,6);

    printArr($numbers);
    largest($numbers);
    //$uniqueArray = removeDups($numbers);
    //echo "<p>$uniqueArray</p>";



?>

</body>
</html>