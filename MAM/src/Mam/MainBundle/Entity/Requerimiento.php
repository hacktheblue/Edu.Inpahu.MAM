<?php

namespace Mam\MainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Requerimiento
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Requerimiento
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
     * @ORM\Column(name="Tpc_id", type="integer")
     */
    private $tpcId;

    /**
     * @var string
     *
     * @ORM\Column(name="Req_descripcion", type="string", length=80)
     */
    private $reqDescripcion;

    /**
     * @var string
     *
     * @ORM\Column(name="Req_act", type="string", length=30)
     */
    private $reqAct;

    /**
     * @var string
     *
     * @ORM\Column(name="Req_usuario", type="string", length=30)
     */
    private $reqUsuario;

    /**
     * @var string
     *
     * @ORM\Column(name="Req_Responsable", type="string", length=30)
     */
    private $reqResponsable;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Req_FechaSoli", type="date")
     */
    private $reqFechaSoli;

    /**
     * @var string
     *
     * @ORM\Column(name="Req_cambio", type="string", length=30)
     */
    private $reqCambio;


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
     * Set tpcId
     *
     * @param integer $tpcId
     * @return Requerimiento
     */
    public function setTpcId($tpcId)
    {
        $this->tpcId = $tpcId;

        return $this;
    }

    /**
     * Get tpcId
     *
     * @return integer 
     */
    public function getTpcId()
    {
        return $this->tpcId;
    }

    /**
     * Set reqDescripcion
     *
     * @param string $reqDescripcion
     * @return Requerimiento
     */
    public function setReqDescripcion($reqDescripcion)
    {
        $this->reqDescripcion = $reqDescripcion;

        return $this;
    }

    /**
     * Get reqDescripcion
     *
     * @return string 
     */
    public function getReqDescripcion()
    {
        return $this->reqDescripcion;
    }

    /**
     * Set reqAct
     *
     * @param string $reqAct
     * @return Requerimiento
     */
    public function setReqAct($reqAct)
    {
        $this->reqAct = $reqAct;

        return $this;
    }

    /**
     * Get reqAct
     *
     * @return string 
     */
    public function getReqAct()
    {
        return $this->reqAct;
    }

    /**
     * Set reqUsuario
     *
     * @param string $reqUsuario
     * @return Requerimiento
     */
    public function setReqUsuario($reqUsuario)
    {
        $this->reqUsuario = $reqUsuario;

        return $this;
    }

    /**
     * Get reqUsuario
     *
     * @return string 
     */
    public function getReqUsuario()
    {
        return $this->reqUsuario;
    }

    /**
     * Set reqResponsable
     *
     * @param string $reqResponsable
     * @return Requerimiento
     */
    public function setReqResponsable($reqResponsable)
    {
        $this->reqResponsable = $reqResponsable;

        return $this;
    }

    /**
     * Get reqResponsable
     *
     * @return string 
     */
    public function getReqResponsable()
    {
        return $this->reqResponsable;
    }

    /**
     * Set reqFechaSoli
     *
     * @param \DateTime $reqFechaSoli
     * @return Requerimiento
     */
    public function setReqFechaSoli($reqFechaSoli)
    {
        $this->reqFechaSoli = $reqFechaSoli;

        return $this;
    }

    /**
     * Get reqFechaSoli
     *
     * @return \DateTime 
     */
    public function getReqFechaSoli()
    {
        return $this->reqFechaSoli;
    }

    /**
     * Set reqCambio
     *
     * @param string $reqCambio
     * @return Requerimiento
     */
    public function setReqCambio($reqCambio)
    {
        $this->reqCambio = $reqCambio;

        return $this;
    }

    /**
     * Get reqCambio
     *
     * @return string 
     */
    public function getReqCambio()
    {
        return $this->reqCambio;
    }
}
