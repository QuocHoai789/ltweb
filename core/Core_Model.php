<?php
class Core_Model{
	protected $db=null;
	function connect(){
		$data=require BASE_PATH.'/config/Database.php';
		$host=$data['host'];
		$username=$data['username'];
		$password=$data['password'];
		$dbname=$data['dbname'];
           
         if($this->db==null){
            try{
            	$this->db=new PDO("mysql:host=$host;dbname=$dbname",$username,$password);
            	$this->db->exec('set names utf8');

            }
            catch (PDOException $e) {
				exit("Error ".$e->getMessage()) ;

			}
            }
         }
	
	function __construct(){
		$this->connect();
	}
}
?>