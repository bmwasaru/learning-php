<?php
	
	/* PHP operators */

	$a = ($b = 6) + 6; // $a equals 12 and $b assigned 6

	$a += 5; // sets $a to 17 same as $a = $a + 5

	$greeting = "Shikamoo ";
	$greeting .= "Bibi!"; // sets $greeting to "Shikamoo Bibi!"

	echo "Britone " . "Mwasaru";

	echo "<br>";

	echo $greeting;

	// increment

	echo "<h3>Post increment</h3>";
	$num = 5;
	echo "Should be 5: " .$num++.  "<br>";
	echo "Should be 6: " .$num. "<br>";
	
	echo "<h3>Preincrement</h3>";
	$num = 5;
	echo "Should be 6: " .++$num. "<br>";
	echo "Should be 6: " .$num. "<br>";

	// operations on characters
	$i = 'A';
	for ($n=0; $n<25; $n++)
		echo ++$i . "<br>";
		
	// playing around with roman numbers too
	$r = 'i';
	for ($c=0; $c<30; $++c)
		echo $r++;

?>
