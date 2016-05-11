<?php
$host = "localhost";
$user = "root";
$password = "root";
$link = mysql_connect($host,$user,$password);
if (!$link)
{
  die('Could not :'.mysql_error());
}

?>
