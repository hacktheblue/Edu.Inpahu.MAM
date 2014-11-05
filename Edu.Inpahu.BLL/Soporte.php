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



require_once ("Usuario.php");
abstract class Soporte  extends Usuario{
    //put your code here
        
    abstract public function SolucionarCaso();
    abstract public function ResponderCaso();
    abstract public function EscalarCaso();
    abstract public function VerReporteEquipo();
    
    
    
}
