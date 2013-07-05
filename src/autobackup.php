<?php
$password = 'httpdpassword';
//Enter Your Bukkit HttpD password Here
$address = 'serverip:httpdport';
//Enter Your HttpD Address Here E.G. http://8.8.8.8:12345


//Check For Server Being Turned On
$server = "serverip";
$port = "httpdport";
$timeout = "1";

//Config - Disable and enable features
$enabled = "enabledvalue";
$bukkittelnet = "bukkittelnetvalue";
$craftbukkit = "craftbukkitvalue";
$disdfreedom = "disdfreedomvalue";
$essentials = "essentialsvalue";
$totalfreedommod = "totalfreedommodvalue";
$worldedit = "worldeditvalue";
$zips = "zipvalue";

$whitelist = array('127.0.0.1');
// Add IP's That Are Allowed To Run The Backup To This Location
if (in_array($_SERVER['REMOTE_ADDR'], $whitelist)) {
        include 'backup/backup.php';
        echo '<!-- By TheCJGCJG https://github.com/TheCJGCJG/CjFreedom_Backup -->';
} else {
        header("HTTP/1.0 403 Forbidden");
        echo 'Sorry This Webpage Can Only Be Accessed By The CjFreedom Server @ mc.thecjgcjg.com';
        echo "<br />IP Address: ".$_SERVER['REMOTE_ADDR'];
        //Enter Your Not Authorised Message
        exit;
}
?>