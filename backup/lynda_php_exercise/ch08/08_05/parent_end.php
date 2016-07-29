<?php
$siteroot = '/introducingphp/ch08/08_05';
require './includes/copyright.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Failed to open stream</title>
    <link href="styles.css" rel="stylesheet" type="text/css">
</head>
<body>
<h1>Server-Side Include Not Found</h1>
<p>This paragraph is in the original file.</p>
<?php
// Move para.html to the includes folder for this to work
include './includes/para.html';
?>
<p>This is also in the original file.</p>
<p><?= lyn_copyright(2015) ;?> David Powers</p>
</body>
</html>