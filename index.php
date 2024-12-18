<?php

$name = "Rana Universe";
$age = 11;

// Determine the status based on age
if ($age > 18) {
    $status = "You are an adult.";
} else {
    $status = "You are a minor.";
}

$sentence = "Hello " . strtoupper($name) . ", " . $status

?>

<!DOCTYPE html>
<html lang="en">

<body>

    <h1>Sentence: <?php echo $sentence; ?></h1>

</body>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php Learning from online </title>
</head>

</html>