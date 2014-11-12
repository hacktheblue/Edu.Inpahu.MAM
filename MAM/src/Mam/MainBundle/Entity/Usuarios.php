<?php

namespace Mam\MainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * usuarios
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Usuarios
{
    /**
     * @var integer
     *
     * @ORM\Column(name="usu_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $usuId;

    /**
     * @var string
     *
     * @ORM\Column(name="usu_nombre", type="string", length=45)
     */
    private $usuNombre;

    /**
     * @var string
     *
     * @ORM\Column(name="usu_cedula", type="string", length=20)
     */
    private $usuCedula;

    /**
     * @var string
     *
     * @ORM\Column(name="usu_sede", type="string", length=35)
     */
    private $usuSede;

    /**
     * @var string
     *
     * @ORM\Column(name="usu_area", type="string", length=35)
     */
    private $usuArea;

    /**
     * @var string
     *
     * @ORM\Column(name="usu_telefono", type="string", length=20)
     */
    private $usuTelefono;

    /**
     * @var string
     *
     * @ORM\Column(name="usu_codigo", type="string", length=35)
     */
    private $usuCodigo;

    /**
     * @var string
     *
     * @ORM\Column(name="usu_clave", type="string", length=50)
     */
    private $usuClave;

    /**
     * @var string
     *
     * @ORM\Column(name="usu_act", type="string", length=10)
     */
    private $usuAct;

    /**
     * @var integer
     *
     * @ORM\Column(name="tpu_id", type="integer")
     */
    private $tpuId;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->usuId;
    }

    /**
     * Set usuNombre
     *
     * @param string $usuNombre
     * @return usuarios
     */
    public function setUsuNombre($usuNombre)
    {
        $this->usuNombre = $usuNombre;

        return $this;
    }

    /**
     * Get usuNombre
     *
     * @return string 
     */
    public function getUsuNombre()
    {
        return $this->usuNombre;
    }

    /**
     * Set usuCedula
     *
     * @param string $usuCedula
     * @return usuarios
     */
    public function setUsuCedula($usuCedula)
    {
        $this->usuCedula = $usuCedula;

        return $this;
    }

    /**
     * Get usuCedula
     *
     * @return string 
     */
    public function getUsuCedula()
    {
        return $this->usuCedula;
    }

    /**
     * Set usuSede
     *
     * @param string $usuSede
     * @return usuarios
     */
    public function setUsuSede($usuSede)
    {
        $this->usuSede = $usuSede;

        return $this;
    }

    /**
     * Get usuSede
     *
     * @return string 
     */
    public function getUsuSede()
    {
        return $this->usuSede;
    }

    /**
     * Set usuArea
     *
     * @param string $usuArea
     * @return usuarios
     */
    public function setUsuArea($usuArea)
    {
        $this->usuArea = $usuArea;

        return $this;
    }

    /**
     * Get usuArea
     *
     * @return string 
     */
    public function getUsuArea()
    {
        return $this->usuArea;
    }

    /**
     * Set usuTelefono
     *
     * @param string $usuTelefono
     * @return usuarios
     */
    public function setUsuTelefono($usuTelefono)
    {
        $this->usuTelefono = $usuTelefono;

        return $this;
    }

    /**
     * Get usuTelefono
     *
     * @return string 
     */
    public function getUsuTelefono()
    {
        return $this->usuTelefono;
    }

    /**
     * Set usuCodigo
     *
     * @param string $usuCodigo
     * @return usuarios
     */
    public function setUsuCodigo($usuCodigo)
    {
        $this->usuCodigo = $usuCodigo;

        return $this;
    }

    /**
     * Get usuCodigo
     *
     * @return string 
     */
    public function getUsuCodigo()
    {
        return $this->usuCodigo;
    }

    /**
     * Set usuClave
     *
     * @param string $usuClave
     * @return usuarios
     */
    public function setUsuClave($usuClave)
    {
        $this->usuClave = $usuClave;

        return $this;
    }

    /**
     * Get usuClave
     *
     * @return string 
     */
    public function getUsuClave()
    {
        return $this->usuClave;
    }

    /**
     * Set usuAct
     *
     * @param string $usuAct
     * @return usuarios
     */
    public function setUsuAct($usuAct)
    {
        $this->usuAct = $usuAct;

        return $this;
    }

    /**
     * Get usuAct
     *
     * @return string 
     */
    public function getUsuAct()
    {
        return $this->usuAct;
    }

    /**
     * Set tpuId
     *
     * @param integer $tpuId
     * @return usuarios
     */
    public function setTpuId($tpuId)
    {
        $this->tpuId = $tpuId;

        return $this;
    }

    /**
     * Get tpuId
     *
     * @return integer 
     */
    public function getTpuId()
    {
        return $this->tpuId;
    }
}
