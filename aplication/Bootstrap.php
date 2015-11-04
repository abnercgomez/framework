<?php

class Bootstrap
{
	//permite llamar una funcion sin necesidad de instanciar la clase
	public static function run(Request $peticion){
		$controller = $peticion->getControlador()."Controller";
		$rutaControlador = ROOT."controllers".DS.$controller.".php";
		$metodo = $peticion->getMetodo();
		$args = $peticion->getArgs();
		//echo $rutaControlador;
		//exit;
		 if (is_readable($rutaControlador)) {
			require_once $rutaControlador;
			$Controlador = new $controller;

			if (is_callable(array($controller, $metodo))) {
				$metodo = $peticion->getMetodo();
			}else{
				$metodo = "index";
			}
			if ($metodo == 'login' or $metodo == 'registro' or $metodo == 'busqueda' or $metodo == 'funcion'or
			$metodo == 'funcion' or $peticion->getControlador() == 'paginas') {

				# code...
			}else{
				Authorization::logged();
			}

			if (isset($args)) {
				call_user_func_array(array($Controlador, $metodo),$args);
			}else{
				call_user_func(array($Controlador, $metodo));
			}
		}else{
			throw new Exception("Controlador no encontrado");
		}
	}
}
