<?php
//Array from text file
$lines = file('text.txt');
for($i=0; $i<5; $i++) {
 foreach($lines as $line) {
   $word = rand(0,5000);
 }
 $line=$lines[$word];
 //echo $line. "<br />";
}
?>

<?php

  /*$text = file('text.txt'); //Array from text file

  for($i=0; $i<$iteration; $i++) {
    foreach() {
      $word = rand(0,5000);
      $password['$iteration'] = $text['$word'];
    }
  } */
?>
