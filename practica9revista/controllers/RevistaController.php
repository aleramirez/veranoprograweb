<?php
	class RevistaController {
		
		public $muestra_errores = false;
		function __construct(){
		}
		
		public function insertaRevista($datos,$archivo){
			echo "<pre>datos:";
			print_r($datos);
			print_r($archivo);
    		echo "</pre>";
    		$tammax=2000000;

			$revista = new Revista();
			$revista->set_nombre($datos['nombre']);
			$revista->set_portada($archivo['portada']);
			$revista->set_fecha($datos['fecha']);
			$revista->set_volumen($datos['volumen']);
			$revista->set_titulo($datos['titulo']);
			$revista->set_subtitulo($datos['subtitulo']);
			$revista->set_numero($datos['numero']);
			$revista->set_clave($datos['clave']);
			$revista->set_directorio($datos['directorio']);
			$revista->set_editorial($datos['editorial']);


			if (count($revista->errores)>0) {
				print_r($revista->errores);
			}

			if($_FILES['portada']['size']>$tammax)
				echo "Supera el tamaño permitido";

			if (substr($_FILES['portada']['type'], 0,5)!='portada') {
				echo "El archivo no es una imagen";
			}

			if(is_uploaded_file($_FILES['portada']['tmp_name'])){
				move_uploaded_file($archivo['portada']['tmp_name'], "images/".$archivo['portada']['name']);
			}
				
				
			
				$revista->inserta($revista->get_atributos());
			
		}

	}

?>