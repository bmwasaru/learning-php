<?php
	$first_name = "Britone";
	$last_name = "Mwasaru";

	echo $first_name;
	echo $last_name;

	echo "My name is " .$first_name;
	echo "My name is " .$first_name. " the son of " .$last_name;
	echo "My name is {$first_name}  the son of {$last_name}";

	echo "<br>$first_name $last_name";
	echo "<br>";

	echo gettype($first_name);

	echo "<br>";

	echo strlen($first_name);

	echo "<br>";

	echo $first_name[0];
	echo $first_name[1];
	echo $first_name[6];
	echo $first_name[strlen($first_name)-1];
	echo $first_name{5};

	// numbers
	$number_1 = 1;
	$number_2 = 2;

	echo $number_1 * $number_2;

	echo "<br>";
	echo gettype($number_1);

	echo "<br>";

	$single = false;
	echo gettype($single);

	$salary = 10000.09;
	echo gettype($salary);

	echo "<br>";

	$bio = array(
		"name"=>"Britone Mwasaru",
		"age"=>"Young",
		"tel"=>719308620
		);

	echo $bio["tel"];

	echo "<br>";

	$bio = array(
		"name"=>array("Britone", "MWasaru"), 
		"age"=>"Young",
		"tel"=>array(71945555, 34455)
		);

	echo $bio["tel"][1];
	echo $bio["name"][0];

	echo "<br>";

	$counties = array("Kilifi", "Kwale", "Nairobi");

	foreach($counties as $county)
		echo "Mombasa is better than {$county}, deal with it!<br>";

	echo "<br>";

	$team = array(
			"developers" => array("Ruth", "Phil", "Charles"),
			"designers" => array("Aisha", "Snowden Haris"),
			"outreach" => array("Dorine", "Rhodah")
		);

	echo $team["outreach"][0];
	echo $team["developers"];

	$input = array("a", "b", "c", "d", "e");

	$output = array_slice($input, 2);      // returns "c", "d", and "e"
	$output = array_slice($input, -2, 1);  // returns "d"
	$output = array_slice($input, 0, 3);   // returns "a", "b", and "c"

	// note the differences in the array keys
	print_r(array_slice($input, 2, -1));
	print_r(array_slice($input, 2, -1, true));

?>