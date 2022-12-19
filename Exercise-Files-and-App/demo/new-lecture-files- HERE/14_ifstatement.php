<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>If statement</title>

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

    if (3 > 10) {
        echo "three is less than ten";
    } elseif (4 > 5) {
        echo "of course four is less than five";
    } else {
        echo "it is not";
    }

    ?>

</body>

</html>