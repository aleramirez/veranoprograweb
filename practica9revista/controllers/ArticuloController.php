<?php
	class ArticuloController {
		
		public $muestra_errores = false;
		function __construct(){
		}
		
		public function insertaArticulo($datos,$archivo){
			echo "<pre>datos:";
			print_r($datos);
			print_r($archivo);
    		echo "</pre>";
    		$tammax=2000000;

			$articulo = new Articulo();
			$articulo->set_nombre($datos['nombre']);
			$articulo->set_resumen($datos['resumen']);
			$articulo->set_abstract($datos['abstract']);
			$articulo->set_introduccion($datos['introduccion']);
			$articulo->set_metodologia($datos['metodologia']);
			$articulo->set_contenido($datos['contenido']);
			$articulo->set_fecha_creacion($datos['fecha_creacion']);
			$articulo->set_archivo_pdf($archivo['archivo_pdf']);
			$articulo->set_conclusiones($datos['conclusiones']);
			$articulo->set_agradecimientos($datos['agradecimientos']);
			$articulo->set_referencias($datos['referencias']);


			if (count($articulo->errores)>0) {
				print_r($articulo->errores);
			}

			if($_FILES['archivo_pdf']['size']>$tammax)
				echo "Supera el tamaño permitido";

			if (substr($_FILES['archivo_pdf']['type'], 0,5)!='archivo_pdf') {
				echo "El archivo no es un pdf";
			}else{
				if(is_uploaded_file($_FILES['archivo_pdf']['tmp_name'])){
				move_uploaded_file($archivo['archivo_pdf']['tmp_name'], "pdf/".$archivo['archivo_pdf']['name']);
			}
	
			$articulo->inserta($articulo->get_atributos());
			}

			

		}

	}

?>