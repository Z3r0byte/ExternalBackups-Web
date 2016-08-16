<?php
include 'settings.php';
include 'key-provider.php';
include 'check-ip.php';

if(checkIp()){
	$hash = generateKey();
	createTables($hash);
} else {
	echo 'error: IP-adress blocked'; 
}

function createTables($hash){
	global $servername, $username, $password, $databasename;

	$conn = new mysqli($servername, $username, $password, $databasename);
	if ($conn->connect_error) {
	    die("Error: Connection failed: " . $conn->connect_error);
	} 
	$sql = "CREATE TABLE IF NOT EXISTS hashes (id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,  hash VARCHAR(50) NOT NULL, reg_date TIMESTAMP)";

if ($conn->query($sql) === TRUE) {
    storeHash($hash, $conn);
} else {
    $conn->close();
    echo "Error creating tables";
}
}

function storeHash($hash = 'error', $conn){
    $sql = "INSERT INTO hashes (hash) VALUES ('".$hash."')";
   echo $hash;
if($conn->query($sql) === TRUE) {
} else { 
  echo 'error while storing hash';
}
}

?>
