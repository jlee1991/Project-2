<?php
/*error_reporting(E_ALL);       # Report Errors, Warnings, and Notices
ini_set('display_errors', 1);*/ # Display errors on page (instead of a log file)
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
  <p><b>XKCD Random Number Generator</b></p> <br>
  <form action='index.php' method='GET'>
    # of Words (Max 9): <input type="text" value="" name="subject" maxlength="1"><br>
    <input type="checkbox" value="Yes" name="number">Add Number<br>
    <input type="checkbox" value="Yes" name="symbol">Add Symbol<br>
    <input type="submit" value="Submit">
  </form>

</body>
</html>
