<?php require_once("../includes/session.php"); ?>
<?php require_once("../includes/db_connection.php"); ?>
<?php require_once("../includes/functions.php"); ?>

<?php find_selected_page(); ?>

<?php
	if (!$current_subject) {
		// subject ID was missing or invalid or 
		// subject couldn't be found in database
		redirect_to("manage_content.php");
	}
?>

<?php include("../includes/layouts/header.php"); ?>

<div id="main">
  <div id="navigation">
		<?php echo navigation($current_subject, $current_page); ?>
  </div>
  <div id="page">
		<?php echo message(); ?>
		<?php $errors = errors(); ?>
		<?php echo form_errors($errors); ?>
		
		<h2>Edit Subject: <?php echo $current_subject["menu_name"]; ?></h2>
		<form action="create_subject.php" method="post">
		  <p>Menu name:
		    <input type="text" name="menu_name" value="<?php echo $current_subject["menu_name"]; ?>" />
		  </p>
		  <p>Position:
		    <select name="position">
				<?php
					$subject_set = find_all_subjects();
					$subject_count = mysqli_num_rows($subject_set);
					for($count=1; $count <= $subject_count; $count++) {
						echo "<option value=\"{$count}\"";
						if ($current_subject["position"] == $count) {
							echo " selected";
						}
						echo ">{$count}</option>";
					}
				?>
		    </select>
		  </p>
		  <p>Visible:
		    <input type="radio" name="visible" value="0" <?php if ($current_subject["visible"] == 0) { echo "checked"; } ?> /> No
		    &nbsp;
		    <input type="radio" name="visible" value="1" <?php if ($current_subject["visible"] == 1) { echo "checked"; } ?>/> Yes
		  </p>
		  <input type="submit" name="submit" value="Edit Subject" />
		</form>
		<br />
		<a href="manage_content.php">Cancel</a>
	</div>
</div>

<?php include("../includes/layouts/footer.php"); ?>
