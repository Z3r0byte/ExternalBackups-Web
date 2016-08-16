<?php
function generateKey(){
    $hash = bin2hex(mcrypt_create_iv(22, MCRYPT_DEV_URANDOM));
    return $hash;
}
?>