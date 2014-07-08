<?php
function prueba_referencia_global() {
    global $obj;
    $obj = &new stdclass;
}

function prueba_no_referencia_global() {
    global $obj;
    $obj = new stdclass;
}

prueba_referencia_global();
var_dump($obj);
prueba_no_referencia_global();
var_dump($obj);
?>