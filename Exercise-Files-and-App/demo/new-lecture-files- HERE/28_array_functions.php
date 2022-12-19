<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Array Functions</title>
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

    $list = [343, 34, 323, 23, 54, 232, 453];

    echo max($list);

    echo "<br>";

    echo min($list);


    echo "<br>";

    sort($list);

    print_r($list);


    ?>

</body>

</html>