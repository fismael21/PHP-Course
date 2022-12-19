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
		TODO: Step1: Make an if statement with elseif and else to finally display string saying, I love PHP
		TODO: Step 2: Make a forloop  that displays 10 numbers
		TODO: Step 3 : Make a switch statement that test againts one condition with 5 cases
 		*/

		if (4 > 5) {
			echo "I love PHP";
		} elseif (3 === "3") {
			echo "I don't like PHP";
		} else {
			echo "I like PHP";
			echo "<br></br>";
		}

		for ($i = 0; $i < 10; $i++) {
			echo "Number: " . $i;
			echo "<br></br>";
		}

		$number = 12;

		switch ($number) {
			case 43:
				echo "43";
				break;
			case 21:
				echo "21";
				break;
			case 33:
				echo "33";
				break;
			case 65:
				echo "18";
				break;
			case 12:
				echo "12";
				break;
		}

		?>

	</article>
	<!--MAIN CONTENT-->

	<?php include "includes/footer.php"; ?>