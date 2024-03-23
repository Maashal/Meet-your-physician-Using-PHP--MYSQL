<?php

class database{
	protected $host;
	protected $user;
	protected $password;
	protected $dbname;
	protected $connection;
	public    $results;
	public    $errormessage;
	
	
	public function __construct(){
		$this->host 		= "localhost";
		$this->user 		= "root";
		$this->password 	= "";
		$this->dbname		= "doctor";
		$this->connection= mysqli_connect($this->host, $this->user, $this->password, $this->dbname);
		if(!$this->connection){
			$this->errormessage(mysqli_error($this->connection));
		}
	}
	
	
	
	////errror message
	public function errormessage($message){
		?><h3 class="alert alert-warning text-center"><?php echo "$message"; ?></h3><?php
	}
	
	
	////success message
	public function successmessage ($message){
		?><h3 class="alert alert-success text-center"><?php echo "$message";?></h3><?php
	}
	
	
	
	//// execute query
	public function execute ($query){
		$this->results =    mysqli_query($this->connection, $query);

		if(!$this->results){
			
			$this->errormessage(mysqli_error($this->connection));
		
		}
	}
	
	
	
	
	////fetech results as array
	public function fetch_array(){
		return mysqli_fetch_array($this->results);
		
	}
	
	
	/////fetch resu;ts as object
	public function fetch_object(){
		return mysqli_fetch_object($this->results);
	}
	
	///// count no of rows
	public function countrow(){
		return mysqli_num_rows($this->results);
	}
	
	public function last_inserted_id(){
		return mysqli_insert_id($this->connection);
	}
	
	
	
	
}

?>