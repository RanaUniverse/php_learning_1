<?php

// Here i will keep the php logic

$name = "Rana Universe";
$age = 11;

$greeting_txt = "Hello $name, How are you???";
$greeting_txt2 = "Welcome, " . $name . "!";
$greeting_txt3 = "Hello $name, you are $age years old!";

$years_later = 5;
$future_msg = "After {$years_later} year, you will become " . ($age + $years_later) . " Years Old";


?>

<!DOCTYPE html>
<html lang="en">

<body>

    <h1>This is PHP Learning By Rana Universe <br>.........</h1>

    <h1><?php echo $greeting_txt; ?></h1>
    <h1><?php echo $greeting_txt2; ?></h1>
    <h1><?php echo $greeting_txt3; ?></h1>
    <h1><?php echo $future_msg; ?></h1>
    <h1><?php echo $msg1; ?></h1>

</body>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php Learning from online </title>
</head>

</html>