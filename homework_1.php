<html>
<head>
<style type = "text/css">
p.red {color:red;}
p.blue {color:blue;}
</style>
</head>

<body>

<p>
<?php
    $par = $_GET["number"];

    function is_prime($n) {
	if((($n%2)==0 && $n>2) || $n<2) return false;
	    for($dev = 3; $dev <= sqrt($n); $dev = $dev + 2) { 
		if(($n%$dev)==0) {
		    return false;
                }
	    }
	    return true;
    }
?>
</p>

<p class="red">
<?php
    if(!(is_numeric($par)))
	printf("The parameter is not a number");
    else
        if(!(in_array($par, range(0, 19999))))
	    printf("The parameter is not within the range [0,19999]");
?>
</p>

<p>
<?php
    if(is_numeric($par) && is_prime($par))
	printf("The number %d is prime !", $par);
?>
</p>


<p class="blue">
<?php
    if(is_numeric($par) && !(is_prime($par)))
	printf("The number %d is NOT prime !", $par);
?>
</p>


</body>
</html>

    
