<?php

//Remove var/cache directory recursively
rmdir_recursive_fn('[[softpath]]/app/cache/prod/');
rmdir_recursive_fn('[[softpath]]/var/cache/prod/');

function rmdir_recursive_fn($path){
		
	$path = (substr($path, -1) == '/' || substr($path, -1) == '\\' ? $path : $path.'/');
	
	resetfilelist();
	
	$files = filelist($path, 1, 0, 'all');
	$files = (!is_array($files) ? array() : $files);
	
	//First delete the files only
	foreach($files as $k => $v){
			@chmod($k, 0777);
		if(file_exists($k) && is_file($k) && @filetype($k) == "file"){
			@unlink($k);
		}
	}
	
	@clearstatcache();
	
	$folders = filelist($path, 1, 1, 'all');
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

function resetfilelist(){
global $directorylist;
	$directorylist = array();
}

function filelist($startdir="./", $searchSubdirs=1, $directoriesonly=0, $maxlevel="all", $level=1, $reset = 1) {
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
                               filelist($startdir . $file . "/", $searchSubdirs, $directoriesonly, $maxlevel, ($level + 1), 0);
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

@unlink('soft_delete.php');