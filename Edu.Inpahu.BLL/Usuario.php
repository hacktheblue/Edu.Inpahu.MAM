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
    
    abstract public function IngresarAplicacion();
    abstract public function SeguirCaso();
    abstract public function VerificarIndicadores();
    abstract public function GenerarReporte();
    abstract public function GenerarCaso();
}
