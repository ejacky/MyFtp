<?php 
$conn = ftp_connect("106.187.43.19") or die ("couldn't connect");
ftp_login($conn,"u116097","2U4VhmHI");

$a = array();
$a = ftp_rawlist($conn,".");
//print_r(ftp_rawlist($conn,"."));
$i = 0;
while ($a) {
	$i++;
	echo $a[$i]."\n";
}

?>
