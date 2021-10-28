<?php
extract($_REQUEST);
$file=fopen("$username","a");
date_default_timezone_set("Asia/Kuala_Lumpur");
$t=date("h:i:sa");
$d=date("Y/m/d") ;
//fwrite($file,"username :");
//fwrite($file, $username ."\n");
fwrite($file,"Topic :");
fwrite($file, $topic ."\n");
fwrite($file,"contents :");
fwrite($file, $Notes ."\n");
fwrite($file,"Date created:");
fwrite($file,$d);
fwrite($file,"      Time:");
fwrite($file,$t."\n");
fwrite($file,"\n");
fwrite($file,"\n");
fclose($file);
header("location: Addnotes.php");
?>
