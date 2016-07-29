<!DOCTYPE html>
<html>

<body>

<?php

$flipCount = 0;
	do {
		$flip = rand(0,1);
		$flipCount ++;
		if ($flip){
			echo "<div class=\"coin\">H</div>";
		}
		else {
			echo "<div class=\"coin\">T</div>";
		}
	} while ($flip);
	$verb = "were";
	$last = "flips";
	if ($flipCount == 1) {
		$verb = "was";
		$last = "flip";
	}
	echo "<p>There {$verb} {$flipCount} {$last}!</p>";

//here below another example on "do while loop"
	$i = 0;
	do {
		echo $i;
	}
	while ($i > 0) {
		# code...
	}

#here below also another example on "do while loop"
	$loopCond = false;
		do {
			echo "<p>The loop ran even though the loop condition is false.</p>";
			}	while ($loopCond);	
		echo "<p>Now the loop is done running.</p>";
#you can see another example about "do while loop"
		do {
	echo "This will Always show.";
} while (0) 

#$counter = 1; i off it for this example, but you can see it in the next example.
do {
	echo "This will Always show once. <br>";
	$counter = $counter + 1;

} while ($counter <= 10) 

//another example 
$counter = 1;
do {
	echo "This will Always show once. <br>";
	$counter = $counter + 1;

} while ($counter <= 10) 
?>

	
</body>
</html>


