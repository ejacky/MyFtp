<?php
$myfile = $_GET("uploadfile");

$source = fopen($myfile,"r");
$conn = ftp_connect("106.187.43.19") or die("Could not connect");
ftp_login($conn,"u116097","2U4VhmHI");

echo ftp_fput($conn,"/",$source,FTP_ASCII);





ftp_close($conn);
?>
