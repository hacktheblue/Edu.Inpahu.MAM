<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of SoporteInformatica
 *
 * @author FERNANDO1
 */

include ("../Conexion/Conexion.php");

include ("Soporte.php");

class SoporteInformatica extends Soporte{
    //put your code here
    
    private $ClaseDb;
            
    public function __construct3(Db $ClaseDb)
    {
        $this->ClaseDb = $ClaseDb;
    }
    
    
    
    public function IngresarAplicacion(){}
    public function SeguirCaso(){}
    public function VerificarIndicadores(){}
    public function GenerarReporte(){}
    public function GenerarCaso(){}
    public function SolucionarCaso(){}
    public function ResponderCaso(){}
    public function EscalarCaso(){}
    public function VerReporteEquipo(){}
}
