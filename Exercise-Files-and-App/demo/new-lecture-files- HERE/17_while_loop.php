<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>While Loop</title>
    <style>
        body{
            background: black;
            color: white;
            font-size: 20px;
        }
    </style>
</head>

<body>

    <?php

    $counter = 0;
    while ($counter <= 10) {

        echo "Number: " . $counter;
        echo "<br></br>";
        $counter++;
        //$counter = $counter + 1;

    }

    ?>

</body>

</html>