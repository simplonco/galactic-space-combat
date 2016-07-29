<?php
//if you use $_POST method, the element is not appear on the url; but in $_GET method everything appear on the url. then $_POST method is secured.
  $mytextbox = $_POST['mytextbox'];
  echo $mytextbox;
?>

<form method="POST" action="post_method.php">
<input type="text" name="mytextbox" value="">
</form>
