<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Switch Statement</title>
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

  $number = 34;

  switch ($number) {

    case 34:
      echo "it is 34";
      break;
    case 37:
      echo "is it 37";
      break;
    case 35:
      echo "is it 35";
      break;
    case 24:
      echo "is it 24";
      break;

    default:
      echo "We could not find anything";
      break;
  }

  ?>

</body>

</html>