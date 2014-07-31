<?php
	/* types supported by php */

	$bool = TRUE; // a boolean
	$str = 'Mombasa Disruptors'; // a string
	$int = 8901234; // an integer

	// display the type
	echo gettype($str);
	echo "<br>";
	echo gettype($bool);
	echo "<br>";
	echo gettype($int);
	echo "<br>";

	// Conversion from float to integer
	echo (int)(234.5666);
	echo "<br>";

	// string
	echo "Yay, I am double quoted!"; // double quoted string
	echo "<br>";
	echo 'Yo! I am single :) quoted that is ;)'; // single quoted
	echo "<br>";

	$jina = "Jane Doe";
	echo "My name is " . $jina . " I love this city <br>"; // variable in a string
	echo "My name is ${jina} I love this city <br>";
	echo "My name is {$jina} I love this city <br>";

	// join strings
	$first_name = "Britone";
	$second_name = "Mwasaru";
	$full_name = "$first_name $second_name";
	echo "I am {$first_name}, the son of {$second_name}. Peace out! So my ID says {$full_name}<br>";

	// accessing a string
	$sentence = "Do what thou wilt";
	echo strlen($sentence); // length of the string
	echo "<br>";
	echo $sentence{0}; // first character
	echo "<br>";
	echo $sentence{strlen($sentence)-1}; // last character
	echo "<br>";

	// arrays
	
	$bio = array("name" => "Britone Mwasaru", "age" => "Young", "Tel" => array("first"=>719308602, "second"=>712389094));
	echo "My name is {$bio["name"]}. I am {$bio["age"]}. Holla at me, my number is {$bio["Tel"]["first"]} and the other number is {$bio["Tel"]["second"]} <br>";
	echo "<br>";

	unset($bio["Tel"]["Second"]); // remove the second number

	// iterating an array
	
	$counties = array('Kwale', 'Kilifi', 'Nairobi', 'Turkana'); // array of Kenya counties
	// iterate through each item in the array , counties
	foreach ($counties as $county) {
		echo "Mombasa is better than {$county}, deal with it! <br>";
	}

	$team = array(
			"developers" => array("Ruth", "Phil", "Charles"),
			"designer" => array("Aisha", "Britone"),
			"outreach" => array("Dorine", "Rhodah")
		);

	echo $team["outreach"][0];

	
?>