<?php
echo crypt('[[plain_pass]]', '[[salt]]');
unlink('update_pass.php');
?>