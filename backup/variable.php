<!DOCTYPE html>
<html>
<body>
<?php
$txt = "Hello world!";
$x = 5;
$y = 10.5;
echo $txt;
echo "<br>";
echo $x;
echo "<br>";
echo $y;
?>

</body>
</html>


<!DOCTYPE html>
<html>
<body>
<?php
$txt = "W3Schools.com";
echo "I love $txt!";
?>
</body>
</html>


<!DOCTYPE html>
<html>
<body>

<?php
$x = 5;
$y = 4;
echo $x + $y;
?>

</body>
</html>

<!DOCTYPE html>
<html>
<body>

<?php
$x = 5; // global scope
  
function myTest() {
     // using x inside this function will generate an error
     echo "<p>Variable x inside function is: $x</p>";
} 
myTest();

echo "<p>Variable x outside function is: $x</p>";
?>

</body>
</html>

<!DOCTYPE html>
<html>
<body>

<?php
$x = 5;
$y = 10;

function myTest() {
     global $x, $y;
     $y = $x + $y;
} 

myTest(); // run function
echo $y; // output the new value for variable $y
?>

</body>
</html>

<!DOCTYPE html>
<html>
<body>

<?php
function myTest() {
     static $x = 0;
     echo $x;
     $x++;
}

myTest();
echo "<br>";
myTest();
echo "<br>";
myTest();
?>  

</body>
</html>