<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Returning values</title>
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

    function addNumbers($number1, $number2)
    {
        $sum = $number1 + $number2;

        return $sum;
    }

    $result = addNumbers(34, 64);

    echo $result;

    echo "<br>";

    $result = addNumbers(100, $result);

    echo $result;

    echo "<br>";

    $result = addNumbers(10000, $result);


    echo $result;

    ?>


</body>

</html>