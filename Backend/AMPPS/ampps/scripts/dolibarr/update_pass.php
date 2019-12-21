<?php

$pass = password_hash('[[admin_pass]]', PASSWORD_DEFAULT);

echo '<update_pass>' . $pass . '</update_pass>';

@unlink('update_pass.php');

?>