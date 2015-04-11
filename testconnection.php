<?php
$link = mysql_connect('127.0.0.1', 'pgst', 'PINEG@TE1');
  if (!$link) {
      die('Could not connect: ' . mysql_error());
  }
  echo 'Connected successfully';
  mysql_close($link);
?>
