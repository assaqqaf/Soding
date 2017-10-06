<?php

function fibonacci_sum_even($max)
{
	$total = 0;
	$prev = 0;
	$current = 1;

	while (true) {
	    $next = $prev + $current;
	    $prev = $current;
	    $current = $next;
	    if($current > $max) {
	        break;
	    }
	    if($current % 2 === 0) {
	        $total += $current;
	    }
	}

	return $total;
}


print fibonacci_sum_even(4000000);
