<?php
namespace Mam\MainBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;



use Mam\MainBundle\Entity\Usuarios;


class UsuarioController extends Controller
{
    public function addAction($nombre,$cedula,$cede,$area)
    {
       $usuario = new Usuarios();
       $usuario->setUsuNombre($nombre);
       $usuario->setUsuCedula($cedula);
        $usuario->setUsuArea($area);
       $usuario->setUsuSede($cede);
       $usuario->setUsuTelefono($area);
       $usuario->setUsuCodigo($area);
       $usuario->setUsuAct($area);
       $usuario->setUsuClave($area);
       $usuario->setTpuId(1);
       
       $em = $this->getDoctrine()->getManager();
       $em->persist($usuario);
       $em->flush();
       
       return new Response(
               
               'Id del nuevo prducto: '.$usuario->getId().''
       );
    }
    
    public function deleteAction($name)
    {
        return $this->render('MamMainBundle:Default:index.html.twig', array('name' => $name));
    }
    
    public function updateAction($name)
    {
        return $this->render('MamMainBundle:Default:index.html.twig', array('name' => $name));
    }
    
    public function selectOneAction($name)
    {
        return $this->render('MamMainBundle:Default:index.html.twig', array('name' => $name));
    }
    
    public function selectAllAction($name)
    {
        return $this->render('MamMainBundle:Default:index.html.twig', array('name' => $name));
    }
}