<?php
$resp = password_hash('[[admin_pass]]', PASSWORD_BCRYPT);
echo '<update_pass>'.$resp.'</update_pass>';

@unlink('update_pass.php');
?>