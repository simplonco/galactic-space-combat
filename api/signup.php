<?php

/*** SignUp a player ***
 *
 * POST:
 *  - username
 */
 //Database settings
include 'include.php';

$LENGTH = 64; // private key length match MySQL settings

// TODO: Move in a separate generateRandomString function for example
$characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
$charactersLength = strlen($characters);
$private_key = '';
for ($i = 0; $i < $LENGTH; $i++) { // TODO: $LENGHT could be a parameter
    $private_key .= $characters[rand(0, $charactersLength - 1)];
}

// TODO: Define MySQL settings only one time..

// Connect to the MySQL local database
try {
    $bdd = new PDO('mysql:host='.$HOST.';dbname='.$DBNAME.';charset=utf8', $LOGIN, $PASSWORD);
} catch (Exception $e) {
    die('Erreur : '.$e->getMessage()); // TODO: Recover error a bit more smootly!
}

// Create User
$req = $bdd->prepare('INSERT INTO users (username, private_key, money) VALUES(?, ?, ?)');
$req->execute(array($_POST['username'], $private_key, 1000)); // TODO: Fix SSX security issue
// Player start game with 1000 units of money => store that in a CONSTANT

$req->closeCursor();
?>

<!DOCTYPE html>
<html>
<!-- TODO: use PHP include to don't duplicate code -->
<head>
    <link rel="stylesheet" href="/assets/css/hack.css" />
    <link rel="stylesheet" href="/assets/css/dark.css" />
</head>

<body class="hack dark">
<div class="container">

<h1>Galactic Space Combat :: Successfull signup</h1><!-- TODO: What's happen if is not succesfull? -->

<div class="alert alert-info">Your PRIVATE KEY is: <?php echo $private_key; ?></div>
<p>You can login using just by using <a href="/?key=<?php echo $private_key; ?>">/?key=<?php echo $private_key; ?></a></p>

</div>
</body>

</html>
