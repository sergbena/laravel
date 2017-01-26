<?php
require_once "vendor/autoload.php";
class PostTest extends PHPUnit_Framework_TestCase{

	/** @test */
	function nos_devuelve_el_nombre_del_author(){
		$author=new \AulaEstudio\Author('kshfdk@d.com','122','AulaEstudio');
		$author->setName('Sergio','Benavides');
		$post=new \AulaEstudio\Post($author,'un titulo','un cuerpo mensaje');
		$this->assertEquals('by Sergio',$post->getAuthor());
	}

	/** @test */
	function devolver_titulo(){
		$author=new \AulaEstudio\Author('kshfdk@d.com','122','AulaEstudio');
		$author->setName('Sergio','Benavides');
		$post=new \AulaEstudio\Post($author,'un titulo','un mensaje');
		$this->assertEquals('un titulo',$post->getTitle());
	}

	/** @test */
	function devolver_mensaje(){
		$author=new \AulaEstudio\Author('kshfdk@d.com','122','AulaEstudio');
		$author->setName('Sergio','Benavides');
		$post=new \AulaEstudio\Post($author,'un titulo','un mensaje');
		$this->assertEquals('un mensaje',$post->getBody());
	}

	/** @test */
	function editar_titulo(){
		$author=new \AulaEstudio\Author('kshfdk@d.com','122','AulaEstudio');
		$author->setName('Sergio','Benavides');
		$post=new \AulaEstudio\Post($author,'un titulo','un cuerpo mensaje');
		$post->editTitle('nuevo titulo');
		$this->assertEquals('nuevo titulo',$post->getTitle());
	}

	/** @test */
	function editar_mensaje(){
		$author=new \AulaEstudio\Author('kshfdk@d.com','122','AulaEstudio');
		$author->setName('Sergio','Benavides');
		$post=new \AulaEstudio\Post($author,'un titulo','un cuerpo mensaje');
		$post->editBody('nuevo mensaje');
		$this->assertEquals('nuevo mensaje',$post->getBody());
	}
}