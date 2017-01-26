<?php

namespace AulaEstudio;

/**
 * 
 */
class User{

	/**
	 * email del Usuario
	 * @var String 
	 */
	private $email;

	/**
	 * Contraseña del usuario
	 * @var String
	 */
	private $password;

	/**
	 * Nombre del usuario
	 * @var String
	 */
	protected $firstName;

	/**
	 * Apellido del usuario
	 * @var String
	 */
	protected $lastName;

	/**
	 * Constructor
	 * @param String $email    Email del usuario
	 * @param String $password Contraseña del usuario
	 */
	public function __construct($email,$password){
		$this->email=$email;
		$this->password=password_hash($password,PASSWORD_DEFAULT);
	}

	public function setName($firstName,$lastName){
		$this->firstName=$firstName;
		$this->lastName=$lastName;
	}

	public function getFirstName(){
		return $this->firstName;
	}

	public function getPassword(){
		return $this->password;
	}

}