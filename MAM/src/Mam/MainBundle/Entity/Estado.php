<?php

namespace Mam\MainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Estado
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Estado
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
     * @ORM\Column(name="Est_nombre", type="string", length=35)
     */
    private $estNombre;

    /**
     * @var string
     *
     * @ORM\Column(name="Est_act", type="string", length=35)
     */
    private $estAct;


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
     * Set estNombre
     *
     * @param string $estNombre
     * @return Estado
     */
    public function setEstNombre($estNombre)
    {
        $this->estNombre = $estNombre;

        return $this;
    }

    /**
     * Get estNombre
     *
     * @return string 
     */
    public function getEstNombre()
    {
        return $this->estNombre;
    }

    /**
     * Set estAct
     *
     * @param string $estAct
     * @return Estado
     */
    public function setEstAct($estAct)
    {
        $this->estAct = $estAct;

        return $this;
    }

    /**
     * Get estAct
     *
     * @return string 
     */
    public function getEstAct()
    {
        return $this->estAct;
    }
}
