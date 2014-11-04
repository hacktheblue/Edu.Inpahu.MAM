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
    
    private $ClaseDb;

    public function __construct(Db $ClaseDb)
    {
        $this->ClaseDb = $ClaseDb;
    }
  
    public function SeguirCaso(){}
    public function VerificarIndicadores(){}
    public function GenerarReporte($idCaso){
        $from = "requerimiento";
        $where['req_id'] = $idCaso;
        $caso = $this->ClaseDb->select($from, $where);
    }
    public function GenerarCaso(){}
    public function AsignarCaso(){}
    public function ParametrizarAplicacion(){}
    public function CrearUsuario($id,$nombre,$area,$sede,$telefono,$sexo){
        $table = "usuarios";
        $vars['usu_id'] = $id;
        $vars['usu_nombre'] = $nombre;
        $vars['usu_area'] = $area;
        $vars['usu_sede'] = $sede;
        $vars['usu_telefono'] = $telefono;
        $vars['usu_sexo']=$sexo;
        $this->ClaseDb->insert($table, $vars);
        
    }
    public function ActulizarUsuario($id,$nombre=NULL, $area=NULL,$sexo=NULL,$telefono= NULL,$sede=NULL){
        $table = "usuarios";
        $set['usu_nombre'] = $nombre;
        $set['usu_area'] = $area;
        $set['usu_sede'] = $sede;
        $set['usu_telefono'] = $telefono;
        $set['usu_sexo']=$sexo;
        $where['usu_id'] = $id;
        $this->ClaseDb->update($table, $set, $where);
        
    }
    public function EliminarUsuario($id,$nombre=NULL, $area=NULL,$sexo=NULL,$telefono= NULL,$sede=NULL){
    $table = "usuarios";
    $where['usu_id'] = $id;

    $this->ClaseDb->delete($table,$where);
    }
    public function InactivarUsuario(){}
}

//$Mario = new Administrador($ClaseDb);
//$Mario->CrearUsuario("3", "Andres", "Sistemas", "Medellin", "2337176", "M");
//$Mario->EliminarUsuario("3");