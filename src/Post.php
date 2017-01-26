<?php
namespace AulaEstudio;

class Post{
	private $author;
	private $title;
	private $body;

	public function __construct($author,$titulo,$cuerpo){
		$this->author=$author;
		$this->title=$titulo;
		$this->body=$cuerpo;
	}

	public function getAuthor(){
		return 'by '.$this->author->getFirstName();
	}

	public function getTitle(){
		return $this->title;
	}

	public function getBody(){
		return $this->body;
	}

	public function editTitle($titulo){
		$this->title=$titulo;
	}

	public function editBody($mesaje){
		$this->body=$mesaje;
	}
}