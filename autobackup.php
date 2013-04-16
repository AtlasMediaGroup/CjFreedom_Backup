<?php
$password = 'httpdpassword';
$address = 'serveraddress:port';


$whitelist = array('94.168.98.195', '109.70.149.212');
if (in_array($_SERVER['REMOTE_ADDR'], $whitelist)) {
    include 'backup/backup.php';
} else {
    echo 'Sorry This Webpage Can Only Be Accessed By The CjFreedom Server @ mc.thecjgcjg.com'; 
    echo "<br />IP Address: ".$_SERVER['REMOTE_ADDR'];
    exit;
}
?>
