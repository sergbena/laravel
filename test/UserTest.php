<?php
class UserTest extends PHPUnit_Framework_TestCase{

	/** @test */
	function deberia_ser_un_constructor(){
		$user= new \AulaEstudio\User('jssuhfd@dujhf.es','ash Kevhup');
		$this->assertInstanceOf(\AulaEstudio\User::class,$user);
	}

	/** @test */
	function deveria_devolver_el_nombre(){
		$user= new \AulaEstudio\User('dshfkf@s.oc','asfihsda');
		$user->SetName('sergio','benavides');
		$name=$user->getFirstName();
		$this->assertEquals('sergio',$name);
	}


}