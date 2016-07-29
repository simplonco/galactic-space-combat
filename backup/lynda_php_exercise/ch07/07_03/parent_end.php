<?php $siteroot = '/introducingphp/ch07/07_03'; ?>
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
<!-- This links to the end version of para.html -->
<?php include_once './includes/para_end.html'; ?>
<p>This is also in the original file.</p>
<?php include_once './includes/para_end.html'; ?>
<?php require './includes/copyright.php'; ?>
<p><?= lyn_copyright(2015); ?> David Powers</p>
</body>
</html>