<?php
  $bdd = new PDO("mysql:host=localhost;dbname=sample_chat;charset=utf8", "root", "simplonco");
  if(isset($_POST['pseudo']) AND isset($_POST['message']) AND !empty($_POST['pseudo']) AND !empty($_POST['message'])) {
    $pseudo = htmlspecialchars($_POST['pseudo']);
    $message = htmlspecialchars($_POST['message']);
    $insertmsg = $bdd->prepare('INSERT INTO chat(pseudo, message) VALUES(?, ?)');
    $insertmsg ->execute(array($pseudo, $message));
  }
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Chat App in PHP</title>
    <meta charset="utf-8">
    <meta name="viewreport" content="width=device-width, initial-scale=1.0">
  </head>
  <body>
    <form method="post" action="">
      <input type="text" name="pseudo" placeholder="PSEUDO" value="<?php if(isset($pseudo)) { echo $pseudo;}?>" /><br />
      <textarea type="text" name="message" placeholder="MESSAGE"></textarea><br />
      <input type="submit" value="Envoyer" />
    </form>
    <?php
      $allmsg = $bdd->query('SELECT * FROM chat ORDER BY id DESC LIMIT 0, 5');
      while ($msg = $allmsg->fetch()) {
    ?>
      <b><?php echo $msg['pseudo']; ?>:</b><?php echo $msg['message']; ?><br />
    <?php
      }
    ?>

  </body>
</html>
