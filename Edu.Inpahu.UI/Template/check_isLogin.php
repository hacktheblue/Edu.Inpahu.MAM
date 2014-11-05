<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

// Validar campo para generar excepciones
$validacion1=0;
$validacion2=0;
if($_SESSION['USUARIOLOG']==true){
    $validacion1 = 1;
    
}

if(isset($_SESSION['USUARIOID'])){
    $validacion2= 1;
}
	
$resultValid = $validacion1+$validacion2;

if($resultValid!=2){
  header('Location: Login.php');   // No está logeado en el sistema
}