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
    <?php require 'logic.php'; ?> //Links to logic.php

</head>

<body>

  <form action='index.php' method='GET'>
    # of Words (Max 9): <input type="text" name="" maxlength="1"><br>
    <input type="submit" value="Submit">
  </form>

  <?php foreach($password as $value ==> $result): ?>
      <?php echo $value; ?>-
  <?php endforeach; ?>

</body>
</html>
