<?php
	class EquipoController extends Equipo{
		
		public $muestra_errores = false;

		function __construct(){
			parent::Equipo();
		}
		
		public function insertaEquipo($datos,$archivo){
			echo "<pre>datos:";
			print_r($datos);
			print_r($archivo);
    		echo "</pre>";

			//$equipo = new Equipo();
			$this->set_nombre($datos['nombre']);
			$this->set_idpais($datos['idpais']);
			$this->set_escudo($archivo['escudo']);

			if (count($this->errores)>0) {
				//print_r($equipo->errores);
				$this->muestra_errores=true;
			}else{
				move_uploaded_file($archivo['escudo']['tmp_name'], "images/".$archivo['escudo']['name']);
				$this->inserta($this->get_atributos());
			}

			

		}

	}


?>