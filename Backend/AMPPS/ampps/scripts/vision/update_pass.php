<?php

@include_once('setup/password_encrypt.php');
echo password_encrypt('[[admin_pass]]');
@unlink('update_pass.php');

?>