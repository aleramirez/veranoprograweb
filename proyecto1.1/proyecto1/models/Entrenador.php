<?php

class Usuario extends Modelo{
    public $nombre_tabla = 'entrenador';
    public $pk = 'identrenador';
    
    
    public $atributos = array(
        'idpais'=>array(),
    );
    
    public $errores = array( );
    

    private $idpais;
  
    
    function Entrenador(){
        parent::Modelo();
    }
    
    public function get_atributos(){
        $rs = array();
        foreach ($this->atributos as $key => $value) {
            $rs[$key]=$this->$key;
        }
        return $rs;
    }
    
    

    public function get_idpais(){
        return $this->idpais;
    }
    
    public function set_idpais($valor){

        $er = new Er();
        
        if ( !$er->valida_email($valor) ){
            $this->errores[] = "Este idpais (".$valor.") no es valido";

        $this->idpais = trim($valor);
    }


?>
