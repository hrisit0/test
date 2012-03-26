<?php
    $myarray = range(20,1000,37);
    
    function is_prime($n) {
	if((($n%2)==0 && $n>2) || $n<2) return false;
	    for($dev = 3; $dev <= sqrt($n); $dev = $dev + 2) { 
		if(($n%$dev)==0) {
		    return false;
                }
	    }
	    return true;
    }

    function find_3_prime($arr) {
	$count = 0;
	foreach($arr as $value) {
	    if(is_prime($value)) {
		$count++;
		if($count == 3)
		    printf("%d<br />", $value);
	    }
	}
    }

    function check_exists($arr) {
	foreach(array(146, 248, 871) as $value) {
	    if(in_array($value, $arr))
	        printf("The number %d exist in the array<br />", $value);
	    else
		printf("The number %d does not exist in the array<br />", $value);
        }
    }
    find_3_prime($myarray);
    check_exists($myarray);
?>