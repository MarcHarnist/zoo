<?php
		// Extract of config file:
		
		// Database constants
		// define('DB_HOST', $db_host);
		// define('DB_NAME', $db_name);
		// define('DB_USERNAME', $db_username);
		// define('DB_PASSWORD', $db_password);
			// Database table
			// define('TABLE_MEMBER', 'light_member');
			// define('TABLE_PAGES', 'light_pages');
			
			
try {
	// Constants DB_HOST and other informed in config.php
    $db = new PDO('mysql:host=' . DB_HOST . ';
				dbname=' . DB_NAME, DB_USERNAME, DB_PASSWORD);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
    $db->exec("SET CHARACTER SET utf8");
} catch(PDOException $e) {
    $DBerrorMessage = "Sorry there is a problem with the database connection :"; 
    echo $DBerrorMessage . $e->getMessage();
}


die();