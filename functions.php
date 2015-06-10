<?php

$marks = array(20, 12, 79, 60, 90);

$counter = 0;

function sum($marks) {
	$total = 0;
	foreach ($marks as $mark) {
		$total = $total + $mark;
	}
	return $total;
}

$total_sum = sum($marks);

function average($total_sum, $marks) {
	$counter = 0;
	foreach ($marks as $mark) {
		$counter = $counter + 1;
	}
	return $total_sum / $counter;
}

average($total_sum, $marks);