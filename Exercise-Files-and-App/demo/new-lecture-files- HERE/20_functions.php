<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Function</title>
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

  function init()
  {
    say_Something();
    echo "<br>";
    calculate();
  }

  function calculate()
  {
    echo 456 + 345;
  }


  function say_Something()
  {
    echo "Hello Student, do you like the class? yes? okay great";
  }

  init();

  ?>

</body>

</html>