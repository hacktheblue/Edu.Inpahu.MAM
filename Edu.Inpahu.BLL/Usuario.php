<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Usuario
 *
 * @author FERNANDO1
 */


abstract class Usuario {
//put your code here
    private $pimerNombre;
    private $segundoNombre;
    private $primerApellido;
    private $segundoApellido;
    private $cedula;
    private $telefono;
    private $email;
    private $area;
    private $ciudad;
    private $ClaseDb;
    private $tipoUsuarioId;
    
    public function __construct(Db $ClaseDb)
    {
        $this->ClaseDb = $ClaseDb;
    }
    
    public function GetArea() {
        return $this->area;
    }
    
    public function SetDB() {
        $this->ClaseDb;
    }
    
    public function GetDB() {
        return $this->ClaseDb;
    }
    public function SetArea($area) {
        $this->area = $area;
    }
    
    public function GetPrimerNombre() {
        return $this->pimerNombre;
    }
    public function SetPrimerNombre($pimerNombre) {
        $this->pimerNombre = $pimerNombre;
    }
    
    public function GetSegundoNombre() {
        return $this->segundoNombre;
    }
    public function SetSegundoNombre($segundoNombre) {
        $this->segundoNombre = $segundoNombre;
    }
    
    public function GetPrimerApellido() {
        return $this->primerApellido;
    }
    public function SetPrimerApellido($primerApellido) {
        $this->primerApellido = $primerApellido;
    }
    
    public function GetSegundoApellido() {
        return $this->segundoApellido;
    }
    public function SetSegundoApellido($segundoApellido) {
        $this->segundoApellido = $segundoApellido;
    }
    
    public function GetCedula() {
        return $this->cedula;
    }
    public function SetCedula($cedula) {
        $this->cedula = $cedula;
    }
    public function GetTelefono() {
        return $this->telefono;
    }
    public function SetTelefono($telefono) {
        $this->telefono = $telefono;
    }
    public function GetEmail() {
        return $this->email;
    }
    public function SetEmail($email) {
        $this->email = $email;
    }
    
    public function GetCiudad() {
        return $this->ciudad;
    }
    public function SetCiudad($ciudad) {
        $this->ciudad = $ciudad;
    }
    
    public function GetTPU() {
        return $this->tipoUsuarioId;
    }
       
    public function InicializarUsuario($usuario){
        $this->pimerNombre = $usuario['USU_NOMBRE'];
        $this->segundoNombre = $usuario['USU_NOMBRE'];
        $this->primerApellido = $usuario['USU_NOMBRE'];
        $this->segundoApellido = $usuario['USU_NOMBRE'];
        $this->cedula = $usuario['USU_CEDULA'];
        $this->telefono = $usuario['USU_TELEFONO'];
        $this->email = $usuario['USU_EMAIL'];
        $this->area = $usuario['USU_AREA'];
        $this->sede = $usuario['USU_SEDE'];
        $this->tipoUsuarioId = $usuario['TPU_ID'];
    }

    abstract public function SeguirCaso();
    abstract public function VerificarIndicadores();
    abstract public function GenerarReporteGlobal();
    abstract public function GenerarReporteEspecifico($idReporte);
    abstract public function GenerarCaso($reqID,$tipificacionCasoId,$calificacionId,$divSubcategoriasId,$cateVsEstadosId,$origenSolicitudID,$reqTitulo,$reqDescripcion,$reqAct,$reqUsuarioSol,$reqFechaSol,$reqObservacion,$reqCambio,$tipoCasoID);
    abstract public function GenerarSolicitud();
}
