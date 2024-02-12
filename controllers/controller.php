<?php

class MvcController{

	#LLAMADA A LA PLANTILLA
	#----------------------------------------------

	 
	static public function plantilla(){

		#include() Se utiliza para invocar el archivo que contiene código html.
		include "views/template.php";
	}

	#INTERACCIÓN DEL USUARIO
	#----------------------------------------------
	static  public function enlacesPaginasController(){

		if(isset($_GET["action"])){

		$enlacesController = $_GET["action"];

		}

		else{

		$enlacesController = "inicio";
			
		}

		$respuesta = EnlacesPaginas::enlacesPaginasModel($enlacesController);

		include $respuesta;

	}
}

?>