<?php

class View{
	private $_controlador;
	private $_metodo;

	public function __construct(Request $peticion){
		$this->_controlador = $peticion->getControlador();
		$this->metodo = $peticion->getMetodo();
	}
	public function renderizar($vista, $layout=DEFAULT_LAYOUT){
		
		  
		 $rutaView =ROOT.'views'.DS.$this->_controlador.DS.$vista.'.phtml';
		
				if ($this->_metodo == 'escritorio') {
					$layout='panel';
				}

				if ($this->_metodo == 'login') {
					$layout='panel';
				}else if ($this->_controlador=='usuarios'){ 
					$layout = DEFAULT_LAYOUT;		# code...
				}
				/*die();
				if ($this->_metodo=='escritorio') {
					$layout='panel';
				}
				else if ($this->_controlador=='usuarios'){ 
					$layout = 'panel';		# code...
				}else{
					$layout = DEFAULT_LAYOUT;
				}
				*/
			
			//
		$_layoutParams = array(
		 	'ruta_css'=>APP_URL.'views/layouts/'.$layout.'/css/',
		 	'ruta_img'=>APP_URL.'views/layouts/'.$layout.'/img/',
		 	'ruta_js'=>APP_URL.'views/layouts/'.$layout.'/js/'
		 	);

		if(is_readable($rutaView)){
			include_once ROOT.'views'.DS.'layouts'.DS.$layout.DS.'header.php';
			include_once $rutaView;
			include_once ROOT.'views'.DS.'layouts'.DS.$layout.DS.'footer.php';
		}else{
			throw new Exception("Error de Vista");
			
		}
    }
}