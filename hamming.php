<?php

//
// This is only a SKELETON file for the "Hamming" exercise. It's been provided as a
// convenience to get you started writing code faster.
//

function distance($a, $b)
{
	$a_length = strlen($a);
	$b_length = strlen($b);

		if ($a_length != $b_length) {
    		throw new InvalidArgumentException('DNA strands must be of equal length.');
	    } else {
			$a_array = str_split($a);
	    	$b_array = str_split($b);
			$diff = 0;

	    	for ($i=0;$i < $a_length; $i++) { 
	    		if ($a_array[$i] != $b_array[$i]) {
	    			$diff++;
	    		}
	    	}
	    }

    	return $diff;
}