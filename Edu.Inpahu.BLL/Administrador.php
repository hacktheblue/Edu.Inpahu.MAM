<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Administrador
 *
 * @author FERNANDO1
 */

require_once("../Conexion/Conexion.php");
require_once ("Usuario.php");
class Administrador extends Usuario{
    //put your code here
   
    public function SeguirCaso(){}
    public function VerificarIndicadores(){}
    public function GenerarReporteGlobal(){
        $from = "requerimiento";
        $caso = $this->GetDB()->select($from);
        return $caso;
    }
    public function GenerarReporteEspecifico($idCaso){
        $from = "requerimiento";
        $where['req_id'] = $idCaso;
        $caso = $this->GetDB()->select($from, $where);
        return $caso;
    }
    public function GenerarCaso($reqID,$tipificacionCasoId,$calificacionId,$divSubcategoriasId,$cateVsEstadosId,$origenSolicitudID,$reqTitulo,$reqDescripcion,$reqAct,$reqUsuarioSol,$reqFechaSol,$reqObservacion,$reqCambio,$tipoCasoID){
        $table = "requerimiento";
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
    public function AsignarCaso(){}
    public function ParametrizarAplicacion(){}
    public function CrearUsuario($cedula,$tipoUsuario, $nombre,$area,$sede,$telefono,$sexo,$password,$email){
            
        $clave = md5($password);
        $table = "usuarios";
        $vars['usu_cedula'] = $cedula;
        $vars['tpu_id']=$tipoUsuario; // Tener encuenta que se debe agregar el id y no la descripcion del tipo de usuario
        $vars['usu_nombre'] = $nombre;
        $vars['usu_area'] = $area;
        $vars['usu_sede'] = $sede;
        $vars['usu_telefono'] = $telefono;
        $vars['usu_sexo']=$sexo;
        $vars['usu_clave']=$clave;
        $vars['usu_email']=$email;
        $this->GetDB()->insert($table, $vars);
        
    }
    public function ActulizarUsuario($cedula,$tipoUsuario=NULL,$nombre=NULL, $area=NULL,$sexo=NULL,$telefono= NULL,$sede=NULL){
        $table = "usuarios";
        $set['usu_nombre'] = $nombre;
        $set['tpu_id']=$tipoUsuario;
        $set['usu_area'] = $area;
        $set['usu_sede'] = $sede;
        $set['usu_telefono'] = $telefono;
        $set['usu_sexo']=$sexo;
        $where['usu_cedula'] = $cedula;
        $this->GetDB()->update($table, $set, $where);
     
        
    }
    public function EliminarUsuario($cedula,$tipoUsuario=NULL,$nombre=NULL, $area=NULL,$sexo=NULL,$telefono= NULL,$sede=NULL){
        $table = "usuarios";
        $where['usu_cedula'] = $cedula;
        if($nombre!=NULL){    
            $where['usu_nombre'] = $nombre;}
        if($tipoUsuario!=NULL){    
            $where['tpu_id'] = $tipoUsuario;}
        if($area!=NULL){    
            $where['usu_area'] = $area;}
         if($sexo!=NULL){    
            $where['usu_sexo'] = $sexo;}
        if($telefono!=NULL){    
            $where['usu_telefono'] = $telefono;}
        if($sede!=NULL) {   
            $where['usu_sede'] = $sede;}
        $this->GetDB()->delete($table,$where);
    }
    public function InactivarUsuario(){}
    public function GenerarSolicitud(){}
}

$Mario = new Administrador($ClaseDataBase);
echo print_R($Mario->GenerarReporteGlobal());

//$Mario->IngresarAplicacion("1023925838", "JuanMaster"); 
//$Mario->CrearUsuario("1023925898", "Mario", "Sistemas", "Medellin", "2337176", "M","JuanMaster","email@example.com");
//$Mario->ActulizarUsuario("2", NULL, "dos");