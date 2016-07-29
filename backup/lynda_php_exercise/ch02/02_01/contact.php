<?php
$missing = [];
// Process the form if the submit button has been clicked
if (isset($_POST['send'])) {
    $expected = ['name', 'email', 'comments'];
    // Add elements to the $missing array if empty
    foreach ($expected as $elem) {
        if (trim($_POST[$elem]) == false) {
            $missing[] = $elem;
        }
    }
}
?>
<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <title>Contact Us</title>
    <link href="styles.css" rel="stylesheet" type="text/css">
</head>

<body>
<h1>Contact Us</h1>
<?php if ($missing) : ?>
    <p class="warning">Please fix the item(s) indicated.</p>
<?php endif; ?>
<form name="contact" method="post" action="<?= $_SERVER['PHP_SELF']; ?>">
    <p>
        <label for="name">Name:
            <?php if ($missing && in_array('name', $missing)) : ?>
                <span class="warning">Please enter your name</span>
            <?php endif; ?>
        </label>
        <input type="text" name="name" id="name">
    </p>

    <p>
        <label for="email">Email:
            <?php if ($missing && in_array('email', $missing)) : ?>
                <span class="warning">Please enter your email address</span>
            <?php endif; ?>
        </label>
        <input type="text" name="email" id="email">
    </p>

    <p>
        <label for="comments">Comments:
            <?php if ($missing && in_array('comments', $missing)) : ?>
                <span class="warning">You forgot to add your comments</span>
            <?php endif; ?>
        </label>
        <textarea name="comments" id="comments"></textarea>
    </p>

    <p>
        <input type="submit" name="send" id="send" value="Send Comments">
    </p>
</form>
</body>
</html>