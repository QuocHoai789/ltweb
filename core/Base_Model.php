<?php
class Base_Model extends Core_Model{
	function findAll(){
		$query="select * from {$this->table} ";
		$sth=$this->db->prepare($query);
		$sth->execute();
		$data=$sth->fetchAll(PDO::FETCH_ASSOC);
		$sth->closeCursor();
		return $data;
	}
	function findbyId($id){
		$query="select * from {$this->table} where id= :id";
		$sth=$this->db->prepare($query);
		$sth->execute(['id'=>$id]);
		$data=$sth->fetch(PDO::FETCH_ASSOC);
		$sth->closeCursor();
		return $data;
	}
}
?>