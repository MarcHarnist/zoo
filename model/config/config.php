<?php

//  Display OVH errors messages
	ini_set('display_errors',1);

//	Website owner and webmaster constants
	define('OWNER_MAIL', "harnist.marc@gmail.com");
	define('WEBSITE_NAME', "Zoo Game");//WEBSITE_NAME = constant
	define('WEBSITE_OWNER', "Marc Harnist");
	define('WEBMASTER', "Marc Harnist");
	define('WEBMASTER_MAIL', "harnist.marc@gmail.com");

//  URL
	//  Website URL
		// easyPhp project URL
		if(isset($_SERVER['SCRIPT_URI'])){ //= online
			// Online URL
			$website_url = $_SERVER['SCRIPT_URI']; // online url

			//Online data base id(db)
			$db_host = 'marcharnssmarc.mysql.db';
			$db_name   = 'marcharnssmarc';
			$db_username = 'marcharnssmarc';
			$db_password = '***';
		}
		else{ // We are on localhost on PC
			$website_url = str_replace('index.php', '', $_SERVER['SCRIPT_NAME']);//easyPhp url
			
			//On easyPhp data base id(db)
			$db_host = 'Localhost';
			$db_name = 'marcharnssmarc';
			$db_username = 'root';
			$db_password = '';			
		}
		$clear = ['index.php', 'admin/']; // clear admin so it works in admin too
		define('WEBSITE_URL', str_replace($clear, '',$website_url));
		
		// Database constants
		define('DB_HOST', $db_host);
		define('DB_NAME', $db_name);
		define('DB_USERNAME', $db_username);
		define('DB_PASSWORD', $db_password);
			// Database table
			define('TABLE_MEMBER', 'light_member');
			define('TABLE_PAGES', 'light_pages');
		
	//  Inside URL
	define('DOMAIN', 'marcharnist');
	define('ADMIN_URL', WEBSITE_URL . 'admin/');
	define('PAGE_URL', WEBSITE_URL . 'index.php?page=');
	define('CSS_URL', WEBSITE_URL . 'css/');
	define('VIEW_URL', WEBSITE_URL . 'view/');
	define('IMG_URL', WEBSITE_URL . 'img/');
	define('SQL_URL', WEBSITE_URL . 'sql/');

// Realpaths
	//	Root: www real paths
	define('ROOT',str_replace('index.php','',$_SERVER['SCRIPT_FILENAME'])); 
	// Returns: easyPhp project Root = C:/easyPhp/www/MVC/www
	// Returns: Online root = /home/marcharnss/www/  

	// 	Model files realpaths constants defined here and used in root/index.php 
		define('MODEL', ROOT . 'model/');
			define('DB', MODEL . 'connexion_sql/connexion_sql_marcharnist.php'); // database path
			define('GLOBALES', MODEL . 'globales.php');
			define('CLASSES', MODEL . 'class_uploader.php');// HEADER is reserved
			define('USER', MODEL . 'user.php');
			define('USER1', MODEL . 'USER1.php');
			define('USER2', MODEL . 'USER2.php');

	// 	Other repertorys realpaths defined here
		define('VIEW', ROOT . 'view/');
		define('CONTROLLER', ROOT . 'controller/');
		define('INC', ROOT . 'inc/');
		define('CSS', ROOT . 'css/');
		define('SQL', ROOT . 'sql/');

	// 	Usefull files realpaths defined here
		define('HEAD', INC . 'header.php');// HEADER is reserved
		define('MENU', INC . 'menu.php');// Stored but not used in marcharnist.fr
		define('FOOT', INC . 'footer.php');
