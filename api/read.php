<?php
    //Headers
    header('Access-Control-Allow-Origin: *');
    header('Content-Type: application/json');

    include_once '../config/Database.php';
    include_once '../models/getGroup.php';

    //Instantiate DB & Connect
    $database = new Database();
    $db = $database->connect();

    //Instantiate Group object
    $group = new Group($db);

    //Get the ID being searched if exists
    parse_str($_SERVER['QUERY_STRING'], $queries);
    
    if(!array_key_exists('id',$queries)) { die('error'); }

    $srcID = $queries['id'];

    //Get group query
    $result = $group->read($srcID); 
?>