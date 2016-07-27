<?php

/*** Create a new task ***
 *
 * POST:
 *  - name (task_name)
 *
 * GET:
 *  - key (private_key)
 */

// Database settings
$HOST = 'localhost';
$DBNAME = 'test';
$LOGIN = 'root';
$PASSWORD = 'simplonco';
// TODO: Duplicate again.. look in signup.php and control_center.php files

// Connect to the MySQL local database
try {
    $bdd = new PDO('mysql:host='.$HOST.';dbname='.$DBNAME.';charset=utf8', $LOGIN, $PASSWORD);
} catch (Exception $e) {
    die('Erreur : '.$e->getMessage()); // TODO: Recover error a bit more smootly!
}

// Create the new task
$req = $bdd->prepare('INSERT INTO tasks (name, private_key) VALUES(?, ?)');
$req->execute(array($_POST['name'], $_GET['key']));
// TODO: Handle an error if the MySQL request fail..

// TODO: Add $req->closeCursor() everywhere!

// TODO: Replace this ugly redirect by a cool Ajax call and a partial-refresh!
header('Location: /?key='.$_GET['key']);
