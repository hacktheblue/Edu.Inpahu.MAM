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
    
    public function GetArea() {
        return $this->area;
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
    
    public function IngresarAplicacion($id,$password){
        $passwordHash = md5($password);
        $where['usu_id'] = $id;
        $from = "usuarios";        
        $User = $this->ClaseDb->select($from, $where);
            if($User != 0 && $passwordHash == $User['usu_password']){
                $_SESSION['USUARIOLOG'] = true;
                $_SESSION['USUARIOID'] = $id;
                $this->InicializarUsuario($User);
            }
            else{
                $_SESSION['USUARIOLOG'] = false;
            }
    }
    
    private function InicializarUsuario($usuario){
        $this->pimerNombre = $usuario['usu_nombre'];
        $this->segundoNombre = $usuario['usu_nombre'];
        $this->primerApellido = $usuario['usu_nombre'];
        $this->segundoApellido = $usuario['usu_nombre'];
        $this->cedula = $usuario['usu_cedula'];
        $this->telefono = $usuario['usu_telefono'];
        $this->email = $usuario['usu_email'];
        $this->area = $usuario['usu_area'];
        $this->sede = $usuario['usu_sede'];
    }

    abstract public function SeguirCaso();
    abstract public function VerificarIndicadores();
    abstract public function GenerarReporte();
    abstract public function GenerarCaso();
}
