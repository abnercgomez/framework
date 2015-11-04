<?php

class paginasController extends AppController
{
	public function index(){
		
		$this->_view->renderizar('index', 'principal');
	}
		
}