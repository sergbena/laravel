<?php
require_once "vendor/autoload.php";

class EmailTest extends PHPUnit_Framework_TestCase{

	/** @test */
	function deberia_ser_un_email(){
		$email= new \AulaEstudio\Email('hjkaunfs@dsfs.com');
		$this->assertInstanceOf(\AulaEstudio\Email::class,$email);
	}

}