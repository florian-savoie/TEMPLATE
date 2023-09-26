<?php 

//$path = "C:\wamp64\www\TEMPLATE"; 
$a='';
//exec('cd ' . $path);
exec("git add .");  
exec("git commit -m'message'");
echo "<h3 align = center> Succesfully commited all the files.</h3>";
?>