<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of SoporteClinico
 *
 * @author FERNANDO1
 */

require_once ("Soporte.php");
class SoporteClinico extends Soporte{
    //put your code here
   
    public function SeguirCaso(){}
    public function VerificarIndicadores(){}
    public function GenerarReporteGlobal(){
        $from = "requerimiento";
        $where['TPC_ID'] = 1;
        $caso = $this->GetDB()->select($from, $where);
        return $caso;
    }
    public function GenerarReporteEspecifico($idCaso){
        $from = "requerimiento";
        $where['REQ_ID'] = $idCaso;
        $where['TPC_ID'] = 1;
        $caso = $this->GetDB()->select($from, $where);
        return $caso;
    }
    public function GenerarCaso($reqID,$tipificacionCasoId,$calificacionId,$divSubcategoriasId,$cateVsEstadosId,$origenSolicitudID,$reqTitulo,$reqDescripcion,$reqAct,$reqUsuarioSol,$reqFechaSol,$reqObservacion,$reqCambio,$tipoCasoID=NULL){
        $table = "requerimiento";
        if($tipoCasoID==NULL){
            $tipoCasoID = 1;
        } 
        $vars['REQ_ID'] = $reqID;
        $vars['TIPC_ID']=$tipificacionCasoId; 
        $vars['TPC_ID'] = $tipoCasoID;
        $vars['DIV_ID'] = $divSubcategoriasId;
        $vars['CVSE_ID'] = $cateVsEstadosId;
        $vars['CALI_ID'] = $calificacionId;
        $vars['ORGS_ID'] = $origenSolicitudID;
        $vars['REQ_TITULO']=$reqTitulo;
        $vars['REQ_DESCRIPCION']=$reqDescripcion;
        $vars['REQ_ACT']=$reqAct;
        $vars['REQ_USUARIOSOL']=$reqUsuarioSol;
        $vars['REQ_FECHASOL']=$reqFechaSol;
        $vars['REQ_OBSERVACION']=$reqObservacion;
        $vars['REQ_CAMBIO']=$reqCambio;
        $this->GetDB()->insert($table, $vars);
    }
    public function GenerarSolicitud(){}
    public function SolucionarCaso(){}
    public function ResponderCaso(){}
    public function EscalarCaso(){}
    public function VerReporteEquipo(){}
 }
//
//   $Juan = new SoporteClinico($ClaseDataBase);
//   echo print_R($Juan->GenerarReporteGlobal());
