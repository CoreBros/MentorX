<?php
//////////////////////////////
// The Hosting Tool
// SQL Config
// By Jonny H
// Released under the GNU-GPL
//////////////////////////////

//Are we being called by the script?
if(THT != 1){die();}

//MAIN SQL CONFIG - Change values accordingly
$sql['host'] = '[[softdbhost]]'; #The MySQL Host, usually default - localhost
$sql['user'] = '[[softdbuser]]'; #The MySQL Username
$sql['pass'] = '[[softdbpass]]'; #The MySQL Password
$sql['db'] = '[[softdb]]'; #The MySQL DB, remember to have your username prefix
$sql['pre'] = '[[dbprefix]]'; #The MySQL Prefix, usually default unless otherwise

//LEAVE
$sql['install'] = true;
?>
