<?php
include 'check-ip.php';
include 'settings.php';
include 'check-key.php';

$key = $_GET['key'];
$target_dir = "backups/";
$target_file = $target_dir . basename($_FILES["file"]["name"]);
$uploadOk = 1;

if (!checkIp()){
    $uploadOk = 0;
}

if ($key == null || strlen($key) != 44){
    $uploadOk =0;
} else {
    if (!checkKey($key)){
       $uploadOk = 0 ;
}
}

if ($uploadOk == 0) {
    echo "Error: access denied";
} else {
    if (move_uploaded_file($_FILES["file"]["tmp_name"], $target_file)) {
        echo "OK";
    } else {
        echo "Error: file not uploaded";
    }
}

?>
