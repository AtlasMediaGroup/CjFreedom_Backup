<?php
$password = 'httpdpassword';
//Enter Your Bukkit HttpD password Here
$address = 'serveraddress:port';
//Enter Your HttpD Address Here E.G. http://8.8.8.8:12345


$whitelist = array('94.168.98.195', '109.70.149.212');
// Add IP's That Are Allowed To Run The Backup To This Location
if (in_array($_SERVER['REMOTE_ADDR'], $whitelist)) {
    include 'backup/backup.php';
	echo '<!-- By TheCJGCJG https://github.com/TheCJGCJG/CjFreedom_Backup -->';
} else {
    echo 'Sorry This Webpage Can Only Be Accessed By The CjFreedom Server @ mc.thecjgcjg.com'; 
    echo "<br />IP Address: ".$_SERVER['REMOTE_ADDR'];
	//Enter Your Not Authorised Message
    exit;
}
?>
