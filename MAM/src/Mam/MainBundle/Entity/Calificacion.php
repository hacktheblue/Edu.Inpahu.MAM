<?php

namespace Mam\MainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Calificacion
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Calificacion
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
     * @ORM\Column(name="Cal_Usuario", type="string", length=35)
     */
    private $calUsuario;

    /**
     * @var integer
     *
     * @ORM\Column(name="Cal_Req_id", type="integer")
     */
    private $calReqId;

    /**
     * @var string
     *
     * @ORM\Column(name="Cal_qos", type="string", length=1)
     */
    private $calQos;


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
     * Set calUsuario
     *
     * @param string $calUsuario
     * @return Calificacion
     */
    public function setCalUsuario($calUsuario)
    {
        $this->calUsuario = $calUsuario;

        return $this;
    }

    /**
     * Get calUsuario
     *
     * @return string 
     */
    public function getCalUsuario()
    {
        return $this->calUsuario;
    }

    /**
     * Set calReqId
     *
     * @param integer $calReqId
     * @return Calificacion
     */
    public function setCalReqId($calReqId)
    {
        $this->calReqId = $calReqId;

        return $this;
    }

    /**
     * Get calReqId
     *
     * @return integer 
     */
    public function getCalReqId()
    {
        return $this->calReqId;
    }

    /**
     * Set calQos
     *
     * @param string $calQos
     * @return Calificacion
     */
    public function setCalQos($calQos)
    {
        $this->calQos = $calQos;

        return $this;
    }

    /**
     * Get calQos
     *
     * @return string 
     */
    public function getCalQos()
    {
        return $this->calQos;
    }
}
