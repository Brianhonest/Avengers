<?php
	if($_SERVER['REQUEST_METHOD'] == 'POST'){

		$age = $_POST['age'];
		$name = $_POST['first-name']." ".$_POST['last-name'];

		if ($age < 16) {
			echo "Sorry ".$name." you are under age, your age is ".$age." we need above 16 ";
		} else {
			
			echo "Congratulations ".$name.", you can now join our club";
		}

	}

?>