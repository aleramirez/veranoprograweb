<?php

class Equipo extends Modelo{
    public $nombre_tabla = 'equipo';
    public $pk = 'idequipo';
    
    
    public $atributos = array(
        'nombre'=>array(),
        'idpais'=>array(),
        'escudo'=>array(),
    );
    
    public $errores = array( );
    
    private $nombre;
    private $idpais;
    private $escudo;
       
    
    function Equipo(){
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

    public function get_idpais(){
        return $this->idpais;
    }
    
    public function set_idpais($valor){

        $er = new Er();
        
        if ( !$er->valida_numeros($valor) ){
            $this->errores[] = "Este idpais (".$valor.") no es valido";
        }
        $this->idpais = trim($valor);
    
    }

    public function get_escudo(){
        return $this->escudo;
    }
    
    public function set_escudo($valor){

        $er = new Er();
        
        if ( !$er->valida_imagen1($valor['name']) ){
            $this->errores[] = "Este escudo (".$valor['name'].") no es valido";
        }

        $this->escudo = trim($valor['name']);
    
    }

}

?>
