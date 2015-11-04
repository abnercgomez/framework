<?php

class UsuariosController extends AppController{

public function __construct(){
		parent::__construct();
	}

	public function index(){
		$this->_view->titulo = "Listado de tareas";
		$this->_view->tareas = $this->db->find('tareas', 'all');
		$this->_view->renderizar('index');
		//$tareas = $this->loadmodel("tarea");
		//$this->_view->tareas = $tareas->getTareas();
		// TITULO QUE SE VISUALZARA EN LA URL.
		//$this->_view->renderizar("index");

	}

	
public function add(){
	if ($_POST){
			$pass = new Password();

			$_POST['password'] = $pass->getPassword($_POST['password']);

			if ($this->db->save("usuarios", $_POST)) {
				$this->redirect(array('controller'=>'usuarios', 'action'=>'index'));
			}else{
				$this->redirect(array('controller'=>'usuarios', 'action'=>'add'));
			}
		}else{
			$this->_view->titulo = "Agregar usuario";
			$this->_view->renderizar('add');
		}

		
	}



public function edit($id = null){
		if ($_POST){
			if (!empty($_POST['pass'])) {
				$pass = new Password();
				$_POST['password'] = $pass->getPassword($_POST['pass']);;
			}
			if ($this->db->update("usuarios", $_POST)) {
				$this->redirect(array('controller'=>'usuarios', 'action'=>'index'));
			}else{
				$this->redirect(array('controller'=>'usuarios', 'action'=>'edit'));
			}
		}else{
			$this->_view->titulo = "Editar usuario";
			$this->_view->usuario = $this->db->find('usuarios', 'first', array('conditions'=>'id='.$id));
			$this->_view->renderizar('edit');
		}	
		
	}

public function delete(){
	
}
	public function login(){
		if ($_POST) {
		$pass = new Password();# code...
		$filter = new Validations();
		$auth = new Authorization();

		$username = $filter->sanitizeText($_POST['username']);
		$password = $filter->sanitizeText($_POST['password']);
		$options = array('conditions'=>"username='$username'");
		$usuario = $this->db->find('usuarios', 'first', $options);
		
		if ($pass->isValid($password, $usuario['password'])) {
			$auth->login($usuario);
			$this->redirect(array('controller'=>'usuarios', 'action'=>'escritorio'));


			}else{
				echo"<script type='text/javascript'>
		     alert('usuario no valido');
		    </script>";
			}
		}
		$this->_view->renderizar('login', 'login');
	}
	
	public function logout(){
		$auth = new Authorization();
		$auth->logout();

		

	}	
	public function escritorio(){
		$this->_view->renderizar('escritorio','panel');
	}

	public function registro(){
		$this->_view->renderizar('registro', 'login', 'default');
	}
	public function busqueda(){
		
		$this->_view->renderizar('busqueda');
	}
	public function ayuda(){
		
		$this->_view->renderizar('ayuda');
	}
		public function funcion(){
		
		$this->_view->renderizar('funcion');
	}
			public function acerca(){
		
		$this->_view->renderizar('acerca');
	}

}