<?php

class EnlacesPaginas{

	static public function enlacesPaginasModel($enlacesModel){

		if($enlacesModel == "Ingresar" || 
		   $enlacesModel == "HOME" || 
		   $enlacesModel == "Ventas" ||
		   $enlacesModel == "Catalogo" ||
		   $enlacesModel == "Acerca de" ||
		   $enlacesModel == "Contactanos"){

			
			$module = "views/modules/".$enlacesModel.".php";

		}

		else if($enlacesModel == "index" ){

			$module = "views/modules/index.php";

		}

		else{

			$module = "views/modules/inicio.php";

		}

		return $module;

	}

}



	





?>