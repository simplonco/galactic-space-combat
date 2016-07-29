<?php
if (isset($_POST['redirect'])) {
    require './includes/somefile.php';
    header('Location: other.php');
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Problems with headers</title>
    <link rel="stylesheet" href="styles.css" type="text/css">
</head>
<body>
<h1>Headers Already Sent</h1>
<form method="post" action="redirect.php">
    <input type="submit" name="redirect" value="Redirect to Other Page">
</form>
</body>
</html>