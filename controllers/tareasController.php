<?php

class tareasController extends AppController
{
	public function __construct(){
		parent::__construct();
	}

	public function index(){
		$this->_view->titulo = "Listado de tareas";
		$this->_view->tareas = $this->db->find('tareas', 'all');
		$this->_view->renderizar('index', 'panel');
		//$tareas = $this->loadmodel("tarea");
		//$this->_view->tareas = $tareas->getTareas();
		// TITULO QUE SE VISUALZARA EN LA URL.
		//$this->_view->renderizar("index");

	}

	public function edit($id = NULL){
	if ($_POST){
			if($this->db->update('tareas', $_POST)){
	           $this->redirect(
	      	          array('controller'=>'tareas','action'=>'index'
	      	          	)
	      	        );
        }else{
        	$this->redirect(
        	          array(
        	                'controller'=>'tareas',
        	                'action'=>'edit/'.$_POST['id']
        	               )
        	          );
                }
	
        }else{

		$conditions = array(
			      'conditions'=>'id='.$id);
		$this->_view->tarea=$this->db->find(
			'tareas',
			'first',
			$conditions
		);

		$this->_view->titulo="Editar Tarea";
		$this->_view->renderizar('edit');

   
	}
}

  public function add(){
		if ($_POST){
			if($this->db->save('tareas',$_POST)){
	           $this->redirect(
	      	          array('controller'=>'tareas','action'=>'index'
	      	          	)
	      	        );
        }else{$this->redirect(
        	                  array(
        	                  	'controller'=>'tareas','action'=>'add'
        	               )
        	          );
    }
		}else{

			$this->_view->titulo="Agregar tarea";
			$this->_view->renderizar=("add");


		}
		$this->_view->renderizar('add');

	  }
		
    public function delete($id){
	$condition='id='.$id;
	if ($this->db->delete('tareas', $condition)) {
		$this->redirect(array('controller'=>'tareas'));
	  }
   }

}

