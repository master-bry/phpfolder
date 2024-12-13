<?php

	$FName = 'Siphael'; 
	$LName = 'Betuel';
	$Hello     = 'Hello, Im PHP novice!';
	print  $FName;
    print $LName; 	// outputs “Siphael, Betuel" 
	print(" <font face=\"arial\" color=\"#ff0000\" style=\"bold\"> Hello, im php novice</font>");		// output “Hello World, Im PHP novice!”
	$_4site = 'not yet'; 	// invalid; starts with a number 
	$_4site = 'not yet'; 	// valid; starts with an underscore 
	$gavle = 'whatever'; 	// valid; 'ä' is extended ASCII 228. 
    echo $gavle;
    echo $_4site;
?>