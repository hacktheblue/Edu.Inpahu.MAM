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


class AgenteAplicacion {
    //put your code here
    private $ClaseDb;
    public  $UsuarioActual="1";
    public function __construct(Db $ClaseDb)
    {
        $this->ClaseDb = $ClaseDb;
    }
    public function MostrarModulos($tipoUsuarioId){
        
        $i=0;
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
           
            
            $from = "modulos";
            $where2['mdo_number']=$value;
            $informacionModulos[$i]= $this->ClaseDb->select($from, $where2);
            
             
            $infoModulos[$i]['mdo_number'] =$informacionModulos[$i]['mdo_number'];
            $infoModulos[$i]['mdo_nombre']=$informacionModulos[$i]['mdo_nombre'];
            $infoModulos[$i]['mdo_cssIconoForm']=$informacionModulos[$i]['mdo_cssIconoForm'];
             $infoModulos[$i]['mdo_viewName']=$informacionModulos[$i]['mdo_viewName'];
            $i++;
        }

      return $infoModulos;
    }
    
    public function ValidarIngreso($id,$password){
        $passwordHash = md5($password);
        $where['USU_CEDULA'] = $id;
        $from = "usuarios";        
        $User = $this->ClaseDb->select($from, $where);      
        
            if(is_array($User) && $passwordHash == $User['USU_CLAVE']){
                $_SESSION['USUARIOLOG'] = true;
                $_SESSION['USUARIOID'] = $id;
                $this->CrearUsuario($User,$User['TPU_ID']);
                echo "1";// Si ingresa a la aplicacion
            }
            else{
                $_SESSION['USUARIOLOG'] = false;
                echo "0";//No ingreso a la aplicacion 
            }
         
    }
    
    private function CrearUsuario($User,$tpuID){
       
        switch ($tpuID) {
            case 1:
                $_SESSION['UsuarioActual'] = new Administrador($this->ClaseDb);
                $_SESSION['UsuarioActual']->InicializarUsuario($User);
               
                break;
            case 2:
                 $_SESSION['UsuarioActual'] = new Coordinador($this->ClaseDb);
                 $_SESSION['UsuarioActual']->InicializarUsuario($User);
                break;
            case 3:
                 $_SESSION['UsuarioActual'] = new SoporteClinico($this->ClaseDb);
                 $_SESSION['UsuarioActual']->InicializarUsuario($User);

                break;
            case 4:
                 $_SESSION['UsuarioActual'] = new SoporteInfraestructura($this->ClaseDb);
                 $_SESSION['UsuarioActual']->InicializarUsuario($User);

                break;
            case 5:
                 $_SESSION['UsuarioActual'] = new SoporteInformatica($this->ClaseDb);
                 $_SESSION['UsuarioActual']->InicializarUsuario($User);

                break;
            case 6:
                 $_SESSION['UsuarioActual'] = new SupervisorClinico($this->ClaseDb);
                 $_SESSION['UsuarioActual']->InicializarUsuario($User);

                break;
            case 7:
                 $_SESSION['UsuarioActual'] = new SupervisorInfraestructura($this->ClaseDb);
                 $_SESSION['UsuarioActual']->InicializarUsuario($User);

                break;
            case 8:
                 $_SESSION['UsuarioActual'] = new SupervisorInformatica($this->ClaseDb);
                 $_SESSION['UsuarioActual']->InicializarUsuario($User);

                break;

            default:
                 $_SESSION['UsuarioActual'] = new UsuarioFinal($this->ClaseDb);
                 $_SESSION['UsuarioActual']->InicializarUsuario($User);
                break;
        }
    }
    
    
}
//$robot = new AgenteAplicacion($ClaseDataBase);
//print_r($robot->MostrarModulos("1")); 