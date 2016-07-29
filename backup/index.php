<!Doctype <!DOCTYPE html>
<html>
<body>
  <?php
    $stringvar1 = "Hello how are \"you\" doing"; //if you want to display a word in quote, you will use backslash before the quote and after the word in the quote.
    $stringvar2 = "Mark";
    $stringvar3 = " today $stringvar2?"; //there is a d/nce b/n double and single quote. That is if you use single, the variable($stringvar2) is not bold and also the variable name printed not the value of it, where as the double is printed the value of the variable. Therefore, we have to use double quote.

    echo $stringvar1 . $stringvar3;
   ?>
<?php
echo "My first PHP script!";
//this is the statement.
$stringvar = "This is a string variable";
echo $stringvar;
$integervar = "45";
echo $integervar;
?>
<?php
  $integer = 25;
  $integer += 10; // it means $integer = $integer + 10;
  echo $integer;
  $string = "Indeed";
  $string .= ".com"; //.= means concatenation assignment. i.e. to concatenate strings.
  // (.) this dot name helps to concatenate strings.
  echo $string;
?>
</body>
</html>
<?php
  /* Variable in PHP
    $stringvar = "This is a string variable";
      declare a variable by using the $ sign($stringvar is the first part) "This is a string variable" is the second part, it is called value.

 ?>
