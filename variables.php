<?php
	
	/* Variables in PHP */

	// variable declaration
	$first_name = "Jane";
	$second_name = "Doe";

	// concatination
	$full_name = "$first_name $second_name";

	echo "My name is ".$full_name. " , I am a superwoman.";
	echo "My name is {$full_name}, I am a superwoman <br>";
	echo "Jane starts with {$full_name{0}} and ends with {$full_name{strlen($full_name)-1}} <br>";

	// php is case sensitive
	$name = "Jane Doe";
	$Name = "John Doe";
	echo "{$name} and {$Name} sitting under the tree ... <br>";

	echo "<br>";

	// Variable assignments
	$a = $b = 10; // asign 10 to both the variable $a and $b
	$c = $a++; // post-increment. assign original value of $a, 10, to $c
	echo $c;
	echo "<br>";
	echo $a;
	echo "<br>";
	$d = ++$c; // pre-increment, assign the incremented value of $c, 10, to $d
	echo $d;
	echo "<br>";
	echo $c;

?>