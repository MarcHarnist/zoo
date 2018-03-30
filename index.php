<?php

/** IDEAS: The controller, the header, the view and the footer are included only here.
	That makes controller/files much cleaner and shorter. **/

session_start();//used for SESSION defined in root/inc/footer

include_once("model/config/config.php");// All CONSTANTS informed in this file.
include_once("model/page.php");// Functions in this file.
include_once CLASSES;//upload all classes

$file = ['page' => "accueil", 'title' => "accueil", 'controller' => CONTROLLER . 'accueil.php', 'view' => VIEW . 'accueil.php', 'css' => '']; // default values

//	Read page name with methode GET	
if(!empty($_GET['page'])){
	$file['page']  = htmlspecialchars($_GET['page']);//Get what is written in url after "page="
	$file['title'] = cleanPageName($file['page']); // function in model/page.php
	$file['file']  = $file['page'] . '.php'; // page with extension to find view file
	$file['css']   = cssLink($file['page']); //Create a css link in head for this page in model/css-link

	// If a file controller exist with this file name we include it
	if(is_file(CONTROLLER . $file['file'])) include_once (CONTROLLER . $file['file']);
	
	// if view exists define PAGE (real path) path of this file in view
	if(is_file(VIEW . $file['file'])) $file['view'] =  VIEW . $file['file'];
}
// Every files are included in root/index.php. Easier for the relatives links
include_once HEAD;//Constants defined in model/config/config
include_once ($file['view']);
include_once FOOT; //Constants defined in model/config/config and FOOT = root/inc/footer.php. Define SESSION started above