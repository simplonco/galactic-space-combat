<?php
$siteroot = '/introducingphp/ch08/08_01';
include './includes/copyright.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP errors</title>
    <link href="styles.css" rel="stylesheet" type="text/css">
</head>
<body>
<h1>Errors Galore!</h1>
<p>This paragraph is in the original file.</p>
<?php include './includes/para.html'; ?>
<p>This is also in the original file.</p>
<p><?= lyn_copyright(2015) ;?> David Powers</p>
</body>
</html>