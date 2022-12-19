<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Comparison_Operators</title>

    <style>
        body{
            background: black;
            color: white;
            font-size: 20px;
        }
    </style>
</head>

<body>

    <!--
  <h2>Comparison Operators</h2>
  <pre>
      
      equal ==
      identical ===
      compare > <  >= <= <>
      not equal !=
      not identical !==
      
</pre>


 <h2>Logical Operators</h2>
  <pre>
      
     And &&
     Or  ||
    Not  !
      
</pre>
-->

    <?php

    if (4 === 4 && 5 < 10) {
        echo "it is true <br>";
    }

    if (4 !== 4 || 5 < 10) {
        echo "it is true<br>";
    }

    if (4 <> 5) { //Interesting
        echo "it is true";
    }

    ?>

</body>

</html>