<?php
class db{
	protected $db;

	function __construct(){
		$servername = "127.0.0.1";
        $username = "yorares";
        $password = "fsBj6tren65ldGyb";
        $database = "sclav";
    
        try {
            $this->db = new PDO("mysql:host=$servername;dbname=$database", $username, $password);    
            $this->db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
        } catch(PDOException $e) {
            die('Unable to connect');
        }
    }

function executeQuery($query){
	$sth = $this->db->prepare($query);
    $sth->execute();
    return $sth->fetchAll(PDO::FETCH_ASSOC);
}




}?>