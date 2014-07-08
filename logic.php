<?php
//Number of words from index.php
/*if ($_GET['subject']=0)
  {$iteration=0;}
else
  {;}*/
$iteration=$_GET['subject'];
//Array from text file
$lines = file('text.txt');
for($i=0; $i<$iteration; $i++) {
 foreach($lines as $line) {
   $word = rand(0,5000);
 }
 $line=$lines[$word];
 echo $line."-";
 //echo $line."-";
}

if ($_GET['symbol']=='Yes'){
  $symbol="&";
  echo $symbol;
 }
else{};

if ($_GET['number']=='Yes'){
  $number = rand(0,9);
  echo $number;
 }
else{};
?>
