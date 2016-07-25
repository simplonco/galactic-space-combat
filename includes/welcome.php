<h1>Galactic Space Combat :: Welcome</h1>

<!-- TODO: PHP Notice: Undefined index error -->
<?php if ($_GET['error']) { ?>
<div class="alert alert-error"><?php echo htmlspecialchars($_GET['error']); ?></div>
<?php } ?>

<hr />

<h2>SignUp</h2>

<form class="form" action="/api/signup.php" method="POST">
    <fieldset class="form-group">
        <label for="username">Username:</label>
        <input id="username" name="username" placeholder="" class="form-control" />
    </fieldset>
    <div class="form-actions">
        <input type="submit" class="btn btn-primary btn-block btn-ghost" value="Enter the battle!" />
    </div>
</form>

<hr />

<h2>LogIn</h2>

<form class="form" action="#" method="GET">
    <fieldset class="form-group">
        <label for="key">Private key:</label>
        <input id="key" name="key" placeholder="" class="form-control" />
    </fieldset>
    <div class="form-actions">
        <!-- TODO: Do you know why this button not working on click? -->
        <button type="button" class="btn btn-default btn-block btn-ghost">Retreive your game!</button>
    </div>
</form>
