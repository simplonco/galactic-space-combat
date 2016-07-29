<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Using server-side includes</title>
    <link href="styles.css" rel="stylesheet" type="text/css">
</head>
<body>
<h1>Including External Files</h1>
<p>This paragraph is in the original file.</p>
<?php include_once './includes/para.html'; ?>
<p>This is also in the original file.</p>
<?php include_once './includes/para.html'; ?>
<?php require './includes/copyright.php'; ?>
<p><?= lyn_copyright(2015); ?> David Powers</p>
</body>
</html>