<?php

// for mysqli_connect
$dbhost = 'db';
$dbuser = 'root';
$dbpass = 'example';

// for mysqli_select_db
$dbname = 'mysql';

$link = mysqli_connect($dbhost, $dbuser, $dbpass) or die("Unable to Connect to '$dbhost'");
mysqli_select_db($link, $dbname) or die("Could not open the db '$dbname'");
$test_query = "SHOW TABLES FROM $dbname";

$result = mysqli_query($link, $test_query);
$table_count = 0;
while ($tbl = mysqli_fetch_array($result)) {
  $table_count++;
  echo $tbl[0] . "<br />\n";
}
echo str_repeat('=', 20) . '<br />';
if (!$table_count) {
  echo "There are no tables<br />\n";
} else {
  echo "There are $table_count tables<br />\n";
}
