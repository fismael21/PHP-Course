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
		TODO: Step 1:  Use the Echo Function to say hello with html h1 tags embedded inside php.
	  TODO: Step 2: Write a comment above the echo function and explain what that function is doing.
		*/

		//*This echo says hello withing a html h1
		echo "<h1>Hello!</h1>";
		?>

	</article>
	<!--MAIN CONTENT-->

	<?php include "includes/footer.php"; ?>