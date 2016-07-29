<?php
// SECURITY: Convert potential HTML content contain in POST data into HTML Entities
$_POST['pseudo'] = htmlspecialchars($_POST['pseudo']);;
?>
<!DOCTYPE>
<html>
    <form method="post" action="#">
        <input type="text" name="pseudo" />
        <input type="submit" value="Connexion" />
    </form>
    <div>
        <?php echo "Bonjour ".$_POST['pseudo']." !" ?>
    </div>
</html>
