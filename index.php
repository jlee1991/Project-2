<?php
error_reporting(E_ALL);       # Report Errors, Warnings, and Notices
ini_set('display_errors', 0); # Display errors on page (instead of a log file)
?>

<!DOCTYPE html>
<html>
<head>

    <title>XKCD Random Password Generator</title>
    <meta charset="utf-8">
    <link rel='stylesheet' href='' type='text/css'>
    <?php require 'logic.php'; ?>

</head>

<body>
  <p><b>XKCD Random Password Generator</b></p> <br>
  <p>Welcome to the XKCD Random Password Generator. To give a brief introduction to this website, you merely need to enter in number that corresponds with the number of words needed in your password and check the number box or symbol box to include a number or symbol in your password!</p>
  <form action='index.php' method='GET'>
    # of Words (Max 9): <input type="text" value="" name="subject" maxlength="1"><br>
    <input type="checkbox" value="Yes" name="number">Add Number<br>
    <input type="checkbox" value="Yes" name="symbol">Add Symbol<br>
    <input type="submit" value="Submit">
  </form>

</body>
</html>
