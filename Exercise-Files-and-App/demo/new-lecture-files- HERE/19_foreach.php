<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>For each</title>
    <style>
        body {
            background: black;
            color: white;
            font-size: 20px;
        }
    </style>
</head>

<body>

    <?php

    $numbers = array(345, 397, 676, 385, 2657, 5784);

    foreach ($numbers as $number) {

        echo $number . "<br>";
    }

    ?>

</body>

</html>