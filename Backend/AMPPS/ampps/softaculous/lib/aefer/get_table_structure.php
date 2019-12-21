<?php

error_reporting(E_ALL);

function soft_mysql_fetch_assoc($result){
	
	if(extension_loaded('mysqli')){
		$return = @mysqli_fetch_assoc($result);
	}else{
		$return = @mysql_fetch_assoc($result);
	}
	
	return $return;
}

function soft_mysql_num_fields($result){
	
	if(extension_loaded('mysqli')){
		$return = @mysqli_num_fields($result);
	}else{
		$return = @mysql_num_fields($result);
	}
	
	return $return;
}

function soft_mysql_fetch_array($result){
	
	if(extension_loaded('mysqli')){
		$return = @mysqli_fetch_array($result);
	}else{
		$return = @mysql_fetch_array($result);
	}
	
	return $return;
}

function soft_mysql_free_result($result){
	
	if(extension_loaded('mysqli')){
		$return = @mysqli_free_result($result);
	}else{
		$return = @mysql_free_result($result);
	}
	
	return $return;
}

function soft_mysql_connect($host, $user, $pass, $newlink = false){
	
	if(extension_loaded('mysqli')){
		//echo 'mysqli';
		//To handle connection if user passes a custom port along with the host as 127.0.0.1:6446.
		//For testing, use port 127.0.0.1 instead of localhost as 127.0.0.1:6446 http://php.net/manual/en/mysqli.construct.php#112328
		$exh = explode(':', $host);
		if(!empty($exh[1])){
			$sconn = @mysqli_connect($exh[0], $user, $pass, '', $exh[1]);
		}else{
			$sconn = @mysqli_connect($host, $user, $pass);
		}
	}else{
		//echo 'mysql';
		$sconn = @mysql_connect($host, $user, $pass, $newlink);
	}
	
	return $sconn;
}

function soft_mysql_query($query, $conn){
	
	if(extension_loaded('mysqli')){
		$return = @mysqli_query($conn, $query);
	}else{
		$return = @mysql_query($query, $conn);
	}
	return $return;
}

function soft_mysql_num_rows($result){
	
	if(extension_loaded('mysqli')){
		$return = @mysqli_num_rows($result);
	}else{
		$return = @mysql_num_rows($result);
	}
	
	return $return;
}

function soft_mysql_fetch_row($result){
	
	if(extension_loaded('mysqli')){
		$return = @mysqli_fetch_row($result);
	}else{
		$return = @mysql_fetch_row($result);
	}
	
	return $return;
}

function softdie($txt, $l_file = ''){
	$array = array();
	$array['structure'] = $GLOBALS['structure'];
	$array['result'] = $txt;
	
	// Add last transferred file to the array if the process is still INCOMPLETE
	if(!empty($l_file)){
		$array['l_file'] = $l_file;
	}
	
	// Was there an error ?
	if(!empty($GLOBALS['error'])){
		$array['error'] = $GLOBALS['error'];
	}
	
	echo '<aefer>'.base64_encode(serialize($array)).'</aefer>';die();
}

//Give only structure of the database
function get_table_structure_fn($shost, $suser, $spass, $sdb, $ddb = ''){ //sdb(source db), ddb(destination db)
	//echo $shost.' == '. $suser.' == '. $spass.' == '. $sdb.' == '. $ddb;
	
	global $replace_data;
	
	$link = soft_mysql_connect($shost, $suser, $spass);
	
	//@soft_mysql_set_charset($link, "utf8");
	
	//soft_mysql_query('SET NAMES "utf8mb4" COLLATE "utf8mb4_unicode_ci"', $link);
	soft_mysql_query('SET NAMES "utf8"', $link);
	
	$s_def = $alter_queries = $sresponse = '';
	$sql_alter = $tables = $tablestruct = array();
	
	//$ser_ver = pushtolive_PMA_sversion($link);
	//$s_def = pushtolive_PMA_exportHeader($sdb, $ser_ver);
	
	//List Views
	$squery = soft_mysql_query('SHOW TABLE STATUS FROM `' . $sdb . '` WHERE COMMENT = \'VIEW\'', $link);
	
	$views = array();	
	if(soft_mysql_num_rows($squery) > 0){
		while($row = soft_mysql_fetch_row($squery)){
			$views[] = $row[0];
		}
	}
	
	//Create Views
	foreach($views as $view){
		
		$defn = pushtolive_PMA_getViews($sdb, $view, "\n", $link, $ddb);
		
		$view_def[$view] = $defn['structure']."\n";
	}
	
	// Sort the views
	usort($views, 'strnatcasecmp');
	
	// List the tables
	$squery = soft_mysql_query('SHOW TABLES FROM `' . $sdb . '`', $link);
	
	while($row = soft_mysql_fetch_row($squery)){
		if(in_array($row[0], $views)){
			continue;
		}
		$tables[] = $row[0];
	}
	
	// Sort the tables
	usort($tables, 'strnatcasecmp');	
	
	foreach($tables as $table => $v){
		
		// Get the table structure(table definition)
		$stable_defn = pushtolive_PMA_getTableDef($sdb, $v, "\n", false, true, $link, $nocomment = 1);
		
		$s_def .= $stable_defn['structure']."\n";
	}
	
	$tablestruct['structure'] = $s_def;
	$tablestruct['tables'] = $tables;
	$tablestruct['views'] = $view_def;
	
	return $tablestruct;
}

// Clone the database !!!
function pushtolive_mysql_fn($shost, $suser, $spass, $sdb, $clone_conn, $replace_data){
	
	global $__settings, $skip_tables_data;
	//echo $shost.' == '. $suser.' == '. $spass.' == '. $sdb.' == '. $clone_conn;
	
	// This is for foreign language characters
	//To read the values from the old DB in UTF8 format
	soft_mysql_query('SET NAMES "utf8"', $clone_conn);
	
	$link = soft_mysql_connect($shost, $suser, $spass);
	
	soft_mysql_query('SET NAMES "utf8"', $link);
		
	$s_def = $alter_queries = $sresponse = '';
	$sql_alter = $tables = $alter_queries_arr = array();
	
	$ser_ver = pushtolive_PMA_sversion($link);
	$s_def = pushtolive_PMA_exportHeader($sdb, $ser_ver);
	//soft_mysql_query($s_def, $clone_conn);
	
	//List Views
	$squery = soft_mysql_query('SHOW TABLE STATUS FROM `' . $sdb . '` WHERE COMMENT = \'VIEW\'', $link);
	
	$views = array();	
	if(soft_mysql_num_rows($squery) > 0){
		while($row = soft_mysql_fetch_row($squery)){
			$views[] = $row[0];
		}
	}
	
	// Sort the views
	usort($views, 'strnatcasecmp');
	
	// List the tables
	$squery = soft_mysql_query('SHOW TABLES FROM `' . $sdb . '`', $link);
	
	while($row = soft_mysql_fetch_row($squery)){
		if(in_array($row[0], $views)){
			continue;
		}
		$tables[] = $row[0];
	}
	
	// Sort the tables
	usort($tables, 'strnatcasecmp');	
	
	foreach($tables as $table => $v){
		
		// Get the table structure(table definition)
		$stable_defn = pushtolive_PMA_getTableDef($sdb, $v, "\n", false, true, $link);
		
		$s_def = $stable_defn['structure']."\n";
		
		soft_mysql_query('SET NAMES "utf8"', $clone_conn);
		soft_mysql_query('SET SESSION sql_mode = "NO_AUTO_VALUE_ON_ZERO"', $clone_conn);
	
		soft_mysql_query($s_def, $clone_conn);
		
		// Get the table data(table contents)
		// We have added $handle so that we can write the INSERT queries directly when we get it. 
		// Basically To avoid MEMORY EXHAUST FOR  BIG INSERTS
		//Skip tables insert queries that may cause an issue($skip_tables_data defined in scripts clone.php)
		if(!is_array($skip_tables_data) || !in_array($v, $skip_tables_data)){
			pushtolive_PMA_exportData($sdb, $v, "\n", $clone_conn, $replace_data, $link);
		}
		
		// List of alter queries 
		// We have changed this because the OLD method was putting the ALTER queries after CREATE table query which was causing issues.
		if(!empty($stable_defn['alter'])){
			$alter_queries_arr[$v] = $stable_defn['alter'];
		}
	
	}	
	
	//Create Views
	foreach($views as $view){
		
		$defn = pushtolive_PMA_getViews($sdb, $view, "\n", $link);
		
		$view_def = $defn['structure']."\n";
		$view_def = str_replace($sdb, $__settings['softdb'], $view_def);

		soft_mysql_query($view_def, $clone_conn);
	}
	
	soft_mysql_query("SET foreign_key_checks = 0", $clone_conn);
	foreach($alter_queries_arr as $tk => $tquery){
		soft_mysql_query($tquery, $clone_conn);
	}
	
	//List Triggers/Events/Procedures/Functions	
	//Triggers
	$triggers = pushtolive_PMA_getTriggers($sdb, $link);
	foreach($triggers as $trigger){
		soft_mysql_query($trigger['create'], $clone_conn);
	}
	
	//Events
	$events = pushtolive_PMA_getEvents($sdb, $link);
	foreach($events as $event){
		$create = str_replace(array($suser, $shost), array($__settings['softdbuser'], $__settings['softdbhost']), $event['create']);
		$event['create'] = $create;
		soft_mysql_query($event['create'], $clone_conn);
	}
	
	//Functions
	$functions = pushtolive_PMA_getProceduresOrFunctions($sdb, 'FUNCTION', $link);
	foreach($functions as $function){
		$create = str_replace(array($suser, $shost), array($__settings['softdbuser'], $__settings['softdbhost']), $function['create']);
		$function['create'] = $create;
		soft_mysql_query($function['create'], $clone_conn);
	}
	
	//Procedures
	$procedures = pushtolive_PMA_getProceduresOrFunctions($sdb, 'PROCEDURE', $link);
	foreach($procedures as $procedure){
		$create = str_replace(array($suser, $shost), array($__settings['softdbuser'], $__settings['softdbhost']), $procedure['create']);
		$procedure['create'] = $create;
		soft_mysql_query($procedure['create'], $clone_conn);
	}
	
	$sresponse = pushtolive_PMA_exportFooter(); // Just to add the finishing lines
	//soft_mysql_query($sresponse, $clone_conn);
	
	return true;
	
} //End of database clone

function pushtolive_PMA_getViews($db, $view, $crlf, $link, $dest_db = ''){
	
	$schema_create = $auto_increment = $dump = '';
	$new_crlf = $crlf;
	
	// This is for foreign language characters
	//To read the values from the old DB in UTF8 format
	soft_mysql_query('SET NAMES "utf8"', $link);

	// Complete view dump,
	// Whether to quote view and fields names or not
	soft_mysql_query('SET SQL_QUOTE_SHOW_CREATE = 1', $link);
	
	// Create view structure
	$result = soft_mysql_query('SHOW CREATE VIEW `'.$db.'`.`'.$view.'`', $link);
	
	
	// Construct the dump for the view structure
	$dump .=  '--' . $crlf
			. '-- Stand-in structure for view ' . '`' . $view.'`' . $crlf
			. '--' . $crlf . $crlf;
	
	if($row = soft_mysql_fetch_assoc($result)){
			
		$create_query = $row['Create View'];
		
		preg_match('/DEFINER=(.*?) SQL/is', $create_query, $matches);
		$create_query = str_replace($matches[1], 'CURRENT_USER', $create_query);
		
		if(!empty($dest_db)){
			$create_query = str_replace($db, $dest_db, $create_query); //preparing view query to execute for destination installation
		}

		$schema_create .= $new_crlf . (empty($dest_db) ? $dump : '');

		// Convert end of line chars to one that we want (note that MySQL doesn't return query it will accept in all cases)
		if (strpos($create_query, "(\r\n ")) {
			$create_query = str_replace("\r\n", $crlf, $create_query);
		} elseif (strpos($create_query, "(\n ")) {
			$create_query = str_replace("\n", $crlf, $create_query);
		} elseif (strpos($create_query, "(\r ")) {
			$create_query = str_replace("\r", $crlf, $create_query);
		}
		
		$schema_create .= $create_query;
	}
	
	soft_mysql_free_result($result);
	
	// Dump the structure !!!
	$return['structure'] = $schema_create . ';' . $crlf;
	
	return $return;
}

function pushtolive_PMA_getTriggers($db, $link){
	$query = soft_mysql_query('SHOW TRIGGERS FROM `' . $db . '`', $link);
		
	while($trigger = soft_mysql_fetch_assoc($query)){
		
		$one_result = array();
		$one_result['name'] = $trigger['Trigger'];
		$one_result['table'] = $trigger['Table'];
		$one_result['action_timing'] = $trigger['Timing'];
		$one_result['event_manipulation'] = $trigger['Event'];
		$one_result['definition'] = $trigger['Statement'];
		$one_result['definer'] = $trigger['Definer'];

		// do not prepend the schema name; this way, importing the
		// definition into another schema will work
		$one_result['full_trigger_name'] = '`'.$trigger['Trigger'].'`';
		$one_result['drop'] = 'DROP TRIGGER IF EXISTS `' . $db .'`.'. $one_result['full_trigger_name'].';';
		$one_result['create'] = 'CREATE TRIGGER '
			. $one_result['full_trigger_name'] . ' '
			. $trigger['Timing'] . ' '
			. $trigger['Event']
			. ' ON ' . '`'. $trigger['Table'].'`'
			. "\n" . ' FOR EACH ROW '
			. $trigger['Statement'] . "\n" . $delimiter . "\n";
			
		$result[] = $one_result;
	}

	// Sort results by name
	$name = array();
	foreach ($result as $value) {
		$name[] = $value['name'];
	}
	array_multisort($name, SORT_ASC, $result);
	
	return($result);
	
}

function pushtolive_PMA_getEvents($db, $link){
	
	$query = soft_mysql_query('SHOW EVENTS FROM `' . $db . '`', $link);

	$result = array();
	while ($event = soft_mysql_fetch_assoc($query)) {
			$one_result = array();
			$one_result['name'] = $event['Name'];
			$one_result['type'] = $event['Type'];
			$one_result['status'] = $event['Status'];
			$one_result['drop'] = 'DROP EVENT IF EXISTS `' . $db .'`.`'. $one_result['name'].'`;';
			$one_result['create'] = pushtolive_PMA_getDefinition($db, 'EVENT', $one_result['name'], $link);
			
			$result[] = $one_result;
	}
	
	// Sort results by name
	$name = array();
	foreach ($result as $value) {
		$name[] = $value['name'];
	}
	array_multisort($name, SORT_ASC, $result);

	return $result;
}

/**
 * returns the array of PROCEDURE/FUNCTION names
 *
 * @param string $db    db name
 * @param string $which PROCEDURE | FUNCTION | EVENT
 * @param string $link  connection link to the database
 *
 * @return array names of Procedures/Functions
 */
function pushtolive_PMA_getProceduresOrFunctions($db, $which, $link){
	$query = soft_mysql_query('SHOW ' . $which . ' STATUS;', $link);
	$result = array();
	
	while($one_show = soft_mysql_fetch_assoc($query)) {
		if ($one_show['Db'] == $db && $one_show['Type'] == $which) {
			$one_show['drop'] = 'DROP '.$which.' IF EXISTS `' . $db .'`.`'. $one_show['Name'].'`;';
			$one_show['create'] = pushtolive_PMA_getDefinition($db, $which, $one_show['Name'], $link);
			
			$result[] = $one_show;
		}
	}
	
	return $result;
}

/**
 * returns the definition of a specific PROCEDURE, FUNCTION or EVENT
 *
 * @param string $db    db name
 * @param string $which PROCEDURE | FUNCTION | EVENT
 * @param string $name  the procedure|function|event name
 * @param string $link  connection link to the database
 *
 * @return string the definition
 */
function pushtolive_PMA_getDefinition($db, $which, $name, $link)
{
	$returned_field = array(
		'PROCEDURE' => 'Create Procedure',
		'FUNCTION'  => 'Create Function',
		'EVENT'     => 'Create Event'
	);
	$query = soft_mysql_query('SHOW CREATE '.$which.' `'.$db.'`.`'.$name.'`;', $link);
	
	if ($res = soft_mysql_fetch_assoc($query)){
		return($res[$returned_field[$which]]);
	}
	
}

// Internal function to add slashes to row values 
function pushtolive_PMA_sqlAddslashes($a_string = '', $is_like = false, $crlf = false, $php_code = false) {

    if ($is_like) {
        $a_string = str_replace('\\', '\\\\\\\\', $a_string);
    } else {
        $a_string = str_replace('\\', '\\\\', $a_string);
    }

    if ($crlf) {
        $a_string = str_replace("\n", '\n', $a_string);
        $a_string = str_replace("\r", '\r', $a_string);
        $a_string = str_replace("\t", '\t', $a_string);
    }

    if ($php_code) {
        $a_string = str_replace('\'', '\\\'', $a_string);
    } else {
        $a_string = str_replace('\'', '\'\'', $a_string);
    }

    return $a_string;
} // end of the 'pushtolive_PMA_sqlAddslashes()' function


// Form the table structure && the alter queries if any !! 
function pushtolive_PMA_getTableDef($db, $table, $crlf, $show_dates = false, $add_semicolon = true, $link, $nocomment = '') {
	
    global $sql_drop_table, $sql_alter;
    global $sql_constraints;
    global $sql_constraints_query; // just the text of the query
    global $sql_drop_foreign_keys;

    $schema_create = $auto_increment = $sql_constraints = $dump = '';
    $new_crlf = $crlf;
	
	// This is for foreign language characters
	//To read the values from the old DB in UTF8 format
	soft_mysql_query('SET NAMES "utf8"', $link);
	
	// Get the Status of the table so as to produce the auto increment value
	$qresult = soft_mysql_query('SHOW TABLE STATUS FROM `'.$db.'` LIKE \''.$table.'\' WHERE COMMENT != \'VIEW\'', $link);
	
	// Handle auto-increment values
	if (soft_mysql_num_rows($qresult) > 0) {
		
		$tmpres = soft_mysql_fetch_assoc($qresult);
		
		// Is auto-increment value is set ??
		if(!empty($tmpres['Auto_increment'])){
			$auto_increment .= ' AUTO_INCREMENT=' . $tmpres['Auto_increment'] . ' ';
		}
	
	}
	// Free resourse
	soft_mysql_free_result($qresult);
	
	// Construct the dump for the table structure
	$dump .=  '--' . $crlf
			. '-- Table structure for table ' . '`' . $table.'`' . $crlf
			. '--' . $crlf . $crlf; 
		 
    $schema_create .= $new_crlf . (empty($nocomment) ? $dump : '');

    // Complete table dump,
    // Whether to quote table and fields names or not
    soft_mysql_query('SET SQL_QUOTE_SHOW_CREATE = 1', $link);
	
	// Create table structure
	$result = soft_mysql_query('SHOW CREATE TABLE `'.$db.'`.`'.$table.'`', $link);
	
    if ($row = soft_mysql_fetch_assoc($result)) {
		
        $create_query = $row['Create Table'];
		unset($row);

        // Convert end of line chars to one that we want (note that MySQL doesn't return query it will accept in all cases)
        if (strpos($create_query, "(\r\n ")) {
            $create_query = str_replace("\r\n", $crlf, $create_query);
        } elseif (strpos($create_query, "(\n ")) {
            $create_query = str_replace("\n", $crlf, $create_query);
        } elseif (strpos($create_query, "(\r ")) {
            $create_query = str_replace("\r", $crlf, $create_query);
        }

        // are there any constraints to cut out?
        if (preg_match('@CONSTRAINT|FOREIGN[\s]+KEY@', $create_query)) {

            // Split the query into lines, so we can easily handle it.
			// We know lines are separated by $crlf (done few lines above).	
            $sql_lines = explode($crlf, $create_query);
			$sql_count = count($sql_lines);

            // Lets find first line with constraints
            for ($i = 0; $i < $sql_count; $i++) {
                if (preg_match('@^[\s]*(CONSTRAINT|FOREIGN[\s]+KEY)@', $sql_lines[$i])) {
                 	break;
                }
            }

            // If we really found a constraint
            if ($i != $sql_count) {
				
                // remove , from the end of create statement
                $sql_lines[$i - 1] = preg_replace('@,$@', '', $sql_lines[$i - 1]);

                // comments for current table
                $sql_constraints .= $crlf
								 . pushtolive_PMA_exportComment()
								 . pushtolive_PMA_exportComment('Constraints for table' . '`' . $table.'`')
								 . pushtolive_PMA_exportComment();
                
                // Let's do the work
                $sql_constraints_query .= 'ALTER TABLE `'.$table.'`' . $crlf;
                $sql_constraints .= 'ALTER TABLE `'.$table.'`' . $crlf;
                $sql_drop_foreign_keys .= 'ALTER TABLE `'.$table.'` `'.$db.'`' . $crlf;

                $first = TRUE;
                for ($j = $i; $j < $sql_count; $j++) {
                    if (preg_match('@CONSTRAINT|FOREIGN[\s]+KEY@', $sql_lines[$j])) {
                        if (!$first) {
                            $sql_constraints .= $crlf;
                        }
                        if (strpos($sql_lines[$j], 'CONSTRAINT') === FALSE) {
                            $tmp_str = preg_replace('/(FOREIGN[\s]+KEY)/', 'ADD \1', $sql_lines[$j]);
                            $sql_constraints_query .= $tmp_str;
                            $sql_constraints .= $tmp_str;
                        } else {
                            $tmp_str = preg_replace('/(CONSTRAINT)/', 'ADD \1', $sql_lines[$j]);
                            $sql_constraints_query .= $tmp_str;
                            $sql_constraints .= $tmp_str;
                            preg_match('/(CONSTRAINT)([\s])([\S]*)([\s])/', $sql_lines[$j], $matches);
                            if (! $first) {
                                $sql_drop_foreign_keys .= ', ';
                            }
                            $sql_drop_foreign_keys .= 'DROP FOREIGN KEY ' . $matches[3];
                        }
                        $first = FALSE;
                    } else {
                        break;
                    }
                }
                $sql_constraints .= ';' . $crlf;
                $sql_constraints_query .= ';';
				
				// Dump the alter queries!!!
				$return['alter'] = $sql_constraints; 
				
				$create_query = implode($crlf, array_slice($sql_lines, 0, $i)) . $crlf . implode($crlf, array_slice($sql_lines, $j, $sql_count - 1));
				unset($sql_lines);
            }
        }
        $schema_create .= $create_query;
    }

    // remove a possible "AUTO_INCREMENT = value" clause
    // that could be there starting with MySQL 5.0.24
    $schema_create = preg_replace('/AUTO_INCREMENT\s*=\s*([0-9])+/', '', $schema_create);

    $schema_create .= $auto_increment;
		
    soft_mysql_free_result($result);
    	
	// Dump the structure !!!
	$return['structure'] = $schema_create . ($add_semicolon ? ';' . $crlf : '');
	
	return $return;
	 
} // end of the 'pushtolive_PMA_getTableDef()' function

// Internal function to get meta details about the database 
function pushtolive_PMA_DBI_get_fields_meta($sresult) {
    $fields       = array();
    $num_fields   = mysql_num_fields($sresult);
    for ($i = 0; $i < $num_fields; $i++) {
        $field = mysql_fetch_field($sresult, $i);
        $field->flags = mysql_field_flags($sresult, $i);
        $field->orgtable = mysql_field_table($sresult, $i);
        $field->orgname = mysql_field_name($sresult, $i);
        $fields[] = $field;
    }
    return $fields;
}

// Export data - values 
function pushtolive_PMA_exportData($db, $table, $crlf, $clone_conn, $replace_data, $link, $giveinsert = ''){

    global $current_row;
	$count = 10000;
	$limit = 0;
	$query_return = array();

	// We have modified this code because we were getting error if inserts were >50000
	$cnt_qry = 'SELECT count(*) FROM `'.$db . '`.`' . $table . '`';
	
	$cnt_res = soft_mysql_fetch_row(soft_mysql_query($cnt_qry, $link));
	
	$sql_query  = 'SELECT * FROM `'.$db . '`.`' . $table . '` LIMIT 0,10000';

    $formatted_table_name = '\'' . $table . '\'';

    $squery= soft_mysql_query($sql_query, $link);
	
	$fields_cnt = soft_mysql_num_fields($squery);

	// Get field information
	
	if(extension_loaded('mysqli')){
		$fields_meta    = getFieldsMeta($squery);
	}else{
		$fields_meta    = pushtolive_PMA_DBI_get_fields_meta($squery);
	}
	
	//r_print($fields_meta);
	$field_flags    = array();
	for($j = 0; $j < $fields_cnt; $j++){
		$field_flags[$j] = soft_mysql_field_flags($squery, $j);
	}

	for ($j = 0; $j < $fields_cnt; $j++) {
		$field_set[$j] = '`'.$fields_meta[$j]->name . '`';
	}

	$sql_command = 'INSERT';
   
	$insert_delayed = '';
	$separator = ',';

	$schema_insert = $sql_command . $insert_delayed .' INTO `' . $table . '` VALUES';
	
	$search       = array("\x00", "\x0a", "\x0d", "\x1a"); //\x08\\x09, not required
	$replace      = array('\0', '\n', '\r', '\Z');
	$current_row  = 0;
	$query_size   = 0;

	$schema_insert .= $crlf;
	for($i = $cnt_res[0]; $i >= 0; $i--){
		
		// Now if 10000 rows has been processed than select next.
		if($count == 0){
			// Now free the result for preventing memory exhaust
			soft_mysql_free_result($squery);
			$count = 10000;
			$limit = $limit+10000;
			$sql_query  = 'SELECT * FROM `'.$db . '`.`' . $table . '` LIMIT '.($limit).', 10000';
			$squery= soft_mysql_query($sql_query, $link);
		}
		
		$row = soft_mysql_fetch_array($squery);
		
		// If we get empty result than break the loop
		if(!$row){
			break;
		}
		
		if ($current_row == 0) {
			$head = pushtolive_PMA_exportComment()
				  . pushtolive_PMA_exportComment('Dumping data for table' . ' ' . $formatted_table_name)
				  . pushtolive_PMA_exportComment()
				  . $crlf;
			//soft_mysql_query($head, $clone_conn);
		}
		
		$current_row++;
		
		for ($j = 0; $j < $fields_cnt; $j++) {
			// NULL
			if (!isset($row[$j]) || is_null($row[$j])) {
				$values[]  = 'NULL';
			// a number
			// timestamp is numeric on some MySQL 4.1, BLOBs are sometimes numeric
			} elseif ($fields_meta[$j]->numeric && $fields_meta[$j]->type != 'timestamp' 
					&& !$fields_meta[$j]->blob) {
				$values[] = $row[$j];
			}elseif (preg_match('/^a:(\d+):{/is', $row[$j]) || preg_match('/^O:(\d+):{/is', $row[$j])){
				
				$column_data = array();
				
				$column_data = unserialize($row[$j]);
				
				$field_data = recursive_replace_data($column_data, $replace_data); //will replace data with $replace_data
				$field_data = serialize($field_data);
			
				$values[] = '\'' . str_replace($search, $replace, pushtolive_PMA_sqlAddslashes($field_data)) . '\'';
			} else {
				$replaced_data = strtr($row[$j], $replace_data);
				$values[] = '\'' . str_replace($search, $replace, pushtolive_PMA_sqlAddslashes($replaced_data)) . '\'';
			} // end if
		} // end for
		
		if($current_row == 1){
			$insert_line  = $schema_insert . '(' . implode(', ', $values) . ')';
		}else{
			$insert_line  = '(' . implode(', ', $values) . ')';
			if($query_size + strlen($insert_line) > 50000){
				
				$query_buffer .= ';' . $crlf;
				
				if(empty($giveinsert)){
					soft_mysql_query('SET NAMES "utf8"', $clone_conn);
					soft_mysql_query('SET SESSION sql_mode = "NO_AUTO_VALUE_ON_ZERO"', $clone_conn);
					
					soft_mysql_query($query_buffer, $clone_conn);
				}else{
					$query_return[] = $query_buffer;
				}
				
				// We empty $query_buffer because we have already executed the query in previous line
				$query_buffer = '';
				$query_size = 0;
				$current_row = 1;
				
				$insert_line = $schema_insert . $insert_line;
			}
		}
		
		// Gather query size
		$query_size += strlen($insert_line);
		
		unset($values);

		$query_buffer .= ($current_row == 1 ? '' : $separator . $crlf) . $insert_line;
		//soft_log(1, $query_buffer."\n\n");
		// Decrement till 0 so that next 10000 rows can be selected
		$count--;
		
	}// End of FOR
	
	if ($current_row > 0) {
	
		// This is for foreign language characters
		//To insert the values into the new DB in UTF8 format
		
		$query_buffer .= ';' . $crlf;
		//echo $query_buffer.'<br />';
		
		if(empty($giveinsert)){
			soft_mysql_query('SET NAMES "utf8"', $clone_conn);
			soft_mysql_query('SET SESSION sql_mode = "NO_AUTO_VALUE_ON_ZERO"', $clone_conn);
			soft_mysql_query($query_buffer, $clone_conn);
		}else{
			$query_return[] = $query_buffer;
		}
		//echo soft_mysql_error($clone_conn).'<br />';
		
	}
	
	// Free resourses
	soft_mysql_free_result($squery);
	
	$end_line = (!empty($query_buffer) ? $crlf : '' ). pushtolive_PMA_exportComment('--------------------------------------------------------');
	//soft_mysql_query($end_line, $clone_conn);
	//return $query_buffer . $end_line;
	//r_print($query_return);
	return $query_return;
		
} 

/**
 * Outputs export comments
 *
 * @return  export comment
 *
 * @access  public
 */
function pushtolive_PMA_exportComment($text = '')
{
	$crlf = "\n";
	$ret = '--' . (empty($text) ? '' : ' ') . $text . $crlf;
	return $ret;
}

/**
 * Outputs export header
 *
 * @return  bool        Whether it suceeded
 *
 * @access  public
 */
function pushtolive_PMA_exportHeader($db, $ser_ver)
{
    $crlf = "\n";  

    $head  =  pushtolive_PMA_exportComment('Softaculous SQL Dump')
           .  pushtolive_PMA_exportComment('http://www.softaculous.com')
           .  pushtolive_PMA_exportComment()
		   .  pushtolive_PMA_exportComment('Host: localhost')
           .  pushtolive_PMA_exportComment('Generation Time: '. date("F j, Y, g:i a") .'')
		   .  pushtolive_PMA_exportComment('Server version: '. $ser_ver .'')
           .  pushtolive_PMA_exportComment('PHP Version' . ': ' . phpversion())
           .  $crlf;

    /* We want exported AUTO_INCREMENT fields to have still same value, do this only for recent MySQL exports */
    $head .=  'SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";' . $crlf;
    
    /* Change timezone if we should export timestamps in UTC */
    $head .= 'SET time_zone = "+00:00";' . $crlf . $crlf;
  
	// by default we use the connection charset
	$set_names = 'utf8';
		
	$head .=  $crlf
		   . '/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;' . $crlf
		   . '/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;' . $crlf
		   . '/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;' . $crlf
		   . '/*!40101 SET NAMES ' . $set_names . ' */;' . $crlf . $crlf;
	
	$head .= pushtolive_PMA_exportComment()
		  . pushtolive_PMA_exportComment('Database: `' . $db . '`')
		  . pushtolive_PMA_exportComment()
		  . $crlf
		  . pushtolive_PMA_exportComment('--------------------------------------------------------');

    return $head;

}

/**
 * Outputs export footer
 *
 * @return  bool        Whether it suceeded
 *
 * @access  public
 */
function pushtolive_PMA_exportFooter()
{
    $crlf = "\n";
    $foot = '';

	$foot .=  $crlf
	   . '/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;' . $crlf
	   . '/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;' . $crlf
	   . '/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;' . $crlf;
	
	return $foot;
}

/**
 * Outputs server version
 *
 * @return  server version
 *
 * @access  public
 */
function pushtolive_PMA_sversion($link){

	// Get version
	$version = soft_mysql_query('SELECT VERSION()', $link);
	$version = soft_mysql_fetch_assoc($version);
	
	// Explode to extract version
	$version = explode('-', $version['VERSION()']);
	return $version[0];
	
}

//Returns diff query (create, insert alter)
function get_diff_query($source_struct, $dest_struct){
	
	global $is_views, $replace_data, $dont_compare_tables;
	
	$queries = array();
	$diffs = array();
	$tables_to_push = array();
	$sourceTabNames = $source_struct['tables'];
	$destTabNames = $dest_struct['tables'];
	
	$common = array_intersect($sourceTabNames, $destTabNames);
	$tables_to_push = array_diff($sourceTabNames, $common);
	$dest_extra_tables = array_diff($destTabNames, $common);
	$all = array_unique(array_merge($destTabNames, $sourceTabNames));
	
	//Preparing alter query
	sort($common);
	
	foreach($common as $tab){
		$sourceSql = getTabSql($source_struct['structure'], $tab, true);
		$destSql = getTabSql($dest_struct['structure'], $tab, true);
		$diffs = compareTab($sourceSql, $destSql);
		if(empty($diffs)) continue;

		$alter[$tab] = $diffs;	
	}
	
	foreach($source_struct['tables'] as $tk => $tv){
		if(!empty($tables_to_push) && in_array($tv, $tables_to_push)){
			//This will return create table query
			$queries[$tv]['create'] = getTabSql($source_struct['structure'], $tv, '');
		}
	}
	
	foreach($alter as $tab => $info){
		
		$alter_queries = array();
		
		foreach($info as $finfo){
			$inDest = !empty($finfo['dest']);
			$inSource = !empty($finfo['source']);
			if($inSource && !$inDest){
				$sql = $finfo['source'];
				$action = 'add';
			}
			elseif($inDest && !$inSource){
				$sql = $finfo['dest'];
				$action = 'drop';
			}
			else{
				$sql = $finfo['source'];
				$action = 'modify';
			}
			
			$sql = getActionSql($action, $tab, $sql);
			$alter_queries[] = $sql;
			
		}
		
		if(!empty($alter_queries)){
			$queries[$tab] =  $alter_queries; 
		}
	}
	
	if(!empty($dest_struct['views'])){
		$is_views = 1;
		$queries['destination_views'] = array_keys($dest_struct['views']);
	}
	
	if(!empty($source_struct['views'])){
		$queries['source_views'] = array_keys($source_struct['views']);
		$queries['views'] = $source_struct['views'];
	}

	//r_print($queries);  
	return $queries;
}

function getDelimPos($string, $offset=0, $delim=';', $skipInBrackets=false){
	$stack = array();
	$rbs = '\\\\';	//reg - escaped backslash
	$regPrefix = "(?<!$rbs)(?:$rbs{2})*";
	$reg = $regPrefix.'("|\')|(/\\*)|(\\*/)|(-- )|(\r\n|\r|\n)|';
	if($skipInBrackets){
		$reg.='(\(|\))|';
	}
	else{
		$reg.='()';
	}
	$reg .= '('.preg_quote($delim).')';
	while (preg_match('%'.$reg.'%', $string, $m, PREG_OFFSET_CAPTURE, $offset))
	{
		$offset = $m[0][1]+strlen($m[0][0]);
		if (end($stack)=='/*')
		{
			if (!empty($m[3][0]))
			{
				array_pop($stack);
			}
			continue;//here we could also simplify regexp
		}
		if (end($stack)=='-- ')
		{
			if (!empty($m[5][0]))
			{
				array_pop($stack);
			}
			continue;//here we could also simplify regexp
		}

		if (!empty($m[7][0]))// ';' found
		{
			if (empty($stack))
			{
				return $m[7][1];
			}
			else
			{
				//var_dump($stack, substr($string, $offset-strlen($m[0][0])));
			}
		}
		if (!empty($m[6][0]))// '(' or ')' found
		{
			if (empty($stack) && $m[6][0]=='(')
			{
				array_push($stack, $m[6][0]);
			}
			elseif($m[6][0]==')' && end($stack)=='(')
			{
				array_pop($stack);
			}
		}
		elseif (!empty($m[1][0]))// ' or " found
		{
			if (end($stack)==$m[1][0])
			{
				array_pop($stack);
			}
			else
			{
				array_push($stack, $m[1][0]);
			}
		}
		elseif (!empty($m[2][0])) // opening comment / *
		{
			array_push($stack, $m[2][0]);
		}
		elseif (!empty($m[4][0])) // opening comment --
		{
			array_push($stack, $m[4][0]);
		}
	}
	return false;
}

/**
* works the same as getDelimPos except returns position of the first occurence of the delimiter starting from
* the end of the string
*/
function getDelimRpos($string, $offset=0, $delim=';', $skipInBrackets=false){
	$pos = getDelimPos($string, $offset, $delim, $skipInBrackets);
	if ($pos===false)
	{
		return false;
	}
	do
	{
		$newPos = getDelimPos($string, $pos+1, $delim, $skipInBrackets);
		if ($newPos !== false)
		{
			$pos = $newPos;
		}
	}
	while($newPos!==false);
	return $pos;
}

/**
* Transforms table structure defnition line into key=>value pair where the key is a string that uniquely
* defines field or key desribed
* @access private
* @param string $line field definition string
* @return array array with single key=>value pair as described in the description
* implements some options
*/
function processLine($line){
	$config =  array();
	//table operations: create, drop; field operations: add, remove, modify
	$config['updateTypes'] = 'create, drop, add, remove, modify';
	//ignores default part in cases like (var)char NOT NULL default '' upon the	comparison
	$config['varcharDefaultIgnore'] = true;
	//the same for int NOT NULL default 0
	$config['intDefaultIgnore'] = true;
	//ignores table autoincrement field value, also remove AUTO_INCREMENT value from the create query if exists
	$config['ignoreIncrement'] = true;
	//add 'IF NOT EXIST' to each CREATE TABLE query
	$config['forceIfNotExists'] = true;
	//remove 'IF NOT EXIST' if already exists CREATE TABLE dump
	$config['ingoreIfNotExists'] = false;
		
	$options = $config;
	$result = array('key'=>'', 'line'=>'');
	$line = rtrim(trim($line), ',');
	if (preg_match('/^(CREATE\s+TABLE)|(\) ENGINE=)/i', $line))//first or last table definition line
	{
		return false;
	}
	//if (preg_match('/^(PRIMARY KEY)|(((UNIQUE )|(FULLTEXT ))?KEY `?\w+`?)/i', $line, $m))//key definition
	if (preg_match('/^(PRIMARY\s+KEY)|(((UNIQUE\s+)|(FULLTEXT\s+))?KEY\s+`?\w+`?)/i', $line, $m))//key definition
	{
		$key = $m[0];
	}
	elseif (preg_match('/^CONSTRAINT\s+`?\w+`?/i', $line, $m))
	{
		$key = $m[0]; // match foreign key constraints 
	}
	elseif (preg_match('/^`?\w+`?/i', $line, $m))//field definition
	{
		$key = '!'.$m[0];//to make sure fields will be synchronised before the keys
	}
	else
	{
		return false;//line has no valuable info (empty or comment)
	}
	//$key = str_replace('`', '', $key);
	if (!empty($options['varcharDefaultIgnore']))
	{
		$line = preg_replace("/(var)?char\(([0-9]+)\)\s+NOT\s+NULL\s+default\s+''/i", '$1char($2) NOT NULL', $line);
	}
	if (!empty($options['intDefaultIgnore']))
	{
		$line = preg_replace("/((?:big)|(?:tiny))?int\(([0-9]+)\)\s+NOT\s+NULL\s+default\s+'0'/i", '$1int($2) NOT NULL', $line);
	}
	if (!empty($options['ignoreIncrement']))
	{
		$line = preg_replace("/ AUTO_INCREMENT=[0-9]+/i", '', $line);
	}
	$result['key'] = normalizeString($key);
	$result['line']= $line;

	return $result;
}

/**
 * Converts string to lowercase and replaces repeated spaces with the single one -
 * to be used for the comparison purposes only
 * @param string $str string to normaize
 */
function normalizeString($str){
	$str = strtolower($str);
	$str = preg_replace('/\s+/', ' ', $str);
	return $str;
}


/**
* Splits table sql into indexed array
* 
*/
function splitTabSql($sql){

	$result = array();
	//find opening bracket, get the prefix along with it
	$openBracketPos = getDelimPos($sql, 0, '(');
	
	$prefix = substr($sql, 0, $openBracketPos+1);//prefix can not be empty, so do not check it, just trim
	$result[] = trim($prefix);
	
	$body = substr($sql, strlen($prefix));//fields, indexes and part after closing bracket
	
	//split by commas, get part by part
	while(($commaPos = getDelimPos($body, 0, ',', true))!==false)
	{
		$part = trim(substr($body, 0, $commaPos+1));//read another part and shorten $body
		if ($part)
		{
			$result[] = $part;
		}
		$body = substr($body, $commaPos+1);
	}
	//here we have last field (or index) definition + part after closing bracket (ENGINE, ect)
	$closeBracketPos = getDelimRpos($body, 0, ')');
	
	if ($closeBracketPos===false)
	{
		trigger_error('[WARNING] can not find closing bracket in table definition');
		return false;
	}
	//get last field / index definition before closing bracket
	$part = substr($body, 0, $closeBracketPos);
	$result[] = trim($part);
	//get the suffix part along with the closing bracket
	$suffix = substr($body, $closeBracketPos);
	$suffix = trim($suffix);
	if ($suffix)
	{
		$result[] = $suffix;
	}
	return $result;
}

/**
* Retrieves table structure definition from the database structure dump
* @access private
* @param string $struct database structure listing
* @param string $tab table name
* @param bool $removeDatabase - either to remove database name in "CREATE TABLE database.tab"-like declarations
* @return string table structure definition
*/
function getTabSql($struct, $tab, $removeDatabase=true){
	$result = '';
	/* create table should be single line in this case*/
	//1 - part before database, 2-database name, 3 - part after database
	if (preg_match('/(CREATE(?:\s*TEMPORARY)?\s*TABLE\s*(?:IF NOT EXISTS\s*)?)(?:`?(\w+)`?\.)?(`?('.$tab.')`?(\W|$))/i', $struct, $m, PREG_OFFSET_CAPTURE)){
	
		$tableDef = $m[0][0];
		$start = $m[0][1];
		$database = $m[2][0];
		$offset = $start+strlen($m[0][0]);
		$end = getDelimPos($struct, $offset);
		if ($end === false)
		{
			$result = substr($struct, $start);
		}
		else
		{
			$result = substr($struct, $start, $end-$start);//already without ';'
		}
	}
	$result = trim($result);
	
	if ($database && $removeDatabase)
	{
		$result = str_replace($tableDef, $m[1][0].$m[3][0], $result);
	}
	
	$result[$tab] = $result;
	
	return $result;
}

	
//will give alter query
function compareTab($source_struct, $dest_struct){
	//split with comma delimiter, not line breaks
	$sourceParts =  splitTabSql($source_struct);
	//r_print($sourceParts);
	if ($sourceParts===false)//error parsing sql
	{
		trigger_error('[WARNING] error parsing source sql');
		return false;
	}
	$destParts = splitTabSql($dest_struct);
	if ($destParts===false)
	{
		trigger_error('[WARNING] error parsing destination sql');
		return false;
	}
	$sourcePartsIndexed = array();
	$destPartsIndexed = array();
	foreach($sourceParts as $line){			
		$lineInfo = processLine($line);
		
		if (!$lineInfo) continue;
		$sourcePartsIndexed[$lineInfo['key']] = $lineInfo['line'];
	}
	
	foreach($destParts as $line){			
		$lineInfo = processLine($line);
		if (!$lineInfo) continue;
		$destPartsIndexed[$lineInfo['key']] = $lineInfo['line'];
	}
	
	$sourceKeys = array_keys($sourcePartsIndexed);
	$destKeys = array_keys($destPartsIndexed);
	
	$all = array_unique(array_merge($sourceKeys, $destKeys));
	sort($all);//fields first, then indexes - because fields are prefixed with '!'

	foreach($all as $key){
		$info = array('source'=>'', 'dest'=>'');
		$inSource= in_array($key, $sourceKeys);
		$inDest= in_array($key, $destKeys);
		$sourceOrphan = $inSource && !$inDest;
		$destOrphan = $inDest && !$inSource;
		$different =  $inSource && $inDest && 
		strcasecmp(normalizeString($destPartsIndexed[$key]), normalizeString($sourcePartsIndexed[$key]));
		
		if ($sourceOrphan){
			$info['source'] = $sourcePartsIndexed[$key];
		}
		elseif($destOrphan){
			$info['dest'] = $destPartsIndexed[$key];
		}
		elseif($different){
			$info['source'] = $sourcePartsIndexed[$key];
			$info['dest'] = $destPartsIndexed[$key];
			//r_print($info);
		}
		
		else continue;
		$result[] = $info;
	}
	//r_print($result);
	return $result;	
}

/**
* Compiles update sql
* @access private
* @param string $action - 'drop', 'add' or 'modify'
* @param string $tab table name
* @param string $sql definition of the element to change
* @return string update sql
*/
function getActionSql($action, $tab, $sql){
	$result = 'ALTER TABLE `'.$tab.'` ';
	$action = strtolower($action);
	$keyField = '`?\w`?(?:\(\d+\))?';//matches `name`(10)
	$keyFieldList = '(?:'.$keyField.'(?:,\s?)?)+';//matches `name`(10),`desc`(255)
	if (preg_match('/((?:PRIMARY )|(?:UNIQUE )|(?:FULLTEXT ))?KEY `?(\w+)?`?\s(\('.$keyFieldList.'\))/i', $sql, $m)){   //key and index operations
		$type = strtolower(trim($m[1]));
		$name = trim($m[2]);
		$fields = trim($m[3]);
		switch($action)
		{
			case 'drop':
				if ($type=='primary')
				{
					$result.= 'DROP PRIMARY KEY';
				}
				else
				{
					$result.= 'DROP INDEX `'.$name.'`';
				}
			break;
			case 'add':
				if ($type=='primary')
				{
					$result.= 'ADD PRIMARY KEY '.$fields;
				}
				elseif ($type=='')
				{
					$result.= 'ADD INDEX `'.$name.'` '.$fields;
				}
				else
				{
					$result .='ADD '.strtoupper($type).' `'.$name.'` '.$fields;//fulltext or unique
				}
			break;
			case 'modify':
				if ($type=='primary')
				{
					$result.='DROP PRIMARY KEY, ADD PRIMARY KEY '.$fields;
				}
				elseif ($type=='')
				{
					$result.='DROP INDEX `'.$name.'`, ADD INDEX `'.$name.'` '.$fields;
				}
				else
				{
					$result.='DROP INDEX `'.$name.'`, ADD '.strtoupper($type).' `'.$name.'` '.$fields;//fulltext or unique
				}
			break;

		}
	}
	elseif(preg_match('/^CONSTRAINT\s`?(\w+)`?/', $sql, $m)){
		
		$name = trim($m[1]);
		switch($action){
			case 'drop':
				$result .= 'DROP FOREIGN KEY `'.$name.'`';
				break;
			case 'add':
				$result .= 'ADD ' . $sql;
				break;
			case 'modify':
				$result .= "DROP FOREIGN KEY `{$name}`;\n$result ADD {$sql}";
				break;
		}
	}
	else //fields operations
	{
		$sql = rtrim(trim($sql), ',');
		$result.= strtoupper($action);
		
		if($action=='drop'){
			$spacePos = strpos($sql, ' ');
			$result.= ' '.substr($sql, 0, $spacePos);
		}
		else{
			$result.= ' '.$sql;
		}
		
	}
	
	return $result;
}

function pushtolive_inserts($source_data, $live_data, $table, $replace_data, $giveinsert = ''){

    global $current_row, $tables_data_diff, $dont_compare_tables;
	$count = 2000;
	$limit = 0;
	$query_return = array();

	$source_link = soft_mysql_connect($source_data['softdbhost'], $source_data['softdbuser'], $source_data['softdbpass']);
	@soft_mysql_select_db($source_data['softdb'], $source_link);
	
	$live_link = soft_mysql_connect($live_data['softdbhost'], $live_data['softdbuser'], $live_data['softdbpass']);
	@soft_mysql_select_db($live_data['softdb'], $live_link);
	
	// We have modified this code because we were getting error if inserts were >50000
	$cnt_qry = 'SELECT count(*) FROM `'.$source_data['softdb'] . '`.`' . $table . '`';
	
	$cnt_res = soft_mysql_fetch_row(soft_mysql_query($cnt_qry, $source_link));
	
	$sql_query  = 'SELECT * FROM `'.$source_data['softdb'] . '`.`' . $table . '` LIMIT 0,2000';

	if(!empty($giveinsert)){
		$dsql_query  = 'SELECT * FROM `'.$live_data['softdb'] . '`.`' . $table . '` LIMIT 0,2000';
		$dsquery= soft_mysql_query($dsql_query, $live_link);
	}
	
    $squery= soft_mysql_query($sql_query, $source_link);
	
	$fields_cnt = soft_mysql_num_fields($squery);

	// Get field information
	
	if(extension_loaded('mysqli')){
		$fields_meta    = getFieldsMeta($squery);
	}else{
		$fields_meta    = pushtolive_PMA_DBI_get_fields_meta($squery);
	}

	$sql_command = 'INSERT';
   
	$insert_delayed = '';
	$separator = ',';
	$crlf = "\n";

	$schema_insert = $sql_command . $insert_delayed .' INTO `' . $table . '` VALUES';
	
	$search       = array("\x00", "\x0a", "\x0d", "\x1a"); //\x08\\x09, not required
	$replace      = array('\0', '\n', '\r', '\Z');
	$current_row  = 0;
	$query_size   = 0;

	$schema_insert .= $crlf;
	for($i = $cnt_res[0]; $i >= 0; $i--){
		
		// Now if 5000 rows has been processed than select next.
		if($count == 0){
			// Now free the result for preventing memory exhaust
			soft_mysql_free_result($squery);
			$count = 2000;
			$limit = $limit+2000;
			
			//Source
			$sql_query  = 'SELECT * FROM `'.$source_data['softdb'] . '`.`' . $table . '` LIMIT '.($limit).', 2000';
			$squery= soft_mysql_query($sql_query, $source_link);
			
			if(!empty($giveinsert)){
				//Live
				$dsql_query  = 'SELECT * FROM `'.$live_data['softdb'] . '`.`' . $table . '` LIMIT '.($limit).', 2000';
				$dsquery= soft_mysql_query($dsql_query, $live_link);
			}
		}
		
		//Source
		$row = soft_mysql_fetch_array($squery);
		
		//Live
		if(!empty($giveinsert)){
			$drow = soft_mysql_fetch_array($dsquery);
		}
		
		// If we get empty result than break the loop
		if(!$row){
			break;
		}
		
		$current_row++;
		
		for ($j = 0; $j < $fields_cnt; $j++) {
			// NULL
			if (!isset($row[$j]) || is_null($row[$j])) {
				$values[]  = 'NULL'; //source
				
				if(!empty($giveinsert)){
					if (!isset($drow[$j]) || is_null($drow[$j])) {
						$dvalues[]  = 'NULL'; //live (destination)
					}
				}
				
			// a number
			// timestamp is numeric on some MySQL 4.1, BLOBs are sometimes numeric
			} elseif ($fields_meta[$j]->numeric && $fields_meta[$j]->type != 'timestamp' 
					&& !$fields_meta[$j]->blob) {
				$values[] = $row[$j]; //Source value
				
				if(!empty($giveinsert)){
					$dvalues[]  = $drow[$j]; //live value
				}
			}elseif (empty($giveinsert) && preg_match('/^a:(\d+):{/is', $row[$j]) || preg_match('/^O:(\d+):{/is', $row[$j])){
				$column_data = array();
				
				$column_data = unserialize($row[$j]);
				$field_data = recursive_replace_data($column_data, $replace_data); //will replace data with $replace_data
				$field_data = serialize($field_data);
			
				$values[] = '\'' . str_replace($search, $replace, pushtolive_PMA_sqlAddslashes($field_data)) . '\'';
			
			} else {
				
				$replaced_data = strtr($row[$j], $replace_data);
				
				//Source value
				$values[] = '\'' . str_replace($search, $replace, pushtolive_PMA_sqlAddslashes($replaced_data)) . '\'';
				
				//live value
				if(!empty($giveinsert)){
					$dvalues[] = '\'' . str_replace($search, $replace, pushtolive_PMA_sqlAddslashes($drow[$j])) . '\'';
				}
				
			} // end if	
		} // end for
		
		if(!empty($giveinsert)){
			
			$source_insert = implode(', ', $values);
			
			$dest_insert = implode(', ', $dvalues);
			//echo $table.'='.$source_insert.'<br />';
			//echo $table.'='.$dest_insert.'<br />';
			if($source_insert != $dest_insert && !in_array($table, $dont_compare_tables)){
				$tables_data_diff[] = $table;
				
				//Free variables
				$source_insert = '';
				$dest_insert = '';
				unset($values);
				unset($dvalues);
				
				break;
			}
			
			continue;
		}
		
		
		if($current_row == 1){
			$insert_line  = $schema_insert . '(' . implode(', ', $values) . ')';
		}else{
			
			$insert_line  = '(' . implode(', ', $values) . ')';
			if($query_size + strlen($insert_line) > 50000){
				
				$query_buffer .= ';' . $crlf;
				
				if(empty($giveinsert)){
					soft_mysql_query('SET NAMES "utf8"', $live_link);
					soft_mysql_query('SET SESSION sql_mode = "NO_AUTO_VALUE_ON_ZERO"', $live_link);
					
					$result['res'] = soft_mysql_query($query_buffer, $live_link); //executing queries to live ins(destination)
					
				}
				
				// We empty $query_buffer because we have already executed the query in previous line
				$query_buffer = '';
				$query_size = 0;
				$current_row = 1;
				
				$insert_line = $schema_insert . $insert_line;
			}
		}
		
		// Gather query size
		$query_size += strlen($insert_line);
		
		unset($values);

		$query_buffer .= ($current_row == 1 ? '' : $separator . $crlf) . $insert_line;
		//soft_log(1, $query_buffer."\n\n");
		// Decrement till 0 so that next 5000 rows can be selected
		$count--;
		
	}// End of FOR
	
	if ($current_row > 0) {
	
		// This is for foreign language characters
		//To insert the values into the new DB in UTF8 format
		
		$query_buffer .= ';' . $crlf;
		//echo $query_buffer.'<br />';
		
		if(empty($giveinsert)){
			
			soft_mysql_query('SET NAMES "utf8"', $live_link);
			soft_mysql_query('SET SESSION sql_mode = "NO_AUTO_VALUE_ON_ZERO"', $live_link);
			
			$result['res'] = soft_mysql_query($query_buffer, $live_link);
			
		}
	}
	
	$result['live_link'] = $live_link;
	
	// Free resourses
	soft_mysql_free_result($squery);
	
	//r_print($query_return);
	return $result;
		
}

@unlink(__FILE__); // More has to be done here !

$data = unserialize(base64_decode('[[[data]]]'));
$dbhost = unserialize(base64_decode('[[[dbhost]]]'));
$dbuser = unserialize(base64_decode('[[[dbuser]]]'));
$dbpass = unserialize(base64_decode('[[[dbpass]]]'));
$db = unserialize(base64_decode('[[[db]]]'));
$optional_db = unserialize(base64_decode('[[[optional_db]]]'));


$GLOBALS['structure'] = get_table_structure_fn($dbhost, $dbuser, $dbpass, $db, $optional_db);

softdie('DONE');

