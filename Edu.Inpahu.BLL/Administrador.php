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

include ("../Conexion/Conexion.php");
include ("Db.php");

class Administrador extends Usuario{
    //put your code here
    
    private $ClaseDb;

    public function __construct(Db $ClaseDb)
    {
        $this->ClaseDb = $ClaseDb;
    }
    public function IngresarAplicacion(){}
    public function SeguirCaso(){}
    public function VerificarIndicadores(){}
    public function GenerarReporte(){}
    public function GenerarCaso(){}
    public function AsignarCaso(){}
    public function ParametrizarAplicacion(){}
    public function CrearUsuario($id,$nombre,$area,$sede,$telefono){
        $table = "usuarios";
        $vars['usu_id'] = $id;
        $vars['usu_nombre'] = $nombre;
        $vars['usu_area'] = $area;
        $vars['usu_sede'] = $sede;
        $vars['usu_telefono'] = $telefono;
        
        $this->ClaseDb->insert($table, $vars);
        
    }
    public function ActulizarUsuario(){}
    public function InactivarUsuario(){}
}
