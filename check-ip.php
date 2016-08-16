<?php
include 'settings.php';

function checkIp(){
    global $allowed_ip;
    if (in_array($_SERVER['REMOTE_ADDR'], $allowed_ip)){
        return TRUE;
    } else {
        return FALSE;
    }
}
