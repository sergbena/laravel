<?php
namespace AulaEstudio\http\Controllers;
use AulaEstudio\http\Views\View;
use AulaEstudio\Author;
use AulaEstudio\Post;
use AulaEstudio\FakeDatabase;
use Illuminate\Http\Request;

class HomeController{

	private $db;

	public function __construct(FakeDatabase $db){
		$this->db=$db;
	} 

	public function index( Request $request){
		// return 'Hola mundo desde Controlador '.$request->url();

		// var_dump($request);
		
		// $view=new View('sergio',['cita'=>'si 666 es el numero del diablo, el 25,8069 es la raiz de todos los problemas','nombre'=>'Sergio Benavides']);


		$posts=$this->db->posts();
		// $prueba = $posts->filter(function($post){
		// 	if($post->getTitle()=='post2'){
		// 		return $post;
		// 	}
		// });
		
		$first=$posts->first(); 
		
		$view= new View('sergio',['posts'=>$posts, 'firstPost'=>$first]);

		$response=$view->render();
		// $response->send();
	}

	public function show($id){
		$posts=$this->db->posts();
		$view=new View('post_details',['post'=>$posts->get($id)]);
		return $view->render();
	}

}