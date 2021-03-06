<?php

class Jugador extends Modelo{
    public $nombre_tabla = 'jugador';
    public $pk = 'idjugador';
    
    
    public $atributos = array(
        'numero'=>array(),
        'idintegrante'=>array(),
        'idposicion'=>array(),
    );
    
    public $errores = array( );
    
    private $numero;
    private $idintegrante;
    private $idposicion;
       
    
    function Jugador(){
        parent::Modelo();
    }
    
    public function get_atributos(){
        $rs = array();
        foreach ($this->atributos as $key => $value) {
            $rs[$key]=$this->$key;
        }
        return $rs;
    }
    
    
    public function get_numero(){
        return $this->numero;
    } 

    public function set_numero($valor){

        $er = new Er();
        
        if ( !$er->valida_numeros($valor) ){
            $this->errores[] = "Este numero (".$valor.") no es valido";
        }
            $this->numero = trim($valor);
        
    }

    public function get_idintegrante(){
        return $this->idintegrante;
    }
    
    public function set_idintegrante($valor){

        $er = new Er();
        
        if ( !$er->valida_ids($valor) ){
            $this->errores[] = "Este idintegrante (".$valor.") no es valido";
        }
        $this->idintegrante = trim($valor);
    }

    public function get_idposicion(){
        return $this->idposicion;
    }
    
    public function set_idposicion($valor){

        $er = new Er();
        
        if ( !$er->valida_ids($valor) ){
            $this->errores[] = "Este idposicion (".$valor.") no es valido";
        }
        $this->idposicion = trim($valor);
        }
        
    }


?>
