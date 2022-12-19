<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Parameters</title>
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

    function greeting($message)
    {
        echo $message;
    }

    greeting("Hi Customer how are you?");

    ?>

    <?php


    function addNumbers($number1, $number2)
    {
        $sum = $number1 + $number2;
        echo $sum;
    }

    addNumbers(345, 3462);

    ?>

</body>

</html>