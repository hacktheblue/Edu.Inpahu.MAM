<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        
        // Libraries
            require_once ('../../Edu.Inpahu.BLL/Db.php');
            require_once("../../Conexion/Conexion.php");
            require_once '../../Edu.Inpahu.BLL/Libraries.php';
   
        //Creacion de objeto Agente  
         
        
        ?>
        <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li class="sidebar-search">
                            <div class="input-group custom-search-form">
                                <input type="text" class="form-control" placeholder="Search...">
                                <span class="input-group-btn">
                                <button class="btn btn-default" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                            </div>
                            <!-- /input-group -->
                        </li>
                        <?PHP 
                         $Agente = new AgenteAplicacion($ClaseDataBase);
                         
                         $modulosArray = $Agente->MostrarModulos($_SESSION['UsuarioActual']->GetTPU());
                         
                        foreach ($modulosArray as $key => $value) {
                             echo ' <li>
                                        <a  href="';echo $value['mdo_viewName'].'"><i class="fa '; echo $value['mdo_cssIconoForm'].'"></i> '; echo $value['mdo_nombre'].'</a>
                                    </li>';  
                        }
                        
                        ?>                       
                       
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
    </body>
</html>
