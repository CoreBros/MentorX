<?php  // Moodle configuration file

unset($CFG);
global $CFG;
$CFG = new stdClass();

$CFG->dbtype    = 'mysqli';
$CFG->dblibrary = 'native';
$CFG->dbhost    = '[[softdbhost]]';
$CFG->dbname    = '[[softdb]]';
$CFG->dbuser    = '[[softdbuser]]';
$CFG->dbpass    = '[[softdbpass]]';
$CFG->prefix    = '[[dbprefix]]';
$CFG->dboptions = array (
  'dbpersist' => 0,
  'dbport' => '',
  'dbsocket' => '',
  'dbcollation' => 'utf8_general_ci',
);

$CFG->wwwroot   = '[[softurl]]';
$CFG->dataroot  = '[[softdatadir]]';
$CFG->admin     = 'admin';

$CFG->directorypermissions = 0777;

require_once(__DIR__ . '/lib/setup.php');

// There is no php closing tag in this file,
// it is intentional because it prevents trailing whitespace problems!
