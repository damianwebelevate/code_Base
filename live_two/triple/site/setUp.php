<?php

/*
*
*	This file is to start each users session with a folder within a directory and store the images there
*	If the session is uniquie then the name of the files (neck | shoulder | hip | center | uploaded) can be overwritten to save server space
*	Users now storing information within one directory and can set a cookie on homepage with the path to that directory and retreive the images
*
*/

// session_start();


// setting a one hour cookie:
// rem secure path for live site
// expires in one hour

// for those that do have cookies enabled the folder and session id are the same (for three hours)
// for those that do not have cookies enabled the folder is created via the session_id 

$path = $folderName = $fullPath = "";

$path = dirname(__FILE__).'/newOrders/';

$folderName = session_id();
$fullPath = $path.$folderName;

if(!is_dir($fullPath)){
	mkdir($fullPath, 0777, true);
	chmod($fullPath, 0777);
}

$_SESSION['folder_name'] = $folderName;
$_SESSION['fullPath'] = $fullPath;




?>