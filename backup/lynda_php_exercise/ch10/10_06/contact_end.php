<?php
$errors = [];
$missing = [];
if (isset($_POST['send'])) {
    $expected = ['name', 'email', 'comments', 'format'];
    $required = ['name', 'comments'];
    $to = 'David Powers <david@example.com>';
    $subject = 'Feedback from online form';
    $headers = [];
    $headers[] = 'From: webmaster@example.com';
    $headers[] = 'Cc: another@example.com';
    $headers[] = 'Content-type: text/plain; charset=utf-8';
    $authorized = null;
    if (!isset($_POST['format'])) {
        $_POST['format'] = [];
    }
    $minimumSelected = 2;
    if (count($_POST['format']) < $minimumSelected) {
        $errors['format'] = true;
    }
    require './includes/process_mail.php';
}
?>
<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Multiple-choice list</title>
<link href="styles.css" rel="stylesheet" type="text/css">
</head>

<body>
<h1>Contact Us</h1>
<?php if ($_POST && $suspect) : ?>
<p class="warning">Sorry, your mail couldn't be sent.</p>
<?php elseif ($errors || $missing) : ?>
<p class="warning">Please fix the item(s) indicated</p>
<?php endif; ?>
<form method="post" action="<?= $_SERVER['PHP_SELF']; ?>">
  <p>
    <label for="name">Name:
    <?php if ($missing && in_array('name', $missing)) : ?>
        <span class="warning">Please enter your name</span>
    <?php endif; ?>
    </label>
    <input type="text" name="name" id="name"
        <?php
        if ($errors || $missing) {
            echo 'value="' . htmlentities($name) . '"';
        }
        ?>
        >
  </p>
  <p>
    <label for="email">Email:
        <?php if ($missing && in_array('email', $missing)) : ?>
            <span class="warning">Please enter your email address</span>
        <?php elseif (isset($errors['email'])) : ?>
            <span class="warning">Invalid email address</span>
        <?php endif; ?>
    </label>
    <input type="email" name="email" id="email"
        <?php
        if ($errors || $missing) {
            echo 'value="' . htmlentities($email) . '"';
        }
        ?>
        >
  </p>
  <p>
    <label for="comments">Comments:
        <?php if ($missing && in_array('comments', $missing)) : ?>
            <span class="warning">You forgot to add any comments</span>
        <?php endif; ?>
    </label>
      <textarea name="comments" id="comments"><?php
          if ($errors || $missing) {
              echo htmlentities($comments);
          }
          ?></textarea>
  </p>
  <p>
    <label for="format">Select the formats you require:
    <?php if (isset($errors['format'])) : ?>
        <span class="warning">Please select at least <?= $minimumSelected; ?></span>
        <?php endif; ?>
    </label>
    <select name="format[]" id="format" size="3" multiple>
      <option value="PDF"
          <?php
          if ($_POST && in_array('PDF', $format)) {
              echo 'selected';
          }
          ?>
          >PDF</option>
      <option value="ePub"
          <?php
          if ($_POST && in_array('ePub', $format)) {
              echo 'selected';
          }
          ?>
          >ePub</option>
      <option value="mobi"
          <?php
          if ($_POST && in_array('mobi', $format)) {
              echo 'selected';
          }
          ?>
          >MOBI</option>
    </select>
  </p>
  <p>
    <input type="submit" name="send" id="send" value="Send Comments">
  </p>
</form>
</body>
</html>