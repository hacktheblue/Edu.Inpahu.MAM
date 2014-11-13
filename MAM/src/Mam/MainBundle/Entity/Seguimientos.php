<?php

namespace Mam\MainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Seguimientos
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Seguimientos
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var integer
     *
     * @ORM\Column(name="Req_id", type="integer")
     */
    private $reqId;

    /**
     * @var string
     *
     * @ORM\Column(name="Seg_observacion", type="string", length=46)
     */
    private $segObservacion;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Seg_FechaSeg", type="date")
     */
    private $segFechaSeg;

    /**
     * @var string
     *
     * @ORM\Column(name="Seg_usuario", type="string", length=45)
     */
    private $segUsuario;

    /**
     * @var integer
     *
     * @ORM\Column(name="Seg_solucion", type="integer")
     */
    private $segSolucion;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set reqId
     *
     * @param integer $reqId
     * @return Seguimientos
     */
    public function setReqId($reqId)
    {
        $this->reqId = $reqId;

        return $this;
    }

    /**
     * Get reqId
     *
     * @return integer 
     */
    public function getReqId()
    {
        return $this->reqId;
    }

    /**
     * Set segObservacion
     *
     * @param string $segObservacion
     * @return Seguimientos
     */
    public function setSegObservacion($segObservacion)
    {
        $this->segObservacion = $segObservacion;

        return $this;
    }

    /**
     * Get segObservacion
     *
     * @return string 
     */
    public function getSegObservacion()
    {
        return $this->segObservacion;
    }

    /**
     * Set segFechaSeg
     *
     * @param \DateTime $segFechaSeg
     * @return Seguimientos
     */
    public function setSegFechaSeg($segFechaSeg)
    {
        $this->segFechaSeg = $segFechaSeg;

        return $this;
    }

    /**
     * Get segFechaSeg
     *
     * @return \DateTime 
     */
    public function getSegFechaSeg()
    {
        return $this->segFechaSeg;
    }

    /**
     * Set segUsuario
     *
     * @param string $segUsuario
     * @return Seguimientos
     */
    public function setSegUsuario($segUsuario)
    {
        $this->segUsuario = $segUsuario;

        return $this;
    }

    /**
     * Get segUsuario
     *
     * @return string 
     */
    public function getSegUsuario()
    {
        return $this->segUsuario;
    }

    /**
     * Set segSolucion
     *
     * @param integer $segSolucion
     * @return Seguimientos
     */
    public function setSegSolucion($segSolucion)
    {
        $this->segSolucion = $segSolucion;

        return $this;
    }

    /**
     * Get segSolucion
     *
     * @return integer 
     */
    public function getSegSolucion()
    {
        return $this->segSolucion;
    }
}
