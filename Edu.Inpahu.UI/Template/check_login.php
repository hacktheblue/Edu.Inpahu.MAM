<?php
    //Tener cuidado con variable de session
    require_once ('../../Edu.Inpahu.BLL/Db.php');
    require_once("../../Conexion/Conexion.php");
    require_once '../../Edu.Inpahu.BLL/Libraries.php';
    session_start();
    //en este punto se presenta una excepcion
    $userId = $_POST['userNS'];
    $password = $_POST['passwordS'];
    $Agente = new AgenteAplicacion($ClaseDataBase);
    
    ECHO $Agente-> ValidarIngreso($userId,$password);

