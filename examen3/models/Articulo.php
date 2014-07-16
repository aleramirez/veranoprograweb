<?php

class Articulo extends Modelo{
    public $nombre_tabla = 'articulo';
    public $pk = 'id_articulo';
    
    
    public $atributos = array(
        'nombre'=>array(),
        'resumen'=>array(),
        'abstract'=>array(),
        'introduccion'=>array(),
        'metodologia'=>array(),
        'contenido'=>array(),
        'fecha_creacion'=>array(),
        'archivo_pdf'=>array(),
        'conclusiones'=>array(),
        'agradecimientos'=>array(),
        'referencias'=>array(),

    );
    
    public $errores = array( );
    
    private $nombre;
    private $resumen;
    private $abstract;
    private $introduccion;
    private $metodologia;
    private $contenido;
    private $fecha_creacion;
    private $archivo_pdf;
    private $conclusiones;
    private $agradecimientos;
    private $editorial;
       
    
    function Articulo(){
        parent::Modelo();
    }
    
    public function get_atributos(){
        $rs = array();
        foreach ($this->atributos as $key => $value) {
            $rs[$key]=$this->$key;
        }
        return $rs;
    }
    
    
    public function get_nombre(){
        return $this->nombre;
    } 

    public function set_nombre($valor){

        $er = new Er();
        
        if ( !$er->valida_nombre($valor) ){
            $this->errores[] = "Este nombre (".$valor.") no es valido";
        }
            $this->nombre = trim($valor);
        
    }

    public function get_resumen(){
        return $this->resumen;
    }
    
    public function set_resumen($valor){

        $er = new Er();
        
        if ( !$er->valida_nombre($valor) ){
            $this->errores[] = "Este resumen (".$valor.") no es valido";
        }
        $this->resumen = trim($valor);
    
    }

    public function get_abstract(){
        return $this->abstract;
    }
    
    public function set_abstract($valor){

        $er = new Er();
        
        if ( !$er->valida_nombre($valor) ){
            $this->errores[] = "Esto (".$valor.") no es valido";
        }

        $this->abstract = trim($valor);
    
    }

    public function get_introduccion(){
        return $this->introduccion;
    }

     public function set_introduccion($valor){

        $er = new Er();
        
        if ( !$er->valida_nombre($valor) ){
            $this->errores[] = "Esto (".$valor.") no es valido";
        }

        $this->introduccion = trim($valor);
    
    }

    public function get_metodologia(){
        return $this->metodologia;
    }

     public function set_metodologia($valor){

        $er = new Er();
        
        if ( !$er->valida_nombre($valor) ){
            $this->errores[] = "Esto (".$valor.") no es valido";
        }

        $this->metodologia = trim($valor);
    
    }

    public function get_contenido(){
        return $this->contenido;
    }

     public function set_contenido($valor){

        $er = new Er();
        
        if ( !$er->valida_nombre($valor) ){
            $this->errores[] = "Esto(".$valor.") no es valido";
        }

        $this->contenido = trim($valor);
    
    }

    public function get_fecha_creacion(){
        return $this->fecha_creacion;
    }

     public function set_fecha_creacion($valor){

        $er = new Er();
        
        if ( !$er->valida_fecha($valor) ){
            $this->errores[] = "Esto (".$valor.") no es valido";
        }

        $this->fecha_creacion = trim($valor);
    
    }

    public function get_archivo_pdf(){
        return $this->archivo_pdf;
    }

     public function set_archivo_pdf($valor){

        $er = new Er();
        
        if ( !$er->valida_imagenn($valor) ){
            $this->errores[] = "Esto (".$valor.") no es valido";
        }

        $this->archivo_pdf = trim($valor);
    
    }

    public function get_conclusiones(){
        return $this->conclusiones;
    }

     public function set_conclusiones($valor){

        $er = new Er();
        
        if ( !$er->valida_nombre($valor) ){
            $this->errores[] = "Esto (".$valor.") no es valido";
        }

        $this->conclusiones = trim($valor);
    
    }

    public function get_agradecimientos(){
        return $this->agradecimientos;
    }

     public function set_agradecimientos($valor){

        $er = new Er();
        
        if ( !$er->valida_nombre($valor) ){
            $this->errores[] = "Esto (".$valor.") no es valido";
        }

        $this->agradecimientos = trim($valor);
    
    }

     public function get_referencias(){
        return $this->referencias;
    }

     public function set_referencias($valor){

        $er = new Er();
        
        if ( !$er->valida_nombre($valor) ){
            $this->errores[] = "Esto (".$valor.") no es valido";
        }

        $this->referencias = trim($valor);
    
    }

}
?>
