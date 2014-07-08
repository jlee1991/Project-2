<?php
error_reporting(E_ALL);       # Report Errors, Warnings, and Notices
ini_set('display_errors', 1); # Display errors on page (instead of a log file)
?>

<!DOCTYPE html>
<html>
<head>

    <title>XKCD Random Number Generator</title>
    <meta charset="utf-8">
    <link rel='stylesheet' href='' type='text/css'>
    <?php require 'logic.php'; ?>

</head>

<body>

  <form action='index.php' method='GET'>
    # of Words (Max 9): <input type="text" name="" maxlength="1"><br>
    <input type="submit" value="Submit">
  </form>

	<?php //foreach($lines as $iteration => &$result): ?>
		<?php //echo $result[$word] ?>
	<?php //endforeach; ?>

  <?php //foreach($name as $name => &$result): ?>
      <?php //echo $name; ?>
      <?php //for($i=0; $i<$iteration; $i++) ?>
      <?php //{ ?>
        <?//php echo $password[$i] ?>
      <?php //} ?>
  <?php //endforeach; ?>

</body>
</html>
