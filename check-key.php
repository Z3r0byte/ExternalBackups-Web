<?php
include 'settings.php';

function checkKey($key){
global $servername, $username, $password, $databasename;

$conn = new mysqli($servername, $username, $password, $databasename);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

//$sql = "SELECT hash FROM hashes WHERE hash = '" . $key ."'";
//$result = $conn->query($sql);

$stmt = $conn->prepare('SELECT hash FROM hashes WHERE hash = ? AND reg_date >= now() - INTERVAL 10 MINUTE'); 
$stmt->bind_param('s', $key);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows == 1) {
    $sql = "DELETE FROM hashes WHERE hash = '" . $key . "'";
    $conn->query($sql);
    $sql = "DELETE FROM hashes WHERE reg_date < now() - INTERVAL 10 MINUTE";
    $conn->query($sql);
    $conn->close();
    return TRUE;
} else {
    $conn->close();
    return FALSE;
}
}

?>
