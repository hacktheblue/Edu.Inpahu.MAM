<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Soporte
 *
 * @author FERNANDO1
 */

include ("../Conexion/Conexion.php");

include ("Usuario.php");
abstract class Soporte  extends Usuario{
    //put your code here
    
    private $ClaseDb;
            
    public function __construct2(Db $ClaseDb)
    {
        $this->ClaseDb = $ClaseDb;
    }
    
    
        
    abstract public function SolucionarCaso();
    abstract public function ResponderCaso();
    abstract public function EscalarCaso();
    abstract public function VerReporteEquipo();
    
    
    
}
