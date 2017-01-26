<?php
namespace AulaEstudio;

use Illuminate\Support\Collection;

/**
* 
*/
class FakeDatabase{
	
	public function posts(){
		$author = new Author('sbenavides@company.es','123456','AulaEstudio');
		$author->setName('Sergio','Benavides');
		
		return new Collection([
				1=>new Post($author,'post1','texto post 1'),
				2=>new Post($author,'post2','texto post 2'),
				3=>new Post($author,'post3','texto post 3')
				]);
	}

}