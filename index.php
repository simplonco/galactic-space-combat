<!DOCTYPE html>
<html>

<head>
    <!-- TODO: add META markups -->
    <link rel="stylesheet" href="/assets/css/hack.css" />
    <link rel="stylesheet" href="/assets/css/dark.css" />
</head>

<body class="hack dark">
<div class="container">

<?php
// TODO: Add a .htaccess to disable apache HTTP access inside includes folder
if ($_GET && $_GET['key']) {
    include 'includes/control_center.php';
} else {
    include 'includes/welcome.php';
}
?>

</div>
</body>

</html>
