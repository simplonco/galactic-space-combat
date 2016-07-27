<?php
// Database settings
$HOST = 'localhost';
$DBNAME = 'test';
$LOGIN = 'root';
$PASSWORD = 'simplonco';

// Connect to the MySQL local database
try {
    $bdd = new PDO('mysql:host='.$HOST.';dbname='.$DBNAME.';charset=utf8', $LOGIN, $PASSWORD);
} catch (Exception $e) {
    die('Erreur : '.$e->getMessage()); // TODO: Recover error a bit more smootly!
}
?>

<h1>Galactic Space Combat :: Control Center</h1>

<!-- TODO: Duplicate.. -->
<?php if ($_GET['error']) { ?>
<div class="alert alert-error"><?php echo htmlspecialchars($_GET['error']); ?></div>
<?php } ?>

<h2>Captain Informations</h2>

<?php
$success = false;

$req = $bdd->prepare('SELECT username, money from users WHERE private_key = ? LIMIT 1');
$req->execute(array($_GET['key']));

while ($user = $req->fetch()) {
    $success = true;
?>
<ul>
    <li>Username: <?php echo $user['username']; ?></li>
    <li>Money: <?php echo $user['money']; ?></li>
</ul>
<?php
}

if (!$success) {
    header('Location: /?error=Login%20failed');
}
?>

<h2>Tasks</h2>

<!-- TODO: Don't forget htmlspecialchars() -->
<form class="form" action="/api/create_task.php?key=<?php echo $_GET['key']; ?>" method="POST">
    <fieldset class="form-group">
        <label for="name">Task name:</label>
        <input id="name" name="name" placeholder="" class="form-control" />
    </fieldset>
    <div class="form-actions">
        <input type="submit" class="btn btn-primary btn-block btn-ghost" value="New Task" />
    </div>
</form>

<?php
// TODO: SELECT * is a bad coding practice..
//I added name, is_running instead of asterice(*)
$req = $bdd->prepare('SELECT name, is_running from tasks WHERE private_key = ?');
$req->execute(array($_GET['key']));

while ($task = $req->fetch()) {
?>

<h2><?php echo $task['name']; ?></h2>

<?php
    $time_elapsed = time() - strtotime($task['start_time']);
    if ($time_elapsed > 100) {
        if ($task['is_running']) {
            // TODO: ALTER tasks WHERE private_key = ? WITH
            // TODO: Add big Bonuses
        }
?>

DONE ! <!-- TODO: Look better -->

<?php
    } else {
?>

<div class="progress-bar">
  <div class="progress-bar-filled" style="width: <?php echo $time_elapsed; ?>%"></div>
</div>

<?php
    }
?>

<hr />

<?php
}

$req->closeCursor();
?>
