<?php include "functions.php"; ?>
<?php include "includes/header.php"; ?>

<section class="content">

	<aside class="col-xs-4">

		<?php Navigation(); ?>

	</aside>
	<!--SIDEBAR-->


	<article class="main-content col-xs-8">

		<?php

		/* 
		TODO: Step 1: Make 2 variables called number1 and number2 and set 1 to value 10 and the other 20:
		TODO: Step 2: Add the two variables and display the sum with echo:
		TODO: Step3: Make 2 Arrays with the same values, one regular and the other associative
		*/

		$number1 = 10;
		$number2 = 20;

		$sum = $number1 + $number2;

		echo "<h1>" . $sum . "</h1>";
		echo "<br></br>";

		$normalArray = array(10);
		$assocArray = array("Twenty" => 20);

		print_r($normalArray);
		echo "<br></br>";
		print_r($assocArray);
		?>

	</article>
	<!--MAIN CONTENT-->

	<?php include "includes/footer.php"; ?>