<?php

function can_create_file(){
	$file = dirname(__FILE__).'/soft.tmp';
	$fp = @fopen($file, 'wb');
	if($fp === FALSE){
		return false;
	}
	
	if(@fwrite($fp, 'ampps') === FALSE){
		return false;
	}
	
	@fclose($fp);
	
	// Check if the file exists
	if(file_exists($file)){
		@unlink($file);
		return true;
	}
	
	return false;	
}

// Back up the database !!!
function backup_mysql_fn($shost, $suser, $spass, $sdb, $sdbfile){
	//echo $shost.' == '. $suser.' == '. $spass.' == '. $sdb.' == '. $sdbfile;
	
	global $data;
	
	$link = soft_mysql_connect($shost, $suser, $spass);
	
	soft_mysql_query('SET CHARACTER SET utf8', $link);
	
	// Open and create a file handle for sql.
	$handle = fopen($sdbfile,'w');
	
	$s_def = $alter_queries = $sresponse = '';
	$sql_alter = $tables = array();
	
	$ser_ver = PMA_sversion($link);
	$s_def = PMA_exportHeader($sdb, $ser_ver);
	
	fwrite($handle, $s_def);
		
	// We did not create the database ! So just backup the tables required for this database
	if(empty($data['dbcreated']) && !empty($data['softdbtables'])){
		
		$thisdb_tables = $data['softdbtables'];
		$additional_tables = (!empty($data['additional_tables']) ? $data['additional_tables'] : array());
		
		if(!is_array($data['softdbtables'])){
			$thisdb_tables = unserialize($data['softdbtables']);
		}
		
		$thisdb_tables = (!empty($additional_tables) ? array_merge($additional_tables, $thisdb_tables) : $thisdb_tables);
		
		// This is just to remove the ` since we are not getting it in $tables below
		foreach($thisdb_tables as $tk => $tv){
			// There was a bug since Softaculous 4.7.2 that did not save softdbtables for ins causing empty array. Fixed in Softaculous 4.7.7
			if(empty($tv)) continue;
			$_thisdb_tables[trim($tk, '`')] = trim($tv, '`');
		}
	}

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
		
		// We do not need to backup this table
		if(!empty($_thisdb_tables) && is_array($_thisdb_tables) && !in_array($row[0], $_thisdb_tables)){
			continue;
		}
		
		if(in_array($row[0], $views)){
			continue;
		}
		
		$tables[] = $row[0];
	}
	
	// Sort the tables
	usort($tables, 'strnatcasecmp');	
	
	foreach($tables as $table => $v){
		
		// Get the table structure(table definition)
		$stable_defn = PMA_getTableDef($sdb, $v, "\n", false, true, $link);
		
		$s_def = $stable_defn['structure']."\n";
		fwrite($handle, $s_def);
		
		// Get the table data(table contents)
		// We have added $handle so that we can write the INSERT queries directly when we get it. 
		// Basically To avoid MEMORY EXHAUST FOR  BIG INSERTS
		PMA_exportData($sdb, $v, "\n", $handle, $link);
		
		// List of alter queries 
		// We have changed this because the OLD method was putting the ALTER queries after CREATE table query which was causing issues.
		if(!empty($stable_defn['alter'])){
			$alter_queries .= $stable_defn['alter'];
		}
		
		
	}
	
	//Save Views
	foreach($views as $view){
		
		$defn = PMA_getViews($sdb, $view, "\n", $link);
		
		$view_def = $defn['structure']."\n";
		fwrite($handle, $view_def);
	}
	
	fwrite($handle, $alter_queries);
	
	//List Triggers/Events/Procedures/Functions	
	//Triggers
	$triggers = PMA_getTriggers($sdb, $link);
	foreach($triggers as $trigger){
		fwrite($handle, "\n".$trigger['drop']."\nDELIMITER //\n");
		fwrite($handle, $trigger['create']."// \nDELIMITER ;\n\n");
	}
	
	//Events
	$events = PMA_getEvents($sdb, $link);
	foreach($events as $event){
		fwrite($handle, "\n".$event['drop']."\nDELIMITER $$ \n-- \n-- Events \n--\n");
		fwrite($handle, $event['create']);
		fwrite($handle, "\n$$ \nDELIMITER ;\n\n");
	}
	
	//Functions
	$functions = PMA_getProceduresOrFunctions($sdb, 'FUNCTION', $link);
	foreach($functions as $function){
		fwrite($handle, "\n".$function['drop']."\nDELIMITER $$ \n-- \n-- Functions \n--\n");
		fwrite($handle, $function['create']);
		fwrite($handle, "\n$$ \nDELIMITER ;\n\n");
	}
	
	//Procedures
	$procedures = PMA_getProceduresOrFunctions($sdb, 'PROCEDURE', $link);
	foreach($procedures as $procedure){
		fwrite($handle, "\n".$procedure['drop']."\nDELIMITER $$ \n-- \n-- Procedures \n--\n");
		fwrite($handle, $procedure['create']);
		fwrite($handle, "\n$$ \nDELIMITER ;\n\n");
	}	
	
	$sresponse = PMA_exportFooter(); // Just to add the finishing lines
	fwrite($handle, $sresponse);
	fclose($handle);
	
	// Just check that file is created or not ??
	if(file_exists($sdbfile)){
		return true;
	}
	
	return false;
	
} //End of database backup

function PMA_getViews($db, $view, $crlf, $link){
	
	$schema_create = $auto_increment = $dump = '';
	$new_crlf = $crlf;
	
	// This is for foreign language characters
	//To read the values from the old DB in UTF8 format
	//soft_mysql_query('SET NAMES "utf8"', $link);
	
	// Complete view dump,
	// Whether to quote view and fields names or not
	soft_mysql_query('SET SQL_QUOTE_SHOW_CREATE = 1', $link);
	
	// Create view structure
	$result = soft_mysql_query('SHOW CREATE VIEW `'.$db.'`.`'.$view.'`', $link);

	// Construct the dump for the view structure
	$dump .=  '--' . $crlf
			. '-- Structure for view ' . '`' . $view.'`' . $crlf
			. '--' . $crlf
			. 'DROP VIEW IF EXISTS `' . $view . '`;' . $crlf . $crlf;
	
	if ($row = soft_mysql_fetch_assoc($result)) {
			
		$create_query = $row['Create View'];
		
		preg_match('/DEFINER=(.*?) SQL/is', $create_query, $matches);
		$create_query = str_replace($matches[1], 'CURRENT_USER', $create_query);

		$schema_create .= $new_crlf . $dump;

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

function PMA_getTriggers($db, $link){
	$query = soft_mysql_query('SHOW TRIGGERS FROM `' . $db . '`', $link);
	$result = array(); //added as empty so don't give warning when data is empty..
		
	while($trigger = soft_mysql_fetch_assoc($query)){
		
		$one_result = array();
		$one_result['name'] = $trigger['Trigger'];
		$one_result['table'] = $trigger['Table'];
		$one_result['action_timing'] = $trigger['Timing'];
		$one_result['event_manipulation'] = $trigger['Event'];
		$one_result['definition'] = $trigger['Statement'];
		$one_result['definer'] = $trigger['Definer'];
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

function PMA_getEvents($db, $link){
	
	$query = soft_mysql_query('SHOW EVENTS FROM `' . $db . '`', $link);

	$result = array();
	while ($event = soft_mysql_fetch_assoc($query)) {
			$one_result = array();
			$one_result['name'] = $event['Name'];
			$one_result['type'] = $event['Type'];
			$one_result['status'] = $event['Status'];
			$one_result['drop'] = 'DROP EVENT IF EXISTS `' . $db .'`.`'. $one_result['name'].'`;';
			$one_result['create'] = PMA_getDefinition($db, 'EVENT', $one_result['name'], $link);
			
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
function PMA_getProceduresOrFunctions($db, $which, $link)
{
	$query = soft_mysql_query('SHOW ' . $which . ' STATUS;', $link);
	$result = array();
	
	while($one_show = soft_mysql_fetch_assoc($query)) {
		if ($one_show['Db'] == $db && $one_show['Type'] == $which) {
			$one_show['drop'] = 'DROP '.$which.' IF EXISTS `' . $db .'`.`'. $one_show['Name'].'`;';
			$one_show['create'] = PMA_getDefinition($db, $which, $one_show['Name'], $link);
			
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
function PMA_getDefinition($db, $which, $name, $link)
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
function PMA_sqlAddslashes(&$a_string = '', $is_like = false, $crlf = false, $php_code = false) {

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
} // end of the 'PMA_sqlAddslashes()' function


// Form the table structure && the alter queries if any !! 
function PMA_getTableDef($db, $table, $crlf, $show_dates = false, $add_semicolon = true, $link) {
	
    global $sql_drop_table, $sql_alter;
    global $sql_constraints;
    global $sql_constraints_query; // just the text of the query
    global $sql_drop_foreign_keys;

    $schema_create = $auto_increment = $sql_constraints = '';
    $new_crlf = $crlf;
	
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
	
	//added as empty so don't give warning when data is empty..
	$dump = '';
	
	// Construct the dump for the table structure
	$dump .=  '--' . $crlf
			. '-- Table structure for table ' . '`' . $table.'`' . $crlf
			. '--' . $crlf . $crlf;
		 
    $schema_create .= $new_crlf . $dump;

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
								 . PMA_exportComment()
								 . PMA_exportComment('Constraints for table ' . '`' . $table.'`')
								 . PMA_exportComment();
                
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
	 
} // end of the 'PMA_getTableDef()' function

// Internal function to get meta details about the database 
function PMA_DBI_get_fields_meta($sresult) {
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
function PMA_exportData($db, $table, $crlf, $handle, $link){
	
    global $current_row;
	$count = 10000;
	$limit = 0;

	// We have modified this code because we were getting error if inserts were >50000
	$cnt_qry = 'SELECT count(*) FROM `'.$db . '`.`' . $table . '`';
	$cnt_res = soft_mysql_fetch_row(soft_mysql_query($cnt_qry, $link));
	
	$sql_query  = 'SELECT * FROM `'.$db . '`.`' . $table . '` LIMIT 0,10000';

    $formatted_table_name = '`' . $table . '`';

    $squery= soft_mysql_query($sql_query, $link);
	
	$fields_cnt = soft_mysql_num_fields($squery);

	// Get field information
	if(extension_loaded('mysqli')){
		$fields_meta    = getFieldsMeta($squery);
	}else{
		$fields_meta    = PMA_DBI_get_fields_meta($squery);
	}
	
	$field_flags    = array();
	for ($j = 0; $j < $fields_cnt; $j++) {
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
	$new_query  = 0;
	$query_length = 0;

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
			$head = PMA_exportComment()
				  . PMA_exportComment('Dumping data for table' . ' ' . $formatted_table_name)
				  . PMA_exportComment()
				  . $crlf;
			fwrite($handle, $head);
		}
		$current_row++;
		
		if ($current_row == 1 || $new_query == 1) {
			fwrite($handle, $schema_insert .'(');
		}else{
			fwrite($handle, ','.$crlf.'(');
		}
		
		$add_comma = 0;
		for ($j = 0; $j < $fields_cnt; $j++) {
			
			$separator = ($add_comma > 0 ? ', ' : '');
			
			// NULL
			if (!isset($row[$j]) || is_null($row[$j])) {
				fwrite($handle, $separator . 'NULL');
			// a number
			// timestamp is numeric on some MySQL 4.1, BLOBs are sometimes numeric
			} elseif ($fields_meta[$j]->numeric && $fields_meta[$j]->type != 'timestamp' 
					&& !$fields_meta[$j]->blob) {
				fwrite($handle, $separator . $row[$j]);
			} else { 
				PMA_sqlAddslashes($row[$j]);
				fwrite($handle, $separator . '\'' . str_replace($search, $replace, $row[$j]) . '\'');				
			} // end if
			
			$query_length += strlen($row[$j]);
			
			$add_comma++;
			$new_query = 0;
		} // end for
		
		fwrite($handle, ')');
		
		// Stop extended insert after 50K chars and open a new INSERT
		if($query_length > 50000){
			$query_buffer = ';' . $crlf;
			fwrite($handle, $query_buffer);
			$add_comma = 0;
			$new_query = 1;
			$query_length = 0;
		}
	
		// Decrement till 0 so that next 10000 rows can be selected
		$count--;
		
	}// End of FOR
	
	if ($current_row > 0) {   
		$query_buffer = ';' . $crlf;
		fwrite($handle, $query_buffer);
	}
	
	// Free resourses
	soft_mysql_free_result($squery);
	
	$end_line = (!empty($query_buffer) ? $crlf : '' ). PMA_exportComment('--------------------------------------------------------');
	fwrite($handle, $end_line);
	//return $query_buffer . $end_line;
		
} 

function PMA_exportComment($text = '')
{
	$crlf = "\n";
	$ret = '--' . (empty($text) ? '' : ' ') . $text . $crlf;
	return $ret;
}

function PMA_exportHeader($db, $ser_ver)
{
    $crlf = "\n";  

    $head  =  PMA_exportComment('Softaculous SQL Dump')
           .  PMA_exportComment('http://www.softaculous.com')
           .  PMA_exportComment()
		   .  PMA_exportComment('Host: localhost')
           .  PMA_exportComment('Generation Time: '. date("F j, Y, g:i a") .'')
		   .  PMA_exportComment('Server version: '. $ser_ver .'')
           .  PMA_exportComment('PHP Version' . ': ' . phpversion())
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
	
	$head .= PMA_exportComment()
		  . PMA_exportComment('Database: `' . $db . '`')
		  . PMA_exportComment()
		  . $crlf
		  . PMA_exportComment('--------------------------------------------------------');

    return $head;

}

function PMA_exportFooter()
{
    $crlf = "\n";
    $foot = '';

	$foot .=  $crlf
	   . '/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;' . $crlf
	   . '/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;' . $crlf
	   . '/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;' . $crlf;
	
	return $foot;
}

function PMA_sversion($link){

	// Get version
	$version = soft_mysql_query('SELECT VERSION()', $link);
	$version = soft_mysql_fetch_assoc($version);
	
	// Explode to extract version
	$version = explode('-', $version['VERSION()']);
	return $version[0];
	
}

function soft_mysql_connect($host, $user, $pass, $newlink = false){
	
	if(extension_loaded('mysqli')){
		//echo 'mysqli';
		//To handle connection if user passes a custom port along with the host as localhost:6446
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

function soft_mysql_select_db($db, $conn){
	
	if(extension_loaded('mysqli')){
		$return = @mysqli_select_db($conn, $db);
	}else{
		$return = @mysql_select_db($db, $conn);
	}
	
	return $return;
}

function soft_mysql_query($query, $conn){
	
	if(extension_loaded('mysqli')){
		$return = @mysqli_query($conn, $query);
	}else{
		$return = @mysql_query($query, $conn);
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

function soft_mysql_fetch_assoc($result){
	
	if(extension_loaded('mysqli')){
		$return = @mysqli_fetch_assoc($result);
	}else{
		$return = @mysql_fetch_assoc($result);
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

function soft_mysql_fetch_field($result, $field){
	
	if(extension_loaded('mysqli')){
		$return = @mysqli_fetch_field($result, $field);
	}else{
		$return = @mysql_fetch_field($result, $field);
	}
	
	return $return;
}


function soft_mysql_field_flags($result, $i){
	
	if(!extension_loaded('mysqli')){
		return mysql_field_flags($result, $i);
	}
	
	$f = mysqli_fetch_field_direct($result, $i);
	$type = $f->type;
	$charsetnr = $f->charsetnr;
	$f = $f->flags;
	$flags = '';
	if ($f & MYSQLI_UNIQUE_KEY_FLAG) {
		$flags .= 'unique ';
	}
	if ($f & MYSQLI_NUM_FLAG) {
		$flags .= 'num ';
	}
	if ($f & MYSQLI_PART_KEY_FLAG) {
		$flags .= 'part_key ';
	}
	if ($f & MYSQLI_SET_FLAG) {
		$flags .= 'set ';
	}
	if ($f & MYSQLI_TIMESTAMP_FLAG) {
		$flags .= 'timestamp ';
	}
	if ($f & MYSQLI_AUTO_INCREMENT_FLAG) {
		$flags .= 'auto_increment ';
	}
	if ($f & MYSQLI_ENUM_FLAG) {
		$flags .= 'enum ';
	}
	// See http://dev.mysql.com/doc/refman/6.0/en/c-api-datatypes.html:
	// to determine if a string is binary, we should not use MYSQLI_BINARY_FLAG
	// but instead the charsetnr member of the MYSQL_FIELD
	// structure. Watch out: some types like DATE returns 63 in charsetnr
	// so we have to check also the type.
	// Unfortunately there is no equivalent in the mysql extension.
	if (($type == MYSQLI_TYPE_TINY_BLOB || $type == MYSQLI_TYPE_BLOB
		|| $type == MYSQLI_TYPE_MEDIUM_BLOB || $type == MYSQLI_TYPE_LONG_BLOB
		|| $type == MYSQLI_TYPE_VAR_STRING || $type == MYSQLI_TYPE_STRING)
		&& 63 == $charsetnr
	) {
		$flags .= 'binary ';
	}
	if ($f & MYSQLI_ZEROFILL_FLAG) {
		$flags .= 'zerofill ';
	}
	if ($f & MYSQLI_UNSIGNED_FLAG) {
		$flags .= 'unsigned ';
	}
	if ($f & MYSQLI_BLOB_FLAG) {
		$flags .= 'blob ';
	}
	if ($f & MYSQLI_MULTIPLE_KEY_FLAG) {
		$flags .= 'multiple_key ';
	}
	if ($f & MYSQLI_UNIQUE_KEY_FLAG) {
		$flags .= 'unique_key ';
	}
	if ($f & MYSQLI_PRI_KEY_FLAG) {
		$flags .= 'primary_key ';
	}
	if ($f & MYSQLI_NOT_NULL_FLAG) {
		$flags .= 'not_null ';
	}
	return trim($flags);
}


function soft_mysql_num_rows($result){
	
	if(extension_loaded('mysqli')){
		$return = @mysqli_num_rows($result);
	}else{
		$return = @mysql_num_rows($result);
	}
	
	return $return;
}

function soft_mysql_affected_rows($conn){
	
	if(extension_loaded('mysqli')){
		$return = @mysqli_affected_rows($conn);
	}else{
		$return = @mysql_affected_rows($conn);
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

function soft_mysql_free_result($result){
	
	if(extension_loaded('mysqli')){
		$return = @mysqli_free_result($result);
	}else{
		$return = @mysql_free_result($result);
	}
	
	return $return;
}

function getFieldsMeta($result){
	// Build an associative array for a type look up
	
	if(!defined('MYSQLI_TYPE_VARCHAR')){
		define('MYSQLI_TYPE_VARCHAR', 15);
	}
	
	$typeAr = array();
	$typeAr[MYSQLI_TYPE_DECIMAL]     = 'real';
	$typeAr[MYSQLI_TYPE_NEWDECIMAL]  = 'real';
	$typeAr[MYSQLI_TYPE_BIT]         = 'int';
	$typeAr[MYSQLI_TYPE_TINY]        = 'int';
	$typeAr[MYSQLI_TYPE_SHORT]       = 'int';
	$typeAr[MYSQLI_TYPE_LONG]        = 'int';
	$typeAr[MYSQLI_TYPE_FLOAT]       = 'real';
	$typeAr[MYSQLI_TYPE_DOUBLE]      = 'real';
	$typeAr[MYSQLI_TYPE_NULL]        = 'null';
	$typeAr[MYSQLI_TYPE_TIMESTAMP]   = 'timestamp';
	$typeAr[MYSQLI_TYPE_LONGLONG]    = 'int';
	$typeAr[MYSQLI_TYPE_INT24]       = 'int';
	$typeAr[MYSQLI_TYPE_DATE]        = 'date';
	$typeAr[MYSQLI_TYPE_TIME]        = 'time';
	$typeAr[MYSQLI_TYPE_DATETIME]    = 'datetime';
	$typeAr[MYSQLI_TYPE_YEAR]        = 'year';
	$typeAr[MYSQLI_TYPE_NEWDATE]     = 'date';
	$typeAr[MYSQLI_TYPE_ENUM]        = 'unknown';
	$typeAr[MYSQLI_TYPE_SET]         = 'unknown';
	$typeAr[MYSQLI_TYPE_TINY_BLOB]   = 'blob';
	$typeAr[MYSQLI_TYPE_MEDIUM_BLOB] = 'blob';
	$typeAr[MYSQLI_TYPE_LONG_BLOB]   = 'blob';
	$typeAr[MYSQLI_TYPE_BLOB]        = 'blob';
	$typeAr[MYSQLI_TYPE_VAR_STRING]  = 'string';
	$typeAr[MYSQLI_TYPE_STRING]      = 'string';
	$typeAr[MYSQLI_TYPE_VARCHAR]     = 'string'; // for Drizzle
	// MySQL returns MYSQLI_TYPE_STRING for CHAR
	// and MYSQLI_TYPE_CHAR === MYSQLI_TYPE_TINY
	// so this would override TINYINT and mark all TINYINT as string
	// https://sourceforge.net/p/phpmyadmin/bugs/2205/
	//$typeAr[MYSQLI_TYPE_CHAR]        = 'string';
	$typeAr[MYSQLI_TYPE_GEOMETRY]    = 'geometry';
	$typeAr[MYSQLI_TYPE_BIT]         = 'bit';

	$fields = mysqli_fetch_fields($result);

	// this happens sometimes (seen under MySQL 4.0.25)
	if (!is_array($fields)) {
		return false;
	}

	foreach ($fields as $k => $field) {
		$fields[$k]->_type = $field->type;
		$fields[$k]->type = $typeAr[$field->type];
		$fields[$k]->_flags = $field->flags;
		$fields[$k]->flags = soft_mysql_field_flags($result, $k);

		// Enhance the field objects for mysql-extension compatibilty
		//$flags = explode(' ', $fields[$k]->flags);
		//array_unshift($flags, 'dummy');
		$fields[$k]->multiple_key
			= (int) (bool) ($fields[$k]->_flags & MYSQLI_MULTIPLE_KEY_FLAG);
		$fields[$k]->primary_key
			= (int) (bool) ($fields[$k]->_flags & MYSQLI_PRI_KEY_FLAG);
		$fields[$k]->unique_key
			= (int) (bool) ($fields[$k]->_flags & MYSQLI_UNIQUE_KEY_FLAG);
		$fields[$k]->not_null
			= (int) (bool) ($fields[$k]->_flags & MYSQLI_NOT_NULL_FLAG);
		$fields[$k]->unsigned
			= (int) (bool) ($fields[$k]->_flags & MYSQLI_UNSIGNED_FLAG);
		$fields[$k]->zerofill
			= (int) (bool) ($fields[$k]->_flags & MYSQLI_ZEROFILL_FLAG);
		$fields[$k]->numeric
			= (int) (bool) ($fields[$k]->_flags & MYSQLI_NUM_FLAG);
		$fields[$k]->blob
			= (int) (bool) ($fields[$k]->_flags & MYSQLI_BLOB_FLAG);
	}
	return $fields;
}

define('ARCHIVE_TAR_ATT_SEPARATOR', 90001);
define('ARCHIVE_TAR_END_BLOCK', pack("a512", ''));

class softtar
{

    var $_tarname='';
    var $_compress=false;
    var $_compress_type='none';
    var $_separator=',';
    var $_file=0;
    var $_temp_tarname='';
    var $_ignore_regexp='';
    var $error_object=null;
	
	var $_local_tar=''; // The local file	
	var $_orig_tar=''; // The remote file
	var $remote_fp=''; // The remote file pointer	
	var $remote_fp_filter = NULL;
	var $remote_hctx = NULL;
	var $remote_content_size = 0;
	
    function __construct($p_tarname, $p_compress = null, $handle_remote = false)
    {	
	
		// $tmpdir is mainly used for REMOTE protocols so that we can write locally and append on the remote server
		if(preg_match('/\:\/\//', $p_tarname) && $handle_remote){			
			$tmpdir = $GLOBALS['data']['path'].'/tmp';
			$this->_orig_tar = $p_tarname;
			$p_tarname = $tmpdir.'/'.md5($p_tarname);
			$this->_local_tar = $p_tarname;
			//Required in _gdrive.php
			$GLOBALS['slocal_tar'] = $this->_local_tar;
		}
		
        $this->_compress = false;
        $this->_compress_type = 'none';
        if (($p_compress === null) || ($p_compress == '')) {
            if (@file_exists($p_tarname)) {
                if ($fp = @fopen($p_tarname, "rb")) {
                    // look for gzip magic cookie
                    $data = fread($fp, 2);
                    fclose($fp);
                    if ($data == "\37\213") {
                        $this->_compress = true;
                        $this->_compress_type = 'gz';
                        // No sure it's enought for a magic code ....
                    } elseif ($data == "BZ") {
                        $this->_compress = true;
                        $this->_compress_type = 'bz2';
                    }
                }
            } else {
                // probably a remote file or some file accessible
                // through a stream interface
                if (substr($p_tarname, -2) == 'gz') {
                    $this->_compress = true;
                    $this->_compress_type = 'gz';
                } elseif ((substr($p_tarname, -3) == 'bz2') ||
                          (substr($p_tarname, -2) == 'bz')) {
                    $this->_compress = true;
                    $this->_compress_type = 'bz2';
                }
            }
        } else {
            if (($p_compress === true) || ($p_compress == 'gz')) {
                $this->_compress = true;
                $this->_compress_type = 'gz';
            } else if ($p_compress == 'bz2') {
                $this->_compress = true;
                $this->_compress_type = 'bz2';
            } else {
                $this->_error("Unsupported compression type '$p_compress'\n".
                    "Supported types are 'gz' and 'bz2'.\n");
                return false;
            }
        }
        $this->_tarname = $p_tarname;
        if ($this->_compress) { // assert zlib or bz2 extension support
            if ($this->_compress_type == 'gz')
                $extname = 'zlib';
            else if ($this->_compress_type == 'bz2')
                $extname = 'bz2';

            if (!extension_loaded($extname)) {
                PEAR::loadExtension($extname);
            }
            if (!extension_loaded($extname)) {
                $this->_error("The extension '$extname' couldn't be found.\n".
                    "Please make sure your version of PHP was built ".
                    "with '$extname' support.\n");
                return false;
            }
        }
    }
    // }}}

    // {{{ destructor
    function _softtar()
    {
        $this->_close();
        // ----- Look for a local copy to delete
        if ($this->_temp_tarname != '')
            @unlink($this->_temp_tarname);
		
		// In case of REMOTE
		if(!empty($this->_orig_tar) && empty($GLOBALS['end_file'])){
			unlink($this->_local_tar);
		}
    }
    // }}}
	
	function __destruct(){
		$this->_softtar();
	}

    // {{{ create()
    function create($p_filelist)
    {
        return $this->createModify($p_filelist, '', '');
    }
    // }}}

    // {{{ add()
    function add($p_filelist)
    {
        return $this->addModify($p_filelist, '', '');
    }
    // }}}

    // {{{ extract()
    function extract($p_path='', $p_preserve=false)
    {
        return $this->extractModify($p_path, '', $p_preserve);
    }
    // }}}

    // {{{ listContent()
    function listContent()
    {
        $v_list_detail = array();

        if ($this->_openRead()) {
            if (!$this->_extractList('', $v_list_detail, "list", '', '')) {
                unset($v_list_detail);
                $v_list_detail = 0;
            }
            $this->_close();
        }

        return $v_list_detail;
    }
    // }}}

    // {{{ createModify()
    function createModify($p_filelist, $p_add_dir, $p_remove_dir='')
    {
        $v_result = true;

        if (!$this->_openWrite())
            return false;
		
		// Backup the Softaculous pre list (e.g. softsql.sql)
		if(!empty($GLOBALS['pre_soft_list'])){
			$GLOBALS['doing_soft_files'] = 1;
			$v_result = $this->_addList($GLOBALS['pre_soft_list'], $p_add_dir, $p_remove_dir);
			$GLOBALS['doing_soft_files'] = 0;
		}

        if ($p_filelist != '') {
            if (is_array($p_filelist))
                $v_list = $p_filelist;
            elseif (is_string($p_filelist))
                $v_list = explode($this->_separator, $p_filelist);
            else {
                $this->_cleanFile();
                $this->_error('Invalid file list');
                return false;
            }

            $v_result = $this->_addList($v_list, $p_add_dir, $p_remove_dir);
        }

        if ($v_result) {
			// --- write footer only if end file is empty..
			if(empty($GLOBALS['end_file'])){ 
				
				// Add the Softaculous post files i.e. softperms.txt at the end
				if(!empty($GLOBALS['post_soft_list'])){
					$GLOBALS['doing_soft_files'] = 1;
					$v_result = $this->_addList($GLOBALS['post_soft_list'], $p_add_dir, $p_remove_dir);
					$GLOBALS['doing_soft_files'] = 0;
				}
				
				if($v_result){
					$this->_writeFooter();
				}
			}
            $this->_close();
        } else
            $this->_cleanFile();

        return $v_result;
    }
    // }}}

    // {{{ addModify()
    function addModify($p_filelist, $p_add_dir, $p_remove_dir='')
    {
        $v_result = true;

        if (!$this->_isArchive())
            $v_result = $this->createModify($p_filelist, $p_add_dir,
                                            $p_remove_dir);
        else {
            if (is_array($p_filelist))
                $v_list = $p_filelist;
            elseif (is_string($p_filelist))
                $v_list = explode($this->_separator, $p_filelist);
            else {
                $this->_error('Invalid file list');
                return false;
            }

            $v_result = $this->_append($v_list, $p_add_dir, $p_remove_dir);
        }

        return $v_result;
    }
    // }}}

    // {{{ addString()
    function addString($p_filename, $p_string)
    {
        $v_result = true;

        if (!$this->_isArchive()) {
            if (!$this->_openWrite()) {
                return false;
            }
            $this->_close();
        }

        if (!$this->_openAppend())
            return false;

        // Need to check the get back to the temporary file ? ....
        $v_result = $this->_addString($p_filename, $p_string);

        $this->_writeFooter();

        $this->_close();

        return $v_result;
    }
    // }}}

    // {{{ extractModify()
    function extractModify($p_path, $p_remove_path, $p_preserve=false)
    {
        $v_result = true;
        $v_list_detail = array();

        if ($v_result = $this->_openRead()) {
            $v_result = $this->_extractList($p_path, $v_list_detail,
                "complete", 0, $p_remove_path, $p_preserve);
            $this->_close();
        }

        return $v_result;
    }
    // }}}

    // {{{ extractInString()
    function extractInString($p_filename)
    {
        if ($this->_openRead()) {
            $v_result = $this->_extractInString($p_filename);
            $this->_close();
        } else {
            $v_result = null;
        }

        return $v_result;
    }
    // }}}

    // {{{ extractList()
    function extractList($p_filelist, $p_path='', $p_remove_path='', $p_preserve=false)
    {
        $v_result = true;
        $v_list_detail = array();

        if (is_array($p_filelist))
            $v_list = $p_filelist;
        elseif (is_string($p_filelist))
            $v_list = explode($this->_separator, $p_filelist);
        else {
            $this->_error('Invalid string list');
            return false;
        }

        if ($v_result = $this->_openRead()) {
            $v_result = $this->_extractList($p_path, $v_list_detail, "partial",
                $v_list, $p_remove_path, $p_preserve);
            $this->_close();
        }

        return $v_result;
    }
    // }}}

    // {{{ setAttribute()
    function setAttribute()
    {
        $v_result = true;

        // ----- Get the number of variable list of arguments
        if (($v_size = func_num_args()) == 0) {
            return true;
        }

        // ----- Get the arguments
        $v_att_list = func_get_args();

        // ----- Read the attributes
        $i=0;
        while ($i<$v_size) {

            // ----- Look for next option
            switch ($v_att_list[$i]) {
                // ----- Look for options that request a string value
                case ARCHIVE_TAR_ATT_SEPARATOR :
                    // ----- Check the number of parameters
                    if (($i+1) >= $v_size) {
                        $this->_error('Invalid number of parameters for '
						              .'attribute ARCHIVE_TAR_ATT_SEPARATOR');
                        return false;
                    }

                    // ----- Get the value
                    $this->_separator = $v_att_list[$i+1];
                    $i++;
                break;

                default :
                    $this->_error('Unknow attribute code '.$v_att_list[$i].'');
                    return false;
            }

            // ----- Next attribute
            $i++;
        }

        return $v_result;
    }
    // }}}

    // {{{ setIgnoreRegexp()
    function setIgnoreRegexp($regexp)
    {
    	$this->_ignore_regexp = $regexp;
    }
    // }}}

    // {{{ setIgnoreList()
    function setIgnoreList($list)
    {
    	$regexp = str_replace(array('#', '.', '^', '$'), array('\#', '\.', '\^', '\$'), $list);
    	$regexp = '#/'.join('$|/', $list).'#';
    	$this->setIgnoreRegexp($regexp);
    }
    // }}}

    // {{{ _error()
    function _error($p_message)
    {
		//we have changed this since PEAR is not used
        //$this->error_object = &$this->raiseError($p_message); 
		trigger_error($p_message, E_USER_WARNING);
    }
    // }}}

    // {{{ _warning()
    function _warning($p_message)
    {
		//we have changed this since PEAR is not used
        //$this->error_object = &$this->raiseError($p_message); 
		trigger_error($p_message, E_USER_NOTICE);
    }
    // }}}

    // {{{ _isArchive()
    function _isArchive($p_filename=null)
    {
        if ($p_filename == null) {
            $p_filename = $this->_tarname;
        }
        clearstatcache();
        return @is_file($p_filename) && !@is_link($p_filename);
    }
    // }}}

    // {{{ _openWrite()
    function _openWrite()
    {
        if ($this->_compress_type == 'gz' && function_exists('gzopen'))
            $this->_file = @gzopen($this->_tarname, "ab9"); //added 'a' for append as 'w' mode truncated the file...
        else if ($this->_compress_type == 'bz2' && function_exists('bzopen'))
            $this->_file = @bzopen($this->_tarname, "w");
        else if ($this->_compress_type == 'none')
            $this->_file = @fopen($this->_tarname, "ab");
        else
            $this->_error('Unknown or missing compression type ('
			              .$this->_compress_type.')');

        if ($this->_file == 0) {
            $this->_error('Unable to open in write mode \''
			              .$this->_tarname.'\'');
            return false;
        }

        return true;
    }
    // }}}

    // {{{ _openRead()
    function _openRead()
    {
        if (strtolower(substr($this->_tarname, 0, 7)) == 'http://') {

          // ----- Look if a local copy need to be done
          if ($this->_temp_tarname == '') {
              $this->_temp_tarname = uniqid('tar').'.tmp';
              if (!$v_file_from = @fopen($this->_tarname, 'rb')) {
                $this->_error('Unable to open in read mode \''
				              .$this->_tarname.'\'');
                $this->_temp_tarname = '';
                return false;
              }
              if (!$v_file_to = @fopen($this->_temp_tarname, 'wb')) {
                $this->_error('Unable to open in write mode \''
				              .$this->_temp_tarname.'\'');
                $this->_temp_tarname = '';
                return false;
              }
              while ($v_data = @fread($v_file_from, 1024))
                  @fwrite($v_file_to, $v_data);
              @fclose($v_file_from);
              @fclose($v_file_to);
          }

          // ----- File to open if the local copy
          $v_filename = $this->_temp_tarname;

        } else
          // ----- File to open if the normal Tar file
          $v_filename = $this->_tarname;

        if ($this->_compress_type == 'gz')
            $this->_file = @gzopen($v_filename, "rb");
        else if ($this->_compress_type == 'bz2')
            $this->_file = @bzopen($v_filename, "r");
        else if ($this->_compress_type == 'none')
            $this->_file = @fopen($v_filename, "rb");
        else
            $this->_error('Unknown or missing compression type ('
			              .$this->_compress_type.')');

        if ($this->_file == 0) {
            $this->_error('Unable to open in read mode \''.$v_filename.'\'');
            return false;
        }

        return true;
    }
    // }}}

    // {{{ _openReadWrite()
    function _openReadWrite()
    {
        if ($this->_compress_type == 'gz')
            $this->_file = @gzopen($this->_tarname, "r+b");
        else if ($this->_compress_type == 'bz2') {
            $this->_error('Unable to open bz2 in read/write mode \''
			              .$this->_tarname.'\' (limitation of bz2 extension)');
            return false;
        } else if ($this->_compress_type == 'none')
            $this->_file = @fopen($this->_tarname, "r+b");
        else
            $this->_error('Unknown or missing compression type ('
			              .$this->_compress_type.')');

        if ($this->_file == 0) {
            $this->_error('Unable to open in read/write mode \''
			              .$this->_tarname.'\'');
            return false;
        }

        return true;
    }
    // }}}

    // {{{ _close()
    function _close()
    {
        //if (isset($this->_file)) {
        if (is_resource($this->_file)) {
            if ($this->_compress_type == 'gz')
                @gzclose($this->_file);
            else if ($this->_compress_type == 'bz2')
                @bzclose($this->_file);
            else if ($this->_compress_type == 'none')
                @fclose($this->_file);
            else
                $this->_error('Unknown or missing compression type ('
				              .$this->_compress_type.')');

            $this->_file = 0;
        }

        // ----- Look if a local copy need to be erase
        // Note that it might be interesting to keep the url for a time : ToDo
        if ($this->_temp_tarname != '') {
            @unlink($this->_temp_tarname);
            $this->_temp_tarname = '';
        }

        return true;
    }
    // }}}

    // {{{ _cleanFile()
    function _cleanFile()
    {
        $this->_close();

        // ----- Look for a local copy
        if ($this->_temp_tarname != '') {
            // ----- Remove the local copy but not the remote tarname
            @unlink($this->_temp_tarname);
            $this->_temp_tarname = '';
        } else {
            // ----- Remove the local tarname file
            @unlink($this->_tarname);
        }
        $this->_tarname = '';

        return true;
    }
    // }}}

    // {{{ _writeBlock()
    function _writeBlock($p_binary_data, $p_len=null, $finished = false)
    {
      if (is_resource($this->_file)) {
          if ($p_len === null) {
              if ($this->_compress_type == 'gz')
                  $write = @gzputs($this->_file, $p_binary_data);
              else if ($this->_compress_type == 'bz2')
                  $write = @bzwrite($this->_file, $p_binary_data);
              else if ($this->_compress_type == 'none')
                  $write = @fputs($this->_file, $p_binary_data);
              else
                  $this->_error('Unknown or missing compression type ('
				                .$this->_compress_type.')');
          } else {
              if ($this->_compress_type == 'gz')
                  $write = @gzputs($this->_file, $p_binary_data, $p_len);
              else if ($this->_compress_type == 'bz2')
                  $write = @bzwrite($this->_file, $p_binary_data, $p_len);
              else if ($this->_compress_type == 'none')
                  $write = @fputs($this->_file, $p_binary_data, $p_len);
              else
                  $this->_error('Unknown or missing compression type ('
				                .$this->_compress_type.')');

          }
	  
		  if(empty($write)){
			  $this->_error('Failed to write to the backup file. Please check you have enough disk quota available.');
			  return false;
		  }
		  
		  // If there is anything to handle for remote uploads
		  $this->remote_write_handle($finished);
      }
      return true;
    }
    // }}}
	
	function remote_write_handle($finished = false){
		global $error;
		
		// Do we have a remote file ?
		if(empty($this->_orig_tar)){
			return false;
		}
		
		clearstatcache();
		
		// Now is the size exceeding 1 MB
		if(!$finished && filesize($this->_local_tar) < 2097152){
			return false;
		}
		
		// Open the file pointer if not opened
		if(!is_resource($this->remote_fp)){
			$this->remote_fp = fopen($this->_orig_tar, "ab");
			
			if($this->remote_fp == false){
				$error['fopen_failed'] = 'Unable to open in write mode';
				softdie('fopen_failed');
			}
			
			/* // GZip Header
			fputs($this->remote_fp, "\x1F\x8B\x08\x08".pack("V", time())."\0\xFF");
			
			// Filename
			$oname = str_replace("\0", '', ltrim(basename($this->_orig_tar, '.gz'), '.'));
			fwrite($this->remote_fp, $oname."\0", 1+strlen($oname));
			
			// Create Stream
			$this->remote_fp_filter = stream_filter_append($this->remote_fp, "zlib.deflate", STREAM_FILTER_WRITE, -1);
			$this->remote_hctx = hash_init('crc32b'); */
			
			$this->remote_content_size = 0;			
			if(!empty($GLOBALS['init_pos'])){
				$this->remote_content_size = $GLOBALS['init_pos'];
			}
			
			$GLOBALS['start_pos'] = $this->remote_content_size;
		}
		
		// Close the LOCAL file
		$this->_close();
		
		// Write to remote
		$content = file_get_contents($this->_local_tar);
		$clen = strlen($content);
		
		if(!empty($content)){
			//hash_update($this->remote_hctx, $content); // Update Hash
			fwrite($this->remote_fp, $content, $clen); // Write to the stream
			$this->remote_content_size += $clen; // Update Length
		}
		$content = '';
		
		// Delete Local file
		@unlink($this->_local_tar);
		
		// ReOpen the local tar
		$this->_openWrite();
		
		// If we are done, lets delete this file
		if($finished){
			
			/* // Remove Stream
			stream_filter_remove($this->remote_fp_filter);
			
			// Calculate Hash and write it
			$crc = hash_final($this->remote_hctx, true);
			@fwrite($this->remote_fp, $crc[3].$crc[2].$crc[1].$crc[0], 4);
			
			// Also the size
			@fwrite($this->remote_fp, pack("V", $this->remote_content_size), 4); */
			
			// Close
			@fclose($this->remote_fp);
		}
	}

    // {{{ _readBlock()
    function _readBlock()
    {
      $v_block = null;
      if (is_resource($this->_file)) {
          if ($this->_compress_type == 'gz')
              $v_block = @gzread($this->_file, 512);
          else if ($this->_compress_type == 'bz2')
              $v_block = @bzread($this->_file, 512);
          else if ($this->_compress_type == 'none')
              $v_block = @fread($this->_file, 512);
          else
              $this->_error('Unknown or missing compression type ('
			                .$this->_compress_type.')');
      }
      return $v_block;
    }
    // }}}

    // {{{ _jumpBlock()
    function _jumpBlock($p_len=null)
    {
      if (is_resource($this->_file)) {
          if ($p_len === null)
              $p_len = 1;

          if ($this->_compress_type == 'gz') {
              @gzseek($this->_file, gztell($this->_file)+($p_len*512));
          }
          else if ($this->_compress_type == 'bz2') {
              // ----- Replace missing bztell() and bzseek()
              for ($i=0; $i<$p_len; $i++)
                  $this->_readBlock();
          } else if ($this->_compress_type == 'none')
              @fseek($this->_file, $p_len*512, SEEK_CUR);
          else
              $this->_error('Unknown or missing compression type ('
			                .$this->_compress_type.')');

      }
      return true;
    }
    // }}}

    // {{{ _writeFooter()
    function _writeFooter()
    {
      if (is_resource($this->_file)) {
          // ----- Write the last 0 filled block for end of archive
          $v_binary_data = pack('a1024', '');
		 if(!$this->_writeBlock($v_binary_data, null, true)){
			return false;
		 }
      }
      return true;
    }
    // }}}

    // {{{ _addList()
    function _addList($p_list, $p_add_dir, $p_remove_dir)
    {
	  
      $v_result=true;
      $v_header = array();

      // ----- Remove potential windows directory separator
      $p_add_dir = $this->_translateWinPath($p_add_dir);
      $p_remove_dir = $this->_translateWinPath($p_remove_dir, false);

      if (!$this->_file) {
          $this->_error('Invalid file descriptor');
          return false;
      }

      if (sizeof($p_list) == 0)
          return true;

      foreach ($p_list as $v_filename) {
          if (!$v_result) {
              break;
          }

        // ----- Skip the current tar name
        if ($v_filename == $this->_tarname)
            continue;

        if ($v_filename == '')
            continue;

       	// ----- ignore files and directories matching the ignore regular expression
       	if ($this->_ignore_regexp && preg_match($this->_ignore_regexp, '/'.$v_filename)) {
            $this->_warning("File '$v_filename' ignored");
       	    continue;
       	}

        if (!file_exists($v_filename) && !is_link($v_filename)) {
            $this->_warning("File '$v_filename' does not exist");
            continue;
        }
		
		// ----- break the loop once last file is found...
		if(!empty($GLOBALS['end_file'])){
			break;
		}
		
        // ----- Add the file or directory header
        if (!$this->_addFile($v_filename, $v_header, $p_add_dir, $p_remove_dir))
            return false;

        if (@is_dir($v_filename) && !@is_link($v_filename)) {
            if (!($p_hdir = opendir($v_filename))) {
                $this->_warning("Directory '$v_filename' can not be read");
                continue;
            }
			$p_temp_list = array();
            while (false !== ($p_hitem = readdir($p_hdir))) {
                if (($p_hitem != '.') && ($p_hitem != '..')) {
                    if ($v_filename != "."){
					  //Double slashes were added and caused issue when the backup directory is inside the installation directory.
					  $v_filename = cleanpath($v_filename);
                        $p_temp_list[0] = $v_filename.'/'.$p_hitem;
				  }else{
                        $p_temp_list[0] = $p_hitem;
				  }

					// ----- break the loop once last file is found...
					if(!empty($GLOBALS['end_file'])){
						break;
					}
					
                    $v_result = $this->_addList($p_temp_list,
					                            $p_add_dir,
												$p_remove_dir);
                }
            }

            unset($p_temp_list);
            unset($p_hdir);
            unset($p_hitem);
        }
      }

      return $v_result;
    }
    // }}}

    // {{{ _addFile()
    function _addFile($p_filename, &$p_header, $p_add_dir, $p_remove_dir)
    {
		
		// check last file and skip the files that have been already backed up...
		if(!empty($GLOBALS['last_file']) && $GLOBALS['start'] == 0){
			if(preg_match('#^'.$GLOBALS['last_file'].'$#', $p_filename)){
				$GLOBALS['start'] = 1; // give a jump start once the last backed up file is found..
			}
			return true; //return true to skip files
		}
				
      if (!$this->_file) {
          $this->_error('Invalid file descriptor');
          return false;
      }

      if ($p_filename == '') {
          $this->_error('Invalid file name');
          return false;
      }

      // ----- Calculate the stored filename
      $p_filename = $this->_translateWinPath($p_filename, false);
      $v_stored_filename = $p_filename;
      if (strcmp($p_filename, $p_remove_dir) == 0) {
          return true;
      }
	  
	// Match filename to be excluded as provided by script
	  foreach($GLOBALS['settings']['exclude_files'] as $ek => $ev){
		if(empty($GLOBALS['doing_soft_files']) && !empty($ev) && preg_match('#^'.$ev.'#', $p_filename)){
			return true;
		}
	  }
	
      if ($p_remove_dir != '') {
          if (substr($p_remove_dir, -1) != '/')
              $p_remove_dir .= '/';

          if (substr($p_filename, 0, strlen($p_remove_dir)) == $p_remove_dir)
              $v_stored_filename = substr($p_filename, strlen($p_remove_dir));
      }
      $v_stored_filename = $this->_translateWinPath($v_stored_filename);
      if ($p_add_dir != '') {
          if (substr($p_add_dir, -1) == '/')
              $v_stored_filename = $p_add_dir.$v_stored_filename;
          else
              $v_stored_filename = $p_add_dir.'/'.$v_stored_filename;
      }

      $v_stored_filename = $this->_pathReduction($v_stored_filename);

      if ($this->_isArchive($p_filename)) {
          if (($v_file = @fopen($p_filename, "rb")) == 0) {
              $this->_warning("Unable to open file '".$p_filename
			                  ."' in binary read mode");
              return true;
          }

          if (!$this->_writeHeader($p_filename, $v_stored_filename))
              return false;

          while (($v_buffer = fread($v_file, 512)) != '') {
              $v_binary_data = pack("a512", "$v_buffer");
              if(!$this->_writeBlock($v_binary_data)){
				return false;
			 }
          }

          fclose($v_file);

      } else {
          // ----- Only header for dir
          if (!$this->_writeHeader($p_filename, $v_stored_filename))
              return false;
      }
	  
	  // We can run the scripts for the end time already set
	  if(time() >= $GLOBALS['end']){ 
	  	$GLOBALS['end_file'] = $p_filename; // set end file so that we know where to start from
	  }
	  
      return true;
    }
    // }}}

    // {{{ _addString()
    function _addString($p_filename, $p_string)
    {
      if (!$this->_file) {
          $this->_error('Invalid file descriptor');
          return false;
      }

      if ($p_filename == '') {
          $this->_error('Invalid file name');
          return false;
      }

      // ----- Calculate the stored filename
      $p_filename = $this->_translateWinPath($p_filename, false);

      if (!$this->_writeHeaderBlock($p_filename, strlen($p_string),
	                                  time(), 384, "", 0, 0))
          return false;

      $i=0;
      while (($v_buffer = substr($p_string, (($i++)*512), 512)) != '') {
          $v_binary_data = pack("a512", $v_buffer);
          if(!$this->_writeBlock($v_binary_data)){
			return false;
		 }
      }

      return true;
    }
    // }}}

    // {{{ _writeHeader()
    function _writeHeader($p_filename, $p_stored_filename)
    {
        if ($p_stored_filename == '')
            $p_stored_filename = $p_filename;
        $v_reduce_filename = $this->_pathReduction($p_stored_filename);
		
		
		//echo $v_reduce_filename." - ";
 
		$v_reduce_filename = str_replace($GLOBALS['replace']['from'], $GLOBALS['replace']['to'], $v_reduce_filename);
		
		//echo $v_reduce_filename."<br />";

        if (strlen($v_reduce_filename) > 99) {
          if (!$this->_writeLongHeader($v_reduce_filename))
            return false;
        }
		 
		 // We need to do this before lstat() because after we write this the filesize of the softperms file will change
		 // We have to write the entries for datadir permissions softdatadir/softperms.txt
		if (isset($GLOBALS['bfh']['datadir_softperms']) && preg_match('/'.preg_quote($GLOBALS['replace']['from']['softdatadir'], '/').'/is', $p_filename)) {
			
			//echo $v_reduce_filename.' - '.trim(substr($v_reduce_filename, 12), '/').'<br />';
			
			fwrite($GLOBALS['bfh']['datadir_softperms'], trim(substr($v_reduce_filename, 12), '/')." ". (substr(sprintf('%o', fileperms($p_filename)), -4)) ."\n");

		// We have to write the entries for wwwdir permissions softwwwdir/softperms.txt
		}elseif (isset($GLOBALS['bfh']['wwwdir_softperms']) && preg_match('/'.preg_quote($GLOBALS['replace']['from']['wwwdir'], '/').'/is', $p_filename)) {
			
			//echo $v_reduce_filename.' - '.trim(substr($v_reduce_filename, 7), '/').'<br />';
			
			fwrite($GLOBALS['bfh']['wwwdir_softperms'], trim(substr($v_reduce_filename, 7), '/')." ". (substr(sprintf('%o', fileperms($p_filename)), -4)) ."\n");

		// We have to write the entries in softperms.txt
		}elseif (isset($GLOBALS['bfh']['softperms']) && preg_match('/'.preg_quote($GLOBALS['replace']['from']['softpath'], '/').'/is', $p_filename)) {
			fwrite($GLOBALS['bfh']['softperms'], trim($v_reduce_filename, '/')." ".(!empty($v_linkname) ? "linkto=".rtrim($v_linkname, '/')." " : ""). (substr(sprintf('%o', fileperms($p_filename)), -4)) ."\n"); 

		}
		
		// To make sure we have the correct data after the file is written above
		clearstatcache();
		
        $v_info = lstat($p_filename);
        $v_uid = sprintf("%07s", DecOct($v_info[4]));
        $v_gid = sprintf("%07s", DecOct($v_info[5]));
        $v_perms = sprintf("%07s", DecOct($v_info['mode'] & 000777));

        $v_mtime = sprintf("%011s", DecOct($v_info['mtime']));

        $v_linkname = '';

        if (@is_link($p_filename)) {
          $v_typeflag = '2';
          $v_linkname = readlink($p_filename);
          $v_size = sprintf("%011s", DecOct(0));
        } elseif (@is_dir($p_filename)) {
          $v_typeflag = "5";
          $v_size = sprintf("%011s", DecOct(0));
        } else {
          $v_typeflag = '0';
          clearstatcache();
          $v_size = sprintf("%011s", DecOct($v_info['size']));
        }
		
        $v_magic = 'ustar ';

        $v_version = ' ';
        
        if (function_exists('posix_getpwuid'))
        {
          $userinfo = posix_getpwuid($v_info[4]);
          $groupinfo = posix_getgrgid($v_info[5]);
          
          $v_uname = $userinfo['name'];
          $v_gname = $groupinfo['name'];
        }
        else
        {
          $v_uname = '';
          $v_gname = '';
        }

        $v_devmajor = '';

        $v_devminor = '';

        $v_prefix = '';
        $v_linkname = ''; // This is empty because we will create symlinks with our restore utility using softperms.txt

        $v_binary_data_first = pack("a100a8a8a8a12a12",
		                            $v_reduce_filename, $v_perms, $v_uid,
									$v_gid, $v_size, $v_mtime);
        $v_binary_data_last = pack("a1a100a6a2a32a32a8a8a155a12",
		                           $v_typeflag, $v_linkname, $v_magic,
								   $v_version, $v_uname, $v_gname,
								   $v_devmajor, $v_devminor, $v_prefix, '');

        // ----- Calculate the checksum
        $v_checksum = 0;
        // ..... First part of the header
        for ($i=0; $i<148; $i++)
            $v_checksum += ord(substr($v_binary_data_first,$i,1));
        // ..... Ignore the checksum value and replace it by ' ' (space)
        for ($i=148; $i<156; $i++)
            $v_checksum += ord(' ');
        // ..... Last part of the header
        for ($i=156, $j=0; $i<512; $i++, $j++)
            $v_checksum += ord(substr($v_binary_data_last,$j,1));

        // ----- Write the first 148 bytes of the header in the archive
        if(!$this->_writeBlock($v_binary_data_first, 148)){
			return false;
	    }

        // ----- Write the calculated checksum
        $v_checksum = sprintf("%06s ", DecOct($v_checksum));
        $v_binary_data = pack("a8", $v_checksum);
        if(!$this->_writeBlock($v_binary_data, 8)){
			return false;
	    }

        // ----- Write the last 356 bytes of the header in the archive
        if(!$this->_writeBlock($v_binary_data_last, 356)){
			return false;
	    }

        return true;
    }
    // }}}

    // {{{ _writeHeaderBlock()
    function _writeHeaderBlock($p_filename, $p_size, $p_mtime=0, $p_perms=0,
	                           $p_type='', $p_uid=0, $p_gid=0)
    {
        $p_filename = $this->_pathReduction($p_filename);

        if (strlen($p_filename) > 99) {
          if (!$this->_writeLongHeader($p_filename))
            return false;
        }

        if ($p_type == "5") {
          $v_size = sprintf("%011s", DecOct(0));
        } else {
          $v_size = sprintf("%011s", DecOct($p_size));
        }

        $v_uid = sprintf("%07s", DecOct($p_uid));
        $v_gid = sprintf("%07s", DecOct($p_gid));
        $v_perms = sprintf("%07s", DecOct($p_perms & 000777));

        $v_mtime = sprintf("%11s", DecOct($p_mtime));

        $v_linkname = '';

        $v_magic = 'ustar ';

        $v_version = ' ';

        if (function_exists('posix_getpwuid'))
        {
          $userinfo = posix_getpwuid($p_uid);
          $groupinfo = posix_getgrgid($p_gid);
          
          $v_uname = $userinfo['name'];
          $v_gname = $groupinfo['name'];
        }
        else
        {
          $v_uname = '';
          $v_gname = '';
        }
        
        $v_devmajor = '';

        $v_devminor = '';

        $v_prefix = '';

        $v_binary_data_first = pack("a100a8a8a8a12A12",
		                            $p_filename, $v_perms, $v_uid, $v_gid,
									$v_size, $v_mtime);
        $v_binary_data_last = pack("a1a100a6a2a32a32a8a8a155a12",
		                           $p_type, $v_linkname, $v_magic,
								   $v_version, $v_uname, $v_gname,
								   $v_devmajor, $v_devminor, $v_prefix, '');

        // ----- Calculate the checksum
        $v_checksum = 0;
        // ..... First part of the header
        for ($i=0; $i<148; $i++)
            $v_checksum += ord(substr($v_binary_data_first,$i,1));
        // ..... Ignore the checksum value and replace it by ' ' (space)
        for ($i=148; $i<156; $i++)
            $v_checksum += ord(' ');
        // ..... Last part of the header
        for ($i=156, $j=0; $i<512; $i++, $j++)
            $v_checksum += ord(substr($v_binary_data_last,$j,1));

        // ----- Write the first 148 bytes of the header in the archive
        if(!$this->_writeBlock($v_binary_data_first, 148)){
			return false;
		}

        // ----- Write the calculated checksum
        $v_checksum = sprintf("%06s ", DecOct($v_checksum));
        $v_binary_data = pack("a8", $v_checksum);
        if(!$this->_writeBlock($v_binary_data, 8)){
			return false;
		}

        // ----- Write the last 356 bytes of the header in the archive
        if(!$this->_writeBlock($v_binary_data_last, 356)){
			return false;
		}

        return true;
    }
    // }}}

    // {{{ _writeLongHeader()
    function _writeLongHeader($p_filename)
    {
        $v_size = sprintf("%11s ", DecOct(strlen($p_filename)));

        $v_typeflag = 'L';

        $v_linkname = '';

        $v_magic = '';

        $v_version = '';

        $v_uname = '';

        $v_gname = '';

        $v_devmajor = '';

        $v_devminor = '';

        $v_prefix = '';

        $v_binary_data_first = pack("a100a8a8a8a12a12",
		                            '././@LongLink', 0, 0, 0, $v_size, 0);
        $v_binary_data_last = pack("a1a100a6a2a32a32a8a8a155a12",
		                           $v_typeflag, $v_linkname, $v_magic,
								   $v_version, $v_uname, $v_gname,
								   $v_devmajor, $v_devminor, $v_prefix, '');

        // ----- Calculate the checksum
        $v_checksum = 0;
        // ..... First part of the header
        for ($i=0; $i<148; $i++)
            $v_checksum += ord(substr($v_binary_data_first,$i,1));
        // ..... Ignore the checksum value and replace it by ' ' (space)
        for ($i=148; $i<156; $i++)
            $v_checksum += ord(' ');
        // ..... Last part of the header
        for ($i=156, $j=0; $i<512; $i++, $j++)
            $v_checksum += ord(substr($v_binary_data_last,$j,1));

        // ----- Write the first 148 bytes of the header in the archive
        if(!$this->_writeBlock($v_binary_data_first, 148)){
			return false;
		}

        // ----- Write the calculated checksum
        $v_checksum = sprintf("%06s ", DecOct($v_checksum));
        $v_binary_data = pack("a8", $v_checksum);
        if(!$this->_writeBlock($v_binary_data, 8)){
			return false;
		}

        // ----- Write the last 356 bytes of the header in the archive
        if(!$this->_writeBlock($v_binary_data_last, 356)){
			return false;
		}

        // ----- Write the filename as content of the block
        $i=0;
        while (($v_buffer = substr($p_filename, (($i++)*512), 512)) != '') {
            $v_binary_data = pack("a512", "$v_buffer");
            if(!$this->_writeBlock($v_binary_data)){
				return false;
			}
        }

        return true;
    }
    // }}}

    // {{{ _readHeader()
    function _readHeader($v_binary_data, &$v_header)
    {
        if (strlen($v_binary_data)==0) {
            $v_header['filename'] = '';
            return true;
        }

        if (strlen($v_binary_data) != 512) {
            $v_header['filename'] = '';
            $this->_error('Invalid block size : '.strlen($v_binary_data));
            return false;
        }

        if (!is_array($v_header)) {
            $v_header = array();
        }
        // ----- Calculate the checksum
        $v_checksum = 0;
        // ..... First part of the header
        for ($i=0; $i<148; $i++)
            $v_checksum+=ord(substr($v_binary_data,$i,1));
        // ..... Ignore the checksum value and replace it by ' ' (space)
        for ($i=148; $i<156; $i++)
            $v_checksum += ord(' ');
        // ..... Last part of the header
        for ($i=156; $i<512; $i++)
           $v_checksum+=ord(substr($v_binary_data,$i,1));

		if (version_compare(PHP_VERSION, "5.5.0-dev") < 0) {
            $fmt = "a100filename/a8mode/a8uid/a8gid/a12size/a12mtime/" .
                "a8checksum/a1typeflag/a100link/a6magic/a2version/" .
                "a32uname/a32gname/a8devmajor/a8devminor/a131prefix";
        } else {
            $fmt = "Z100filename/Z8mode/Z8uid/Z8gid/Z12size/Z12mtime/" .
                "Z8checksum/Z1typeflag/Z100link/Z6magic/Z2version/" .
                "Z32uname/Z32gname/Z8devmajor/Z8devminor/Z131prefix";
        }
        $v_data = unpack($fmt, $v_binary_data);
                         
        if (strlen($v_data["prefix"]) > 0) {
            $v_data["filename"] = "$v_data[prefix]/$v_data[filename]";
        }

        // ----- Extract the checksum
        $v_header['checksum'] = OctDec(trim($v_data['checksum']));
        if ($v_header['checksum'] != $v_checksum) {
            $v_header['filename'] = '';

            // ----- Look for last block (empty block)
            if (($v_checksum == 256) && ($v_header['checksum'] == 0))
                return true;

            $this->_error('Invalid checksum for file "'.$v_data['filename']
			              .'" : '.$v_checksum.' calculated, '
						  .$v_header['checksum'].' expected');
            return false;
        }

        // ----- Extract the properties
        $v_header['filename'] = $v_data['filename'];
        if ($this->_maliciousFilename($v_header['filename'])) {
            $this->_error('Malicious .tar detected, file "' . $v_header['filename'] .
                '" will not install in desired directory tree');
            return false;
        }
        $v_header['mode'] = OctDec(trim($v_data['mode']));
        $v_header['uid'] = OctDec(trim($v_data['uid']));
        $v_header['gid'] = OctDec(trim($v_data['gid']));
        $v_header['size'] = OctDec(trim($v_data['size']));
        $v_header['mtime'] = OctDec(trim($v_data['mtime']));
        if (($v_header['typeflag'] = $v_data['typeflag']) == "5") {
          $v_header['size'] = 0;
        }
        $v_header['link'] = trim($v_data['link']);

        return true;
    }
    // }}}

    // {{{ _maliciousFilename()
    function _maliciousFilename($file)
    {
        if (strpos($file, '/../') !== false) {
            return true;
        }
        if (strpos($file, '../') === 0) {
            return true;
        }
        return false;
    }
    // }}}

    // {{{ _readLongHeader()
    function _readLongHeader(&$v_header)
    {
      $v_filename = '';
      $n = floor($v_header['size']/512);
      for ($i=0; $i<$n; $i++) {
        $v_content = $this->_readBlock();
        $v_filename .= $v_content;
      }
      if (($v_header['size'] % 512) != 0) {
        $v_content = $this->_readBlock();
        $v_filename .= trim($v_content);
      }

      // ----- Read the next header
      $v_binary_data = $this->_readBlock();

      if (!$this->_readHeader($v_binary_data, $v_header))
        return false;

      $v_filename = trim($v_filename);
      $v_header['filename'] = $v_filename;
        if ($this->_maliciousFilename($v_filename)) {
            $this->_error('Malicious .tar detected, file "' . $v_filename .
                '" will not install in desired directory tree');
            return false;
      }

      return true;
    }
    // }}}

    // {{{ _extractInString()
    function _extractInString($p_filename)
    {
        $v_result_str = "";

        While (strlen($v_binary_data = $this->_readBlock()) != 0)
        {
          if (!$this->_readHeader($v_binary_data, $v_header))
            return null;

          if ($v_header['filename'] == '')
            continue;

          // ----- Look for long filename
          if ($v_header['typeflag'] == 'L') {
            if (!$this->_readLongHeader($v_header))
              return null;
          }

          if ($v_header['filename'] == $p_filename) {
              if ($v_header['typeflag'] == "5") {
                  $this->_error('Unable to extract in string a directory '
				                .'entry {'.$v_header['filename'].'}');
                  return null;
              } else {
                  $n = floor($v_header['size']/512);
                  for ($i=0; $i<$n; $i++) {
                      $v_result_str .= $this->_readBlock();
                  }
                  if (($v_header['size'] % 512) != 0) {
                      $v_content = $this->_readBlock();
                      $v_result_str .= substr($v_content, 0,
					                          ($v_header['size'] % 512));
                  }
                  return $v_result_str;
              }
          } else {
              $this->_jumpBlock(ceil(($v_header['size']/512)));
          }
        }

        return null;
    }
    // }}}

    // {{{ _extractList()
    function _extractList($p_path, &$p_list_detail, $p_mode,
                          $p_file_list, $p_remove_path, $p_preserve=false)
    {
    $v_result=true;
    $v_nb = 0;
    $v_extract_all = true;
    $v_listing = false;

    $p_path = $this->_translateWinPath($p_path, false);
    if ($p_path == '' || (substr($p_path, 0, 1) != '/'
	    && substr($p_path, 0, 3) != "../" && !strpos($p_path, ':'))) {
      $p_path = "./".$p_path;
    }
    $p_remove_path = $this->_translateWinPath($p_remove_path);

    // ----- Look for path to remove format (should end by /)
    if (($p_remove_path != '') && (substr($p_remove_path, -1) != '/'))
      $p_remove_path .= '/';
    $p_remove_path_size = strlen($p_remove_path);

    switch ($p_mode) {
      case "complete" :
        $v_extract_all = true;
        $v_listing = false;
      break;
      case "partial" :
          $v_extract_all = false;
          $v_listing = false;
      break;
      case "list" :
          $v_extract_all = false;
          $v_listing = true;
      break;
      default :
        $this->_error('Invalid extract mode ('.$p_mode.')');
        return false;
    }

    clearstatcache();

    while (strlen($v_binary_data = $this->_readBlock()) != 0)
    {
      $v_extract_file = FALSE;
      $v_extraction_stopped = 0;

      if (!$this->_readHeader($v_binary_data, $v_header))
        return false;

      if ($v_header['filename'] == '') {
        continue;
      }

      // ----- Look for long filename
      if ($v_header['typeflag'] == 'L') {
        if (!$this->_readLongHeader($v_header))
          return false;
      }

      if ((!$v_extract_all) && (is_array($p_file_list))) {
        // ----- By default no unzip if the file is not found
        $v_extract_file = false;

        for ($i=0; $i<sizeof($p_file_list); $i++) {
          // ----- Look if it is a directory
          if (substr($p_file_list[$i], -1) == '/') {
            // ----- Look if the directory is in the filename path
            if ((strlen($v_header['filename']) > strlen($p_file_list[$i]))
			    && (substr($v_header['filename'], 0, strlen($p_file_list[$i]))
				    == $p_file_list[$i])) {
              $v_extract_file = true;
              break;
            }
          }

          // ----- It is a file, so compare the file names
          elseif ($p_file_list[$i] == $v_header['filename']) {
            $v_extract_file = true;
            break;
          }
        }
      } else {
        $v_extract_file = true;
      }

      // ----- Look if this file need to be extracted
      if (($v_extract_file) && (!$v_listing))
      {
        if (($p_remove_path != '')
            && (substr($v_header['filename'], 0, $p_remove_path_size)
			    == $p_remove_path))
          $v_header['filename'] = substr($v_header['filename'],
		                                 $p_remove_path_size);
        if (($p_path != './') && ($p_path != '/')) {
          while (substr($p_path, -1) == '/')
            $p_path = substr($p_path, 0, strlen($p_path)-1);

          if (substr($v_header['filename'], 0, 1) == '/')
              $v_header['filename'] = $p_path.$v_header['filename'];
          else
            $v_header['filename'] = $p_path.'/'.$v_header['filename'];
        }
        if (file_exists($v_header['filename'])) {
          if (   (@is_dir($v_header['filename']))
		      && ($v_header['typeflag'] == '')) {
            $this->_error('File '.$v_header['filename']
			              .' already exists as a directory');
            return false;
          }
          if (   ($this->_isArchive($v_header['filename']))
		      && ($v_header['typeflag'] == "5")) {
            $this->_error('Directory '.$v_header['filename']
			              .' already exists as a file');
            return false;
          }
          if (!is_writeable($v_header['filename'])) {
			//We cannot use $globals['ofc'] here and after restoring the files we are anyways changing the file's permissions according to the perms file. Therefore, using 0644/0755 directly here shouldn't be an issue.
			if(is_dir($v_header['filename'])){
				$chmod = chmod($v_header['filename'], 0755);
			}else{
				$chmod = chmod($v_header['filename'], 0644);
			}
			if (!is_writeable($v_header['filename'])) {
				$this->_error('File '.$v_header['filename']
			              .' already exists and is write protected');
				return false;
			}
          }
          if (filemtime($v_header['filename']) > $v_header['mtime']) {
            // To be completed : An error or silent no replace ?
          }
        }

        // ----- Check the directory availability and create it if necessary
        elseif (($v_result
		         = $this->_dirCheck(($v_header['typeflag'] == "5"
				                    ?$v_header['filename']
									:dirname($v_header['filename'])))) != 1) {
            $this->_error('Unable to create path for '.$v_header['filename']);
            return false;
        }

        if ($v_extract_file) {
          if ($v_header['typeflag'] == "5") {
            if (!@file_exists($v_header['filename'])) {
                if (!@mkdir($v_header['filename'], 0777)) {
                    $this->_error('Unable to create directory {'
					              .$v_header['filename'].'}');
                    return false;
                }
            }
          } elseif ($v_header['typeflag'] == "2") {
              if (@file_exists($v_header['filename'])) {
                  @unlink($v_header['filename']);
              }
              if (!@symlink($v_header['link'], $v_header['filename'])) {
                  $this->_error('Unable to extract symbolic link {'
                                .$v_header['filename'].'}');
                  return false;
              }
          } else {
              if (($v_dest_file = @fopen($v_header['filename'], "wb")) == 0) {
                  $this->_error('Error while opening {'.$v_header['filename']
				                .'} in write binary mode');
                  return false;
              } else {
                  $n = floor($v_header['size']/512);
                  for ($i=0; $i<$n; $i++) {
                      $v_content = $this->_readBlock();
                      fwrite($v_dest_file, $v_content, 512);
                  }
            if (($v_header['size'] % 512) != 0) {
              $v_content = $this->_readBlock();
              fwrite($v_dest_file, $v_content, ($v_header['size'] % 512));
            }

            @fclose($v_dest_file);
            
            if ($p_preserve) {
                @chown($v_header['filename'], $v_header['uid']);
                @chgrp($v_header['filename'], $v_header['gid']);
            }

            // ----- Change the file mode, mtime
            @touch($v_header['filename'], $v_header['mtime']);
            if ($v_header['mode'] & 0111) {
                // make file executable, obey umask
                $mode = fileperms($v_header['filename']) | (~umask() & 0111);
                @chmod($v_header['filename'], $mode);
            }
          }

          // ----- Check the file size
          clearstatcache();
          if (!is_file($v_header['filename'])) {
              $this->_error('Extracted file '.$v_header['filename']
                            .'does not exist. Archive may be corrupted.');
              return false;
          }
          
          $filesize = filesize($v_header['filename']);
          if ($filesize != $v_header['size']) {
              $this->_error('Extracted file '.$v_header['filename']
                            .' does not have the correct file size \''
                            .$filesize
                            .'\' ('.$v_header['size']
                            .' expected). Archive may be corrupted.');
              return false;
          }
          }
        } else {
          $this->_jumpBlock(ceil(($v_header['size']/512)));
        }
      } else {
          $this->_jumpBlock(ceil(($v_header['size']/512)));
      }

      if ($v_listing || $v_extract_file || $v_extraction_stopped) {
        // ----- Log extracted files
        if (($v_file_dir = dirname($v_header['filename']))
		    == $v_header['filename'])
          $v_file_dir = '';
        if ((substr($v_header['filename'], 0, 1) == '/') && ($v_file_dir == ''))
          $v_file_dir = '/';

        // Only if we are to return the list i.e. in listContent() then we fill full $v_header else we just need the count
        $p_list_detail[$v_nb++] = (!empty($v_listing) ? $v_header : '');
        if (is_array($p_file_list) && (count($p_list_detail) == count($p_file_list))) {
            return true;
        }
      }
    }

        return true;
    }
    // }}}

    // {{{ _openAppend()
    function _openAppend()
    {
        if (filesize($this->_tarname) == 0)
          return $this->_openWrite();

        if ($this->_compress) {
            $this->_close();

            if (!@rename($this->_tarname, $this->_tarname.".tmp")) {
                $this->_error('Error while renaming \''.$this->_tarname
				              .'\' to temporary file \''.$this->_tarname
							  .'.tmp\'');
                return false;
            }

            if ($this->_compress_type == 'gz')
                $v_temp_tar = @gzopen($this->_tarname.".tmp", "rb");
            elseif ($this->_compress_type == 'bz2')
                $v_temp_tar = @bzopen($this->_tarname.".tmp", "r");

            if ($v_temp_tar == 0) {
                $this->_error('Unable to open file \''.$this->_tarname
				              .'.tmp\' in binary read mode');
                @rename($this->_tarname.".tmp", $this->_tarname);
                return false;
            }

            if (!$this->_openWrite()) {
                @rename($this->_tarname.".tmp", $this->_tarname);
                return false;
            }

            if ($this->_compress_type == 'gz') {
                $end_blocks = 0;
                
                while (!@gzeof($v_temp_tar)) {
                    $v_buffer = @gzread($v_temp_tar, 512);
                    if ($v_buffer == ARCHIVE_TAR_END_BLOCK || strlen($v_buffer) == 0) {
                        $end_blocks++;
                        // do not copy end blocks, we will re-make them
                        // after appending
                        continue;
                    } elseif ($end_blocks > 0) {
                        for ($i = 0; $i < $end_blocks; $i++) {
                            if(!$this->_writeBlock(ARCHIVE_TAR_END_BLOCK)){
								return false;
						  }
                        }
                        $end_blocks = 0;
                    }
                    $v_binary_data = pack("a512", $v_buffer);
                    if(!$this->_writeBlock($v_binary_data)){
						return false;
				  }
                }

                @gzclose($v_temp_tar);
            }
            elseif ($this->_compress_type == 'bz2') {
                $end_blocks = 0;
                
                while (strlen($v_buffer = @bzread($v_temp_tar, 512)) > 0) {
                    if ($v_buffer == ARCHIVE_TAR_END_BLOCK || strlen($v_buffer) == 0) {
                        $end_blocks++;
                        // do not copy end blocks, we will re-make them
                        // after appending
                        continue;
                    } elseif ($end_blocks > 0) {
                        for ($i = 0; $i < $end_blocks; $i++) {
                            if(!$this->_writeBlock(ARCHIVE_TAR_END_BLOCK)){
							return false;
						  }
                        }
                        $end_blocks = 0;
                    }
                    $v_binary_data = pack("a512", $v_buffer);
                    if(!$this->_writeBlock($v_binary_data)){
					return false;
				  }
                }

                @bzclose($v_temp_tar);
            }

            if (!@unlink($this->_tarname.".tmp")) {
                $this->_error('Error while deleting temporary file \''
				              .$this->_tarname.'.tmp\'');
            }

        } else {
            // ----- For not compressed tar, just add files before the last
			//       one or two 512 bytes block
            if (!$this->_openReadWrite())
               return false;

            clearstatcache();
            $v_size = filesize($this->_tarname);

            // We might have zero, one or two end blocks.
            // The standard is two, but we should try to handle
            // other cases.
            fseek($this->_file, $v_size - 1024);
            if (fread($this->_file, 512) == ARCHIVE_TAR_END_BLOCK) {
                fseek($this->_file, $v_size - 1024);
            }
            elseif (fread($this->_file, 512) == ARCHIVE_TAR_END_BLOCK) {
                fseek($this->_file, $v_size - 512);
            }
        }

        return true;
    }
    // }}}

    // {{{ _append()
    function _append($p_filelist, $p_add_dir='', $p_remove_dir='')
    {
        if (!$this->_openAppend())
            return false;

        if ($this->_addList($p_filelist, $p_add_dir, $p_remove_dir))
           $this->_writeFooter();

        $this->_close();

        return true;
    }
    // }}}

    // {{{ _dirCheck()
    function _dirCheck($p_dir)
    {
        clearstatcache();
        if ((@is_dir($p_dir)) || ($p_dir == ''))
            return true;

        $p_parent_dir = dirname($p_dir);

        if (($p_parent_dir != $p_dir) &&
            ($p_parent_dir != '') &&
            (!$this->_dirCheck($p_parent_dir)))
             return false;

        if (!@mkdir($p_dir, 0777)) {
            $this->_error("Unable to create directory '$p_dir'");
            return false;
        }

        return true;
    }

    // }}}

    // {{{ _pathReduction()
    function _pathReduction($p_dir)
    {
        $v_result = '';

        // ----- Look for not empty path
        if ($p_dir != '') {
            // ----- Explode path by directory names
            $v_list = explode('/', $p_dir);

            // ----- Study directories from last to first
            for ($i=sizeof($v_list)-1; $i>=0; $i--) {
                // ----- Look for current path
                if ($v_list[$i] == ".") {
                    // ----- Ignore this directory
                    // Should be the first $i=0, but no check is done
                }
                else if ($v_list[$i] == "..") {
                    // ----- Ignore it and ignore the $i-1
                    $i--;
                }
                else if (   ($v_list[$i] == '')
				         && ($i!=(sizeof($v_list)-1))
						 && ($i!=0)) {
                    // ----- Ignore only the double '//' in path,
                    // but not the first and last /
                } else {
                    $v_result = $v_list[$i].($i!=(sizeof($v_list)-1)?'/'
					            .$v_result:'');
                }
            }
        }
        
        if (defined('OS_WINDOWS') && OS_WINDOWS) {
            $v_result = strtr($v_result, '\\', '/');
        }
        
        return $v_result;
    }

    // }}}

    // {{{ _translateWinPath()
    function _translateWinPath($p_path, $p_remove_disk_letter=true)
    {
      if (defined('OS_WINDOWS') && OS_WINDOWS) {
          // ----- Look for potential disk letter
          if (   ($p_remove_disk_letter)
		      && (($v_position = strpos($p_path, ':')) != false)) {
              $p_path = substr($p_path, $v_position+1);
          }
          // ----- Change potential windows directory separator
          if ((strpos($p_path, '\\') > 0) || (substr($p_path, 0,1) == '\\')) {
              $p_path = strtr($p_path, '\\', '/');
          }
      }
      return $p_path;
    }
    // }}}
}

error_reporting(E_ALL);

function rmdir_recursive_fn($path){
	
	$path = (substr($path, -1) == '/' || substr($path, -1) == '\\' ? $path : $path.'/');
	
	resetfilelist();
	
	$files = filelist_fn($path, 1, 0, 'all');
	$files = (!is_array($files) ? array() : $files);
	
	//First delete the files only
	foreach($files as $k => $v){
		@chmod($k, 0777);
		if(file_exists($k) && is_file($k) && @filetype($k) == "file"){
			@unlink($k);
		}
	}
	
	@clearstatcache();
	
	$folders = filelist_fn($path, 1, 1, 'all');
	$folders = (!is_array($folders) ? array() : $folders);
	@krsort($folders);

	//Now Delete the FOLDERS
	foreach($folders as $k => $v){
		@chmod($k, 0777);
		if(is_dir($k)){
			@rmdir($k);
		}
	}
	
	@rmdir($path);
	
	@clearstatcache();

}

function filelist_fn($startdir="./", $searchSubdirs=1, $directoriesonly=0, $maxlevel="all", $level=1, $reset = 1) {
   //list the directory/file names that you want to ignore
   $ignoredDirectory[] = ".";
   $ignoredDirectory[] = "..";
   $ignoredDirectory[] = "_vti_cnf";
   global $directorylist;    //initialize global array
   
   if(substr($startdir, -1) != '/'){
		$startdir = $startdir.'/';
	}
   
   if (is_dir($startdir)) {
       if ($dh = opendir($startdir)) {
           while (($file = readdir($dh)) !== false) {
               if (!(array_search($file,$ignoredDirectory) > -1)) {
                 if (@filetype($startdir . $file) == "dir") {
                     
					   //build your directory array however you choose;
                       //add other file details that you want.
					   
                       $directorylist[$startdir . $file]['level'] = $level;
                       $directorylist[$startdir . $file]['dir'] = 1;
                       $directorylist[$startdir . $file]['name'] = $file;
                       $directorylist[$startdir . $file]['path'] = $startdir;
                       if ($searchSubdirs) {
                           if ((($maxlevel) == "all") or ($maxlevel > $level)) {
                               filelist_fn($startdir . $file . "/", $searchSubdirs, $directoriesonly, $maxlevel, ($level + 1), 0);
                           }
                       }
					  
					   
                   } else {
                       if (!$directoriesonly) {
					     
					  //  echo substr(strrchr($file, "."), 1);
                           //if you want to include files; build your file array 
                           //however you choose; add other file details that you want.
                         $directorylist[$startdir . $file]['level'] = $level;
                         $directorylist[$startdir . $file]['dir'] = 0;
                         $directorylist[$startdir . $file]['name'] = $file;
                         $directorylist[$startdir . $file]['path'] = $startdir;
						  
					 
     }}}}
           closedir($dh);
}}

if(!empty($reset)){
	$r = $directorylist;
	$directorylist = array();
	return($r);
}
}

function tar_archive($tarname, $file_list, $handle_remote = false){
	global $globals;
	
	$tar_archive = new softtar($tarname, '', $handle_remote);
	
	$res = $tar_archive->createModify($file_list, '', '');
	
	if(!$res){
		return false;	
	}
	
	return true;
}

function resetfilelist(){
global $directorylist;
	$directorylist = array();
}

function softdie($txt, $l_file = ''){
	
	global $data, $can_write;
	
	$array = array();
	$array['settings'] = $GLOBALS['settings'];
	$array['result'] = $txt;
	$array['data'] = $GLOBALS['data'];
	
	// Add last backed up file to the array if the process is still INCOMPLETE
	if(!empty($l_file)){
		$array['l_file'] = $l_file;
		
		if(!empty($GLOBALS['init_data'])){
			$array['init_data'] = $GLOBALS['init_data'];
		}
		
		if(!empty($GLOBALS['start_pos'])){
			$array['init_pos'] = $GLOBALS['start_pos'];
		}
	}
	
	if($txt == 'DONE'){
		$array['size'] = filesize($GLOBALS['successfile']);
		
		/////Temp solution for non-suphp servers
		if(!$can_write){
			$array['cant_write'] = 1;
		}
	}
	
	// Was there an error ?
	if(!empty($GLOBALS['error'])){
		$array['error'] = $GLOBALS['error'];
	}
	
	echo '<aefer>'.base64_encode(serialize($array)).'</aefer>';die();
}

// Clean the Backup files
function backup_clean($data){
	
	foreach($GLOBALS['bfh'] as $v){
		@fclose($v);
	}
	
	// Delete tmp/ folder only if the process was completed
	if(empty($GLOBALS['end_file'])){
		rmdir_recursive_fn($data['path'].'/tmp/'.$data['name']);
	}
	
	if(file_exists($data['softpath'].'/softver.txt')){
		@unlink($data['softpath'].'/softver.txt');
	}
	
	return false;
	
}

function optGET($name, $default = ''){

global $error;

	//Check the GETED NAME was GETed
	if(isset($_GET[$name])){
	
		return inputsec(htmlizer(trim($_GET[$name])));
		
	}else{
		
		return $default;
	
	}

}

function inputsec($string){

	if(!get_magic_quotes_gpc()){
	
		$string = addslashes($string);
	
	}else{
	
		$string = stripslashes($string);
		$string = addslashes($string);
	
	}
	
	// This is to replace ` which can cause the command to be executed in exec()
	$string = str_replace('`', '\`', $string);
	
	return $string;

}

function htmlizer($string){

global $globals;

	$string = htmlentities($string, ENT_QUOTES, $globals['charset']);
	
	preg_match_all('/(&amp;#(\d{1,7}|x[0-9a-fA-F]{1,6});)/', $string, $matches);//r_print($matches);
	
	foreach($matches[1] as $mk => $mv){		
		$tmp_m = entity_check($matches[2][$mk]);
		$string = str_replace($matches[1][$mk], $tmp_m, $string);
	}
	
	return $string;
	
}

function entity_check($string){
	
	//Convert Hexadecimal to Decimal
	$num = ((substr($string, 0, 1) === 'x') ? hexdec(substr($string, 1)) : (int) $string);
	
	//Squares and Spaces - return nothing 
	$string = (($num > 0x10FFFF || ($num >= 0xD800 && $num <= 0xDFFF) || $num < 0x20) ? '' : '&#'.$num.';');
	
	return $string;
			
}

function cleanpath($path){
	
	// This was made for Locaweb since they have network paths starting with \\
	/* if(function_exists('override_cleanpath')){
		return override_cleanpath($path);
	} */
	
	$path = str_replace('\\\\', '/', $path);
	$path = str_replace('\\', '/', $path);
	return rtrim($path, '/');
}

function soft_stream_wrapper_register($protocol, $classname){
	
	$protocols = array('dropbox', 'gdrive', 'softftpes', 'softsftp');
	
	if(!in_array($protocol, $protocols)){
		return true;
	}
	
	@include_once('_'.$protocol.'.php');
	
	if(!stream_wrapper_register($protocol, $classname)){
		return false;
	}
	
	return true;
}

function soft_preg_replace($pattern, $file, &$var, $valuenum, $stripslashes = ''){	
	preg_match($pattern, $file, $matches);
	if(empty($stripslashes)){
		$var = @trim($matches[$valuenum]);
	}else{
		$var = @stripslashes(trim($matches[$valuenum]));
	}
}

function r_print($array){

	echo '<pre>';
	print_r($array);
	echo '</pre>';

}

@unlink(__FILE__); // More has to be done here ! 

// Do we need to rename the .htaccess back ? 
if(file_exists('soft_htaccess')){
	@rename('soft_htaccess', '.htaccess');
}

// The settings
$settings = unserialize(base64_decode('[[[settings]]]'));
$data = unserialize(base64_decode('[[[data]]]'));
$software = unserialize(base64_decode('[[[software]]]'));
$app = unserialize(base64_decode('[[[app]]]'));

define('APP', $app);

$remote_location = unserialize(base64_decode('[[[remote_location]]]'));

global $user, $globals, $theme, $softpanel, $settings, $iscripts, $catwise, $error, $can_write;

$can_write = can_create_file(); // Check if we can write

$name = $data['name'];
//$path = $data['path'];
$tmpdir = $data['path'].'/tmp';

if(!empty($remote_location)){
	$path = $remote_location['full_backup_loc'];		
	$zipfile = $path.'/.'.$name.'.tar';
	$successfile = $path.'/'.$name.'.tar';
	
	soft_stream_wrapper_register($remote_location['protocol'], $remote_location['protocol']);
}else{
	/////Temp solution for non-suphp servers
	$path = ((!$can_write) ? $tmpdir : $data['path']);
	$zipfile = $path.'/.'.$name.'.tar.gz';
	$successfile = $path.'/'.$name.'.tar.gz';
}

$doing_soft_files = 0;

$f_list = $pre_soft_list = $post_soft_list = array(); // Files/Folder which has to be added to the tar.gz

// We need to stop execution in 25 secs.. We will be called again if the process is incomplete
//Increased the exec time to 500 temporarily as Backup on remote in aefer is creating incorrectly compressed file when the backups executes in loop
$GLOBALS['end'] = (int) time() + 25;

// Empty last file everytime as a precaution
$GLOBALS['last_file'] = '';
$GLOBALS['last_file'] = optGET('last_file');
if(!empty($GLOBALS['last_file'])){
	$GLOBALS['last_file'] = rawurldecode($GLOBALS['last_file']);
}

$GLOBALS['sinit_data'] = '';
$GLOBALS['sinit_data'] = optGET('init_data');
if(!empty($GLOBALS['sinit_data'])){
	$GLOBALS['sinit_data'] = base64_decode($GLOBALS['sinit_data']);
}
$GLOBALS['init_data'] = $GLOBALS['sinit_data'];

$GLOBALS['init_pos'] = 0;
$GLOBALS['init_pos'] = (int) optGET('init_pos');
$GLOBALS['start_pos'] = $GLOBALS['init_pos'];

//Backup the DATABASE
if(!empty($data['backup_db']) && !empty($data['softdb'])){
	
	// Store the progress
	//soft_progress($data['ssk'], 15, $l['backingup_db']);
	$GLOBALS['progress'] = 15;
	
	$dbfile = $tmpdir.'/'.$name.'/softsql.sql';
	
	$pre_soft_list[] = $dbfile;
	
	$GLOBALS['replace']['from']['softsql'] = $dbfile;
	$GLOBALS['replace']['to']['softsql'] = 'softsql.sql';
	
	$dbuser = (empty($softpanel->backupmysql['user']) ? $data['softdbuser'] : $softpanel->backupmysql['user']);
	$dbpass = (empty($softpanel->backupmysql['pass']) ? $data['softdbpass'] : $softpanel->backupmysql['pass']);
	
	$__settings['softurl'] = 'http://'.$data['softdomain'];
	
	$sql_conn = soft_mysql_connect($data['softdbhost'], $dbuser, $dbpass);
		
	if(!$sql_conn){
		$error['mysql_connect'] = 'Cannot connect mysql.';
		softdie('conn');
	}
	
	$sel = soft_mysql_select_db($data['softdb'], $sql_conn);
		
	if(!$sel){
		$error['mysql_sel_db'] = 'Could not select the database';
		softdie('conn');
	}
	
	$host = $data['softdbhost'];
	$user = $data['softdbuser'];
	$pass = $data['softdbpass'];
	$db = $data['softdb'];

	//include_once('mysql_functions.php');
	
	if(!backup_mysql_fn($host, $user, $pass, $db, $dbfile)){
		$error[] = 'Back up was not successful';
		softdie('conn');
	}
	
	if(!file_exists($dbfile)){
		$error['backup_db'] = 'Could not create sql file from database.';
		return backup_clean($data);
	}
}

//Backup the DIRECTORY
if(!empty($data['backup_dir'])){
		
	// Store the progress
	//soft_progress($data['ssk'], 45, $progress_data);
	$GLOBALS['progress'] = 45;
	
	// Save the version
	$fp = @fopen($data['softpath'].'/softver.txt', "wb");
	@fwrite($fp, $data['ver']);
	@fclose($fp);
		
	if(!empty($data['select_files_backup']) && !empty($data['fileindex'])){
		$_root_filelist = filelist_fn(cleanpath($data['softpath']), 0);
		$root_filelist = array();
		
		// Lets get the full paths in fileindex
		$full_fileindex = array();
		foreach($data['fileindex'] as $sfk => $sfv){
			$full_fileindex[] = trim(cleanpath($data['softpath'])).'/'.$sfv;
		}
		
		//Add softver file in $f_list
		if(file_exists($data['softpath'].'/softver.txt')){
			$full_fileindex[] = $data['softpath'].'/softver.txt';
		}
		
		foreach($_root_filelist as $rk => $rv){
			$tmp_rk = cleanpath($rk);
			$tmp_rv = $rv;
			// Do we need to exclude the files ? 
			if(!empty($data['select_files_backup']) && !in_array(trim($tmp_rk), $full_fileindex)){
				continue;
			}
			
			$tmp_rv['path'] = cleanpath($rv['path']);
			$root_filelist[$tmp_rk] = $tmp_rv;
		}
		
		$final_filelist = array_keys($root_filelist);
		//r_print($final_filelist);
		
		foreach($final_filelist as $fk => $fv){
			$f_list[] = $fv;
		}
		
	}else{
		// Adding the directory in $f_list to add to tar
		$f_list[] = $data['softpath'].'/';
	}
	
	// File Permission
	$GLOBALS['bfh']['softperms'] = @fopen($data['path'].'/tmp/'.$data['name'].'/softperms.txt','a');
	
	$GLOBALS['replace']['from']['softperms'] = $data['path'].'/tmp/'.$data['name'].'/softperms.txt';
	$GLOBALS['replace']['to']['softperms'] = 'softperms.txt';
	
	//Did it open the File Stream
	if(!$GLOBALS['bfh']['softperms']){
		$error[] = 'There were errors while trying to make a file of permissions';
		backup_clean($data);
		softdie('permdir');
	}
	
	// The directory itself
	@fwrite($GLOBALS['bfh']['softperms'], '/ '.@substr(sprintf('%o', fileperms($data['softpath'])), -4)."\n");
	
}

// Backup the datadir as well	
if(!empty($data['backup_datadir']) && !empty($data['softdatadir'])){
	
	// Store the progress
	//soft_progress($data['ssk'], 85, $l['backingup_datadir']);	
	$GLOBALS['progress'] = 85;
	
	// Adding the directory in $f_list to add to tar
	$f_list[] = $data['softdatadir'].'/';		
	$GLOBALS['replace']['from']['softdatadir'] = $data['softdatadir'].'/';
	$GLOBALS['replace']['to']['softdatadir'] = 'softdatadir/';
	
	// We now create the file for storing file permission of datadir. We create here handler for the file.
	// Data will be written in class file of tar.
	$GLOBALS['bfh']['datadir_softperms'] = fopen($data['path'].'/tmp/'.$data['name'].'/datadir_softperms.txt','a');
	
	$GLOBALS['replace']['from']['datadir_softperms'] = $data['path'].'/tmp/'.$data['name'].'/datadir_softperms.txt';
	$GLOBALS['replace']['to']['datadir_softperms'] = 'softdatadir/softperms.txt';
	
	//Did it open the File Stream
	if(!$GLOBALS['bfh']['datadir_softperms']){
		$error['err_dataperm_file'] = 'There were errors while trying to make a file of permissions of the data directory';
		backup_clean($data);
		softdie('permdatadir');
	}
	
	// The directory itself
	@fwrite($GLOBALS['bfh']['datadir_softperms'], '/ '.@substr(sprintf('%o', fileperms($data['softdatadir'])), -4)."\n");
}


// Backup the Web directory as well	
if(!empty($data['backup_wwwdir']) && !empty($data['wwwdir'])){
	
	// Store the progress
	//soft_progress($data['ssk'], 90, $l['backingup_datadir']);	
	$GLOBALS['progress'] = 90;
	
	// Adding the directory in $f_list to add to tar
	$f_list[] = $data['wwwdir'].'/';		
	$GLOBALS['replace']['from']['wwwdir'] = $data['wwwdir'].'/';
	$GLOBALS['replace']['to']['wwwdir'] = 'wwwdir/';
	
	// We now create the file for storing file permission of datadir. We create here handler for the file.
	// Data will be written in class file of tar.
	$GLOBALS['bfh']['wwwdir_softperms'] = fopen($data['path'].'/tmp/'.$data['name'].'/wwwdir_softperms.txt','a');
	
	$GLOBALS['replace']['from']['wwwdir_softperms'] = $data['path'].'/tmp/'.$data['name'].'/wwwdir_softperms.txt';
	$GLOBALS['replace']['to']['wwwdir_softperms'] = 'wwwdir/softperms.txt';
	
	//Did it open the File Stream
	if(!$GLOBALS['bfh']['wwwdir_softperms']){
		$error['err_wwwperm_file'] = 'There were errors while trying to make a file of permissions of the WEB directory';
		backup_clean($data);
		softdie('permwebdir');
	}
	
	// The directory itself
	@fwrite($GLOBALS['bfh']['wwwdir_softperms'], '/ '.@substr(sprintf('%o', fileperms($data['wwwdir'])), -4)."\n");
	
}

// This is done at the end to make sure we have added all possible replace paths before the softpath
if(!empty($data['backup_dir'])){
		
	$GLOBALS['replace']['from']['softpath'] = $data['softpath'].'/';
	$GLOBALS['replace']['to']['softpath'] = '';
	
}

// Now we will have to add the permission file to the end os an array of directory list.
if(!empty($GLOBALS['bfh']['softperms'])){
	$post_soft_list[] = $data['path'].'/tmp/'.$data['name'].'/softperms.txt';
}

if(!empty($GLOBALS['bfh']['datadir_softperms'])){
	$post_soft_list[] = $data['path'].'/tmp/'.$data['name'].'/datadir_softperms.txt';
}

if(!empty($GLOBALS['bfh']['wwwdir_softperms'])){
	$post_soft_list[] = $data['path'].'/tmp/'.$data['name'].'/wwwdir_softperms.txt';
}

if(empty($error) && (!empty($f_list) || !empty($post_soft_list) || !empty($pre_soft_list))){
	
	// Set default values
	$GLOBALS['start'] = 0;
	$GLOBALS['end_file'] = '';
	
	if(!tar_archive($zipfile, $f_list, true)){
		backup_clean($data);
		$error['backup_dir'] = 'The backup utility could not back up the files.';
		@unlink($zipfile);
		softdie('failbackup');
	}
}

if(!empty($error)){
	backup_clean($data);
	softdie('failbackup');
}

@print_r($error);

// CHMOD it to something Safe
@chmod($zipfile, 0600);

backup_clean($data);

// Is the backup process INCOMPLETE ? 
if(!empty($GLOBALS['end_file'])){
	softdie('INCOMPLETE-'.$GLOBALS['progress'], $GLOBALS['end_file']);
}

// Rename the ZIP file
@rename($zipfile, $successfile);

softdie('DONE');
