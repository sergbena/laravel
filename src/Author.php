<?php 
namespace AulaEstudio;

class Author extends User{

	public function __construct($email,$password,$key){
		parent::__construct($email,$password);
		if($key!= "AulaEstudio"){
			throw new \InvalidArgumentException("Invalid key Argument");
		}
	}

	public function getLastName(){
		return $this->lastName;
	}

	public function getFirstName(){
		return $this->firstName;
	}
}