<?php

 $numOne = $_POST['number_one'];
 $type = $_POST['type'];
 $numTwo = $_POST['number_two'];
 

 	if ($type == "+") {
 		$result = $numOne+$numTwo;
 	}elseif ($type == "-") {
 		$result = $numOne-$numTwo;
 	}elseif ($type == "*") {
 		$result = $numOne*$numTwo;
 	}elseif ($type == "/") {
 		$result = $numOne/$numTwo;
 	}else{
 		echo "Sometthing went wrong.";
 	}


 	header('location:calculator.php?result='.$result);






?>