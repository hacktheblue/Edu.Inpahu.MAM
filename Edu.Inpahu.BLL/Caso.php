<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Caso
 *
 * @author FERNANDO1
 */
class Caso {
    //put your code here
    private $numeroCaso;
    private $descripcion;
    private $responsable;
    private $fechaSolicitud;
    private $fechaCierre;
    private $propietarioCaso;
    private $area;
    private $estado;
    private $calificacionCaso;
    private $computadorSerial;
    private $computadorOS;
    private $computadorUsuario;
    
    
    public function GetComputadorSerial() {
        return $this->computadorSerial;
    }
    public function SetComputadorSerial($computadorSerial) {
        $this->computadorSerial = $computadorSerial;
    }
    
    public function GetComputadorOS() {
        return $this->computadorOS;
    }
    public function SetComputadorOS($computadorOS) {
        $this->computadorOS = $computadorOS;
    }
    
    public function GetComputadorUsuario() {
        return $this->computadorUsuario;
    }
    public function SetComputadorUsuario($computadorUsuario) {
        $this->computadorUsuario = $computadorUsuario;
    }
    
    public function GetNumeroCaso() {
        return $this->numeroCaso;
    }
    public function SetNumeroCaso($numeroCaso) {
        $this->numeroCaso = $numeroCaso;
    }
    
    public function GetDescripcion() {
        return $this->descripcion;
    }
    public function SetDescripcion($descripcion) {
        $this->descripcion = $descripcion;
    }
    
    public function GetResponsable() {
        return $this->responsable;
    }
    public function SetResponsable($responsable) {
        $this->responsable = $responsable;
    }
    
    public function GetFechaSolicitud() {
        return $this->fechaSolicitud;
    }
    public function SetFechaSolicitud($fechaSolicitud) {
        $this->fechaSolicitud = $fechaSolicitud;
    }
    
    public function GetFechaCierre() {
        return $this->fechaCierre;
    }
    public function SetFechaCierre($fechaCierre) {
        $this->fechaCierre = $fechaCierre;
    }
    
    public function GetPropietarioCaso() {
        return $this->propietarioCaso;
    }
    public function SetPropietarioCaso($propietarioCaso) {
        $this->propietarioCaso = $propietarioCaso;
    }
    
    public function GetArea() {
        return $this->area;
    }
    public function SetArea($area) {
        $this->area = $area;
    }
    
    public function GetEstado() {
        return $this->estado;
    }
    public function SetEstado($estado) {
        $this->estado = $estado;
    }
    
    public function GetCalificacionCaso() {
        return $this->calificacionCaso;
    }
    public function SetCalificacionCaso($calificacionCaso) {
        $this->calificacionCaso = $calificacionCaso;
    }
    
}
