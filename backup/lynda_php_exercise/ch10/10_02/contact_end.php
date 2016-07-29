<?php
$errors = [];
$missing = [];
if (isset($_POST['send'])) {
    $expected = ['name', 'email', 'comments', 'gender'];
    $required = ['name', 'comments', 'gender'];
    $to = 'David Powers <david@example.com>';
    $subject = 'Feedback from online form';
    $headers = [];
    $headers[] = 'From: webmaster@example.com';
    $headers[] = 'Cc: another@example.com';
    $headers[] = 'Content-type: text/plain; charset=utf-8';
    $authorized = null;
    if (!isset($_POST['gender'])) {
        $_POST['gender'] = '';
    }
    require './includes/process_mail.php';
}
?>
<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Radio buttons</title>
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
  <fieldset>
      <legend>Gender: <?php if ($missing && in_array('gender', $missing)) : ?>
          <span class="warning">Please select a value</span>
          <?php  endif; ?>
      </legend>
      <p>
        <input type="radio" name="gender" value="female" id="gender_f"
            <?php
            if ($_POST && $gender == 'female') {
                echo 'checked';
            }
            ?>
            >
          <label for="gender_f">Female</label>
        <input type="radio" name="gender" value="male" id="gender_m"
            <?php
            if ($_POST && $gender == 'male') {
                echo 'checked';
            }
            ?>
            >
          <label for="gender_m">Male</label>
        <input type="radio" name="gender" value="won't say" id="gender_0"
            <?php
            if (!$_POST || $gender == "won't say") {
                echo 'checked';
            }
            ?>
            >
          <label for="gender_0">Rather not say</label>
      </p>
  </fieldset>
  <p>
    <input type="submit" name="send" id="send" value="Send Comments">
  </p>
</form>
</body>
</html>