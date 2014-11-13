<?php

namespace Mam\MainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Historico
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Historico
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
     * @var string
     *
     * @ORM\Column(name="His_requerimiento", type="string", length=30)
     */
    private $hisRequerimiento;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="His_fecha", type="date")
     */
    private $hisFecha;

    /**
     * @var string
     *
     * @ORM\Column(name="His_estado", type="string", length=1)
     */
    private $hisEstado;


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
     * Set hisRequerimiento
     *
     * @param string $hisRequerimiento
     * @return Historico
     */
    public function setHisRequerimiento($hisRequerimiento)
    {
        $this->hisRequerimiento = $hisRequerimiento;

        return $this;
    }

    /**
     * Get hisRequerimiento
     *
     * @return string 
     */
    public function getHisRequerimiento()
    {
        return $this->hisRequerimiento;
    }

    /**
     * Set hisFecha
     *
     * @param \DateTime $hisFecha
     * @return Historico
     */
    public function setHisFecha($hisFecha)
    {
        $this->hisFecha = $hisFecha;

        return $this;
    }

    /**
     * Get hisFecha
     *
     * @return \DateTime 
     */
    public function getHisFecha()
    {
        return $this->hisFecha;
    }

    /**
     * Set hisEstado
     *
     * @param string $hisEstado
     * @return Historico
     */
    public function setHisEstado($hisEstado)
    {
        $this->hisEstado = $hisEstado;

        return $this;
    }

    /**
     * Get hisEstado
     *
     * @return string 
     */
    public function getHisEstado()
    {
        return $this->hisEstado;
    }
}
