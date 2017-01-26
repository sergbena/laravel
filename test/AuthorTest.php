<?php
require_once "vendor/autoload.php";

class AuthorTest extends PHPUnit_Framework_TestCase{

	/** @test */
	function deberia_de_ser_un_constructor(){
		$author=new \AulaEstudio\Author('auhgfdidsfi@sa.com','fdsg','AulaEstudio');
		$this->assertInstanceOf(\AulaEstudio\Author::class,$author);
	}

	/** @test */
	function no_recibe_key_esperada(){
		$this->setExpectedException(\InvalidArgumentException::class);
		$author=new \AulaEstudio\Author('auhgfdidsfi@sa.com','fdsg','AulaEstumdio');
	}

}