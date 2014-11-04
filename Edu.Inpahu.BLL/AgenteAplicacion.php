<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of AgenteAplicacion
 *
 * @author FERNANDO1
 */

require_once("../Conexion/Conexion.php");
class AgenteAplicacion {
    //put your code here
    private $ClaseDb;
    public function __construct(Db $ClaseDb)
    {
        $this->ClaseDb = $ClaseDb;
    }
    public function MostrarModulos($tipoUsuarioId){
        $from = "permisos";
        $modulosPermitidos= NULL;
        $infoModulos=NULL;
        $where['per_tpu_id']=$tipoUsuarioId;
        $Permisos = $this->ClaseDb->select($from, $where);
        if($Permisos['per_modulo1']!=0){
            $modulosPermitidos .="1*";
        }
        if($Permisos['per_modulo2']!=0){
            $modulosPermitidos .="2*";
        }
        if($Permisos['per_modulo3']!=0){
            $modulosPermitidos .="3*";
        }
        if($Permisos['per_modulo4']!=0){
            $modulosPermitidos .="4*";
        }
        if($Permisos['per_modulo5']!=0){
            $modulosPermitidos .="5*";
        }
        if($Permisos['per_modulo6']!=0){
            $modulosPermitidos .="6*";
        }
        if($Permisos['per_modulo7']!=0){
            $modulosPermitidos .="7*";
        }
        if($Permisos['per_modulo8']!=0){
            $modulosPermitidos .="8";
        }
        $modulosPermArray = explode("*",$modulosPermitidos);
        foreach ($modulosPermArray as  $value) {
            $i =0;
            $from = "modulos";
            $where2['mdo_number']=$value;
            $informacionModulos[$i]= $this->ClaseDb->select($from, $where2);
            $infoModulos.= $informacionModulos[$i]['mdo_nombre']."*";
            $infoModulos.= $informacionModulos[$i]['mdo_cssIconoForm']."*";
            $infoModulos.= $informacionModulos[$i]['mdo_number']."*";
           $i++;
        }
        print_r($infoModulos);
        
    }
    
    
}
$robot = new AgenteAplicacion($ClaseDataBase);
$robot->MostrarModulos("1"); 