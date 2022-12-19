<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Associative Arrays</title>

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

    $number = array('juanita', 'maria', 'jose');
    $number2 = array("juanita" => 'juanita', "maria" => 'maria', "jose" => 'jose');

    print_r($number);
    echo "<br>";
    print_r($number2["juanita"]);

    //echo $number[0] . "<br>";
    echo "<br>";

    // Associative Array Below

    $names = array("first_name" => 'Edwin', "Last_Name" => 'Diaz');

    //print_r($names);

    echo $names['first_name'] . " " . $names['Last_Name'];


    ?>

</body>

</html>