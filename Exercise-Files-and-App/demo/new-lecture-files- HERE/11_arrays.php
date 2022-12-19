<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Arrays</title>
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

    $numberList = array(267, 8765, 345, '5345', 345, '<h1>Hello</h1>');
    $numberList2 = [23, 23, 3, 4, '<h2>Hi</h2>'];

    //print_r($numberList);

    echo $numberList[5];
    echo $numberList2[4];

    ?>

</body>

</html>