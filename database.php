<?php
    
    $HOST = 'localhost';
    $DB_NAME = 'lingtonbeauty';
    $USER = 'michel';
    $PASS = '';
    $PORT = '3306';

   
    try {
        $db = new PDO("mysql:host=" . $HOST . ";dbname=" . $DB_NAME, $USER, "");
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch(PDOException $e) {
        echo $e;
    }
	
	
?>